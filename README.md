# archiveswiki-config

Configuration files and other assets for some wikis:

* [ArchivesWiki](https://archives.org.au)
* [Freopedia](https://freopedia.org)

[![CI](https://github.com/samwilson/archiveswiki-config/actions/workflows/ci.yml/badge.svg)](https://github.com/samwilson/archiveswiki-config/actions/workflows/ci.yml)

For more information, contact [Sam Wilson](https://samwilson.id.au).

## Installing

Symlinks:

```console
ln -s /srv/archiveswiki-config/composer.local.json /var/www/mediawiki/composer.local.json
ln -s /srv/archiveswiki-config/jobrunner/mediawiki-jobs.service /etc/systemd/system/mediawiki-jobs.service
ln -s /srv/archiveswiki-config/jobrunner/mediawiki-jobs@.service /etc/systemd/system/mediawiki-jobs@.service
```

Start the services with:

```console
sudo systemctl start mediawiki-jobs.service
```

## Upgrading

**1. In this repo:**

Run `composer outdated -D` and update any normal dependencies.

Update all `repositories` in `composer.local.json`:
the `version` and `reference` keys should be updated to the latest version.
For example:

```json
"version": "1.44.0"
…
"reference": "REL1_44"
```

There's no need to update the `^1` version number in `require` because MediaWiki will forever be version 1.

Also make sure to remove any extensions that have recently been [bundled](https://www.mediawiki.org/wiki/Bundled_extensions_and_skins).

**2. Then, on the server:**

Checkout the new version of core, e.g. `git checkout 1.44.0`

Reset previous modifications to `vendor/` (which is annoyingly managed as a submodule): `git submodule foreach git reset --hard`

Update submodules: `git submodule update --init --recursive`

Install Composer dependencies: `composer update --no-dev -o`

Run the update script for each wiki, e.g.: `php ./maintenance/run update --wiki archiveswiki`
