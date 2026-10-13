import { execFile } from 'node:child_process'
import { existsSync, readdirSync, readFileSync } from 'node:fs'
import path from 'node:path'
import { promisify } from 'node:util'

const run = promisify(execFile)

export const REPO_ROOT = path.resolve(__dirname, '../../..')

// Pinned by digest: PHP runtime for the harness and Composer for its lockfile.
export const PHP_IMAGE = 'php:8.3-cli@sha256:f1ed6d1fd0aa769ab94ca307b9deaf55fbc18434315b70e319cd79078515cd2b'
export const COMPOSER_IMAGE = 'composer@sha256:5248900ab8b5f7f880c2d62180e40960cd87f60149ec9a1abfd62ac72a02577c'

// On Linux (CI) the container shares the host network; elsewhere Docker
// Desktop/colima expose the host as host.docker.internal.
const LINUX = process.platform === 'linux'
export const HOST_FROM_CONTAINER = LINUX ? '127.0.0.1' : 'host.docker.internal'

export interface SdkPackage {
  name: string
  dir: string
}

/** Every generated package: a top-level directory with composer.json and lib/. */
export function listPackages(): SdkPackage[] {
  return readdirSync(REPO_ROOT, { withFileTypes: true })
    .filter((d) => d.isDirectory() && !d.name.startsWith('.') && d.name !== 'tests')
    .filter((d) => existsSync(path.join(REPO_ROOT, d.name, 'composer.json')) && existsSync(path.join(REPO_ROOT, d.name, 'lib')))
    .map((d) => ({ name: d.name, dir: path.join(REPO_ROOT, d.name) }))
    .sort((a, b) => a.name.localeCompare(b.name))
}

/** Endpoints documented in the package README ("Documentation for API Endpoints" table). */
export function documentedEndpoints(pkg: SdkPackage): { api: string; method: string; verb: string; route: string }[] {
  const readme = readFileSync(path.join(pkg.dir, 'README.md'), 'utf8')
  const row = /^\*(\w+)\* \| \[\*\*(\w+)\*\*\]\([^)]*\) \| \*\*(\w+)\*\* ([^ |]+)/gm
  return [...readme.matchAll(row)].map((m) => ({ api: m[1], method: m[2], verb: m[3].toUpperCase(), route: m[4] }))
}

/** Run tests/vitest/harness/probe.php in the pinned PHP image, repository mounted read-only. */
export async function probe(args: string[]): Promise<any> {
  const network = LINUX ? ['--network', 'host'] : ['--add-host', 'host.docker.internal:host-gateway']
  try {
    const { stdout } = await run(
      'docker',
      ['run', '--rm', ...network, '-v', `${REPO_ROOT}:/repo:ro`, '-w', '/repo', PHP_IMAGE, 'php', 'tests/vitest/harness/probe.php', ...args],
      { maxBuffer: 16 * 1024 * 1024 },
    )
    return JSON.parse(stdout)
  } catch (error) {
    const err = error as { stderr?: string; message: string }
    throw new Error(`${err.message}\n${err.stderr ?? ''}`)
  }
}
