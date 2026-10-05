# Changelog

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).
Every merge to `main` is tagged automatically (minor bump by default).

## [Unreleased]

### Added
- Engineering compliance baseline: LICENSE (MIT), SECURITY.md, CODEOWNERS, MAINTAINERS.md, CONTRIBUTING.md, CHANGELOG.md and an expanded README
- Compliance, security (gitleaks, semgrep, osv-scanner), OSSF Scorecard, PR title, code quality (`php -l`, ShellCheck) and functional test workflows
- Vitest functional tests for the generated packages (`tests/vitest/`)

### Changed
- `bump_version.yml`: the deprecated `anothrNick/github-tag-action` is replaced by an inline script with the same bump rules; actions pinned to SHAs and token scoped to the job

## [v0.84.0] - 2025-03-05

### Changed
- SDK packages regenerated from the OpenAPI documents (#100)
