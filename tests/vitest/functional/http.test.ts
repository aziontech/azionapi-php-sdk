import { createServer, type IncomingMessage, type Server } from 'node:http'
import type { AddressInfo } from 'node:net'
import { afterAll, beforeAll, describe, expect, it } from 'vitest'
import { HOST_FROM_CONTAINER, probe } from '../src/sdk'

interface Recorded {
  method: string
  url: string
  authorization?: string
  accept?: string
}

const API_KEY = 'functional-test-token'

let server: Server
let host = ''
const requests: Recorded[] = []
const responses = new Map<string, unknown>()

function record(req: IncomingMessage): Recorded {
  const entry = {
    method: req.method ?? '',
    url: req.url ?? '',
    authorization: req.headers.authorization,
    accept: req.headers.accept,
  }
  requests.push(entry)
  return entry
}

beforeAll(async () => {
  server = createServer((req, res) => {
    const entry = record(req)
    const body = responses.get(`${entry.method} ${entry.url}`)
    if (body === undefined) {
      res.writeHead(404, { 'Content-Type': 'application/json' })
      res.end(JSON.stringify({ detail: 'not found' }))
      return
    }
    res.writeHead(200, { 'Content-Type': 'application/json' })
    res.end(JSON.stringify(body))
  })
  // The PHP container reaches this server through the host network (Linux)
  // or host.docker.internal (Docker Desktop / colima).
  const bind = process.platform === 'linux' ? '127.0.0.1' : '0.0.0.0'
  await new Promise<void>((resolve) => server.listen(0, bind, resolve))
  host = `http://${HOST_FROM_CONTAINER}:${(server.address() as AddressInfo).port}`
})

afterAll(async () => {
  await new Promise<void>((resolve) => server.close(() => resolve()))
})

async function call(pkg: string, api: string, method: string, args: unknown[]) {
  return probe(['call', pkg, host, API_KEY, api, method, JSON.stringify(args)])
}

function lastRequest(): Recorded {
  return requests[requests.length - 1]
}

describe('HTTP round trip against a local API double', () => {
  it('personal_tokens: GET by id with path parameter and token auth', async () => {
    const id = '2c5a2e1e-6c5b-4b5e-9b0e-3f6d2f9a1b7c'
    responses.set(`GET /iam/personal_tokens/${id}`, {
      uuid: id, name: 'ci-token', created: '2026-01-01T00:00:00Z', expires_at: '2027-01-01T00:00:00Z', description: 'ci',
    })

    const result = await call('personal_tokens', 'PersonalTokenApi', 'getPersonalToken', [id])

    expect(lastRequest()).toMatchObject({ method: 'GET', url: `/iam/personal_tokens/${id}`, authorization: `Token ${API_KEY}` })
    expect(result.type).toBe('PersonalTokenResponseGet')
    expect(result.data).toMatchObject({ uuid: id, name: 'ci-token', description: 'ci' })
  })

  it('variables: GET by uuid deserializes the Variable model', async () => {
    const uuid = '0b6c2a52-3d6f-4f7a-9a43-6a2d0c1e9f10'
    responses.set(`GET /variables/${uuid}`, {
      uuid, key: 'API_URL', value: 'https://example.com', secret: false, last_editor: 'ci@example.com',
      created_at: '2026-01-01T00:00:00Z', updated_at: '2026-01-02T00:00:00Z',
    })

    const result = await call('variables', 'VariablesApi', 'apiVariablesRetrieve', [uuid])

    expect(lastRequest()).toMatchObject({ method: 'GET', url: `/variables/${uuid}`, authorization: `Token ${API_KEY}` })
    expect(result.type).toBe('Variable')
    expect(result.data).toMatchObject({ uuid, key: 'API_URL', value: 'https://example.com', secret: false })
  })

  it('edgefunctions: GET by id deserializes the nested results', async () => {
    responses.set('GET /edge_functions/42', {
      results: { id: 42, name: 'hello-world', language: 'javascript', active: true },
      schema_version: 3,
    })

    const result = await call('edgefunctions', 'EdgeFunctionsApi', 'edgeFunctionsIdGet', [42])

    expect(lastRequest()).toMatchObject({ method: 'GET', url: '/edge_functions/42', authorization: `Token ${API_KEY}` })
    expect(result.type).toBe('EdgeFunctionResponse')
    expect(result.data).toMatchObject({ results: { id: 42, name: 'hello-world' }, schema_version: 3 })
  })

  it('domains: GET by id sends the optional Accept header and deserializes the entity', async () => {
    responses.set('GET /domains/7', {
      results: { id: 7, name: 'site', cnames: ['www.example.com'], is_active: true, domain_name: 'abc.map.azionedge.net' },
      schema_version: 3,
    })

    const result = await call('domains', 'DomainsApi', 'getDomain', ['7', 'application/json; version=3'])

    expect(lastRequest()).toMatchObject({
      method: 'GET', url: '/domains/7', authorization: `Token ${API_KEY}`, accept: 'application/json; version=3',
    })
    expect(result.type).toBe('DomainResponseWithResult')
    expect(result.data.results).toMatchObject({ id: 7, cnames: ['www.example.com'], domain_name: 'abc.map.azionedge.net' })
  })

  it('surfaces HTTP errors as ApiException', async () => {
    const missing = '11111111-2222-4333-8444-555555555555'
    await expect(call('variables', 'VariablesApi', 'apiVariablesRetrieve', [missing])).rejects.toThrow(/ApiException.*404/s)
    expect(lastRequest()).toMatchObject({ method: 'GET', url: `/variables/${missing}` })
  })

  it('validates path parameters before sending the request', async () => {
    const before = requests.length
    await expect(call('variables', 'VariablesApi', 'apiVariablesRetrieve', ['not-a-uuid'])).rejects.toThrow(/invalid value for "uuid"/)
    expect(requests.length).toBe(before)
  })
})
