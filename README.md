# phpbb-serbian

Serbian Cyrillic/Latin translation source files, build and validation system for
phpBB.
This is unofficial repository.

## About

This repository is for translators and developers only, not end users.
If you are end user looking for a translation for your forum then take a look at
[phpBB languages](https://www.phpbb.com/languages/) page.

## Development environment

Development environment was tested on:

* Ubuntu Desktop 18.04.4 LTS

It should work on any Debian based system, though.

Setup development environment:

    ./setup.sh

You should run this only once.

## Source files

Translation source files are in `src/` directory and it is Cyrillic only.
Latin translation is built automatically by simply transcribing Cyrillic to
Latin script.
The benefit is having a single source code for both scripts.

## Build

Build translations:

    ./build.py

Resulting translations are stored in `build/` directory. It is safe to delete
this directory since it can be built again easily.

## Validation

Make sure translations pass the validator:

    ./validate.sh sr-Cyrl
    ./validate.sh sr-Latn

If everything is OK then zip the `build/` directory and ship it to end users.
This directory contains both Cyrillic and Latin translations.

## Translate for new phpBB version

Branch into `feature/name-of-the-feature` branch from `master` branch.

Edit `validate.sh` and update `PHPBB_TAG` and `PHPBB_VERSION` variables to point
to latest tag and version.

Edit source files in `src/` directory.

Build:

    ./build.py

Validate:

    ./validate.sh sr-Cyrl
    ./validate.sh sr-Latn

When there are no errors/warnings/notices create pull request.
Submit zip'ed `build/` directory to official translations for validation.
If it is accepted we will create release here.

## Branching strategy

`master` branch should keep track of latest developments in phpBB code.

For each major phpBB version we create release branch, e.g. `release/3.3.0`.
Release branches are never merged back into `master` branch. Bug fixes should be
cherry-picked though.
In release branch we tag a release as e.g. `3.3.0-r1` and then release it here.
Bug fixes should go to this branch and then new release should be tagged e.g.
`3.3.0-r2`, etc.

To create bug fix: branch into `bugfix/name-of-bugfix` from release branch
and when done (build/validate) create pull request.

Features are done by branching from `master` into `feature/name-of-the-feature`.
Feature banches are merged back into `master` through pull request.

## Note on language codes

Language codes are `sr-Cyrl` and `sr-Latn` as recommended by:

    https://www.w3.org/International/questions/qa-html-language-declarations

And listed here:

    http://www.iana.org/assignments/language-subtag-registry/language-subtag-registry
