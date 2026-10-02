# Contributing to azionapi-php-sdk

## Repository layout

```
<package>/                 # one generated package per Azion API product
  lib/                     #   PHP sources (generated)
  docs/                    #   API reference (generated)
  composer.json
tests/vitest/              # functional tests for all packages (PHP harness in Docker)
.github/workflows/         # CI: compliance, security, lint, tests, version tag
```

## Generated code

The package directories are produced by OpenAPI Generator and arrive through
automated `generated-sdk` pull requests. Do not edit them by hand: a manual
change is lost on the next regeneration. Fix the OpenAPI document or the
generator settings instead. Hand-written changes are welcome in the
repository-level files (tests, workflows and documentation).

## Local checks

```sh
# Functional tests (Node.js 22 and Docker)
cd tests/vitest && npm ci && npm test

# Lint
find . -name '*.php' -not -path '*/vendor/*' -print0 | xargs -0 -n1 php -l >/dev/null
find . -name '*.sh' -not -path './.git/*' -not -path '*/node_modules/*' -print0 | xargs -0 shellcheck --severity=error
```

## Pull requests

1. Create a branch from `main`.
2. Keep the change focused and make sure the checks above pass.
3. Open a pull request to `main`; CODEOWNERS review is required.
4. Every merge to `main` creates the next SemVer tag automatically.

## Commit and PR titles

We follow [Conventional Commits](https://www.conventionalcommits.org/). PR
titles are checked in CI and may carry a Jira key prefix:

```
<type>[(scope)]: <description>
[ENG-123] fix(tests): cover the waf package
[NO-ISSUE] docs: clarify installation
```

Types: `feat`, `fix`, `docs`, `chore`, `ci`, `test`, `refactor`, `perf`, `build`, `revert`.

The version tag created on merge is a minor bump by default. Add `#major`,
`#patch` or `#none` to a commit message to change it.

## Security

Do not open public issues for vulnerabilities. Follow [SECURITY.md](SECURITY.md).
