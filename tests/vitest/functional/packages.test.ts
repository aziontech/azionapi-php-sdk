import { describe, expect, it } from 'vitest'
import { documentedEndpoints, listPackages, probe } from '../src/sdk'

const packages = listPackages()

describe('generated PHP SDK packages', () => {
  it('discovers every generated package', () => {
    expect(packages.length).toBeGreaterThanOrEqual(18)
  })

  for (const pkg of packages) {
    it(`${pkg.name}: loads, builds the API clients and exposes every documented endpoint`, async () => {
      const result = await probe(['inspect', pkg.name])
      expect(result.package).toBe(pkg.name)

      const apis: Record<string, string[]> = result.apis
      expect(Object.keys(apis).length).toBeGreaterThan(0)

      const documented = documentedEndpoints(pkg)
      expect(documented.length).toBeGreaterThan(0)
      for (const endpoint of documented) {
        expect(apis[endpoint.api], `${endpoint.api} class`).toBeDefined()
        expect(apis[endpoint.api], `${endpoint.api}::${endpoint.method}`).toContain(endpoint.method)
      }
    })
  }
})
