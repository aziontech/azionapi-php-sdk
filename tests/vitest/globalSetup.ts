import { execFileSync } from 'node:child_process'
import { existsSync } from 'node:fs'
import path from 'node:path'
import { COMPOSER_IMAGE, REPO_ROOT } from './src/sdk'

// All packages share the same runtime requirements (Guzzle 7, PSR-7 2), so
// they are installed once from the lockfile in tests/vitest/harness.
export async function setup(): Promise<void> {
  const harness = path.join(REPO_ROOT, 'tests/vitest/harness')
  if (existsSync(path.join(harness, 'vendor/autoload.php'))) return
  const user = typeof process.getuid === 'function' ? ['--user', `${process.getuid()}:${process.getgid?.()}`] : []
  execFileSync(
    'docker',
    ['run', '--rm', ...user, '-e', 'COMPOSER_HOME=/tmp/composer', '-v', `${harness}:/app`, '-w', '/app', COMPOSER_IMAGE,
      'install', '--no-interaction', '--no-progress', '--prefer-dist', '--ignore-platform-req=ext-*'],
    { stdio: 'inherit' },
  )
}
