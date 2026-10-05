import { defineConfig } from 'vitest/config'

export default defineConfig({
  test: {
    globals: true,
    globalSetup: './globalSetup.ts',
    include: ['functional/**/*.test.ts'],
    // Each probe starts a PHP container; run files one at a time.
    fileParallelism: false,
    testTimeout: 180_000,
    // The setup pulls the pinned PHP and Composer images and installs Guzzle.
    hookTimeout: 600_000,
  },
})
