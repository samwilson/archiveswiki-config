# archiveswiki-config

Configuration files and other assets for some wikis:

* [ArchivesWiki](https://archives.org.au)
* [FreoWiki](https://freo.wiki)

[![CI](https://github.com/samwilson/archiveswiki-config/actions/workflows/ci.yml/badge.svg)](https://github.com/samwilson/archiveswiki-config/actions/workflows/ci.yml)

For more information, contact [Sam Wilson](https://samwilson.id.au).

## Upgrading

**1. In this repo:**

Run `composer outdated -D` and update any normal dependencies.

Update all `repositories` in `composer.local.json`:
the `version` and `reference` keys should be updated to the latest version.
For exaample:

```json
"version": "1.44.0"
…
"reference": "REL1_44"
```

There's no need to update the `^1` version number in `require` because MediaWiki will forever be version 1.

**2. Then, on the server:**

Checkout the new version of core, e.g. `git checkout 1.44.0`

Update submodules: `git submodule update --init --recursive`

Install Composer dependencies: `composer update --no-dev -o`
