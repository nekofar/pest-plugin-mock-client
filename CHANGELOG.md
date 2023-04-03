# Changelog

All notable changes to this project will be documented in this file.

## [1.0.0-alpha.11] - 2023-04-03

### <!-- 07 -->Continuous Integrations

- Bump shivammathur/setup-php from 2.21.2 to 2.24.0
- Bump orhun/git-cliff-action from 1.1.7 to 2.0.5
- Bump actions/cache from 3.0.6 to 3.2.5
- Bump actions/cache from 3.2.5 to 3.3.1 
- Bump actions/checkout from 3.3.0 to 3.5.0 

### <!-- 08 -->Miscellaneous Tasks

- Add `git-cliff` config file for generating changelogs

## [1.0.0-alpha.10] - 2023-02-16

### <!-- 07 -->Continuous Integrations

- Bump shivammathur/setup-php from 2.19.1 to 2.20.1
- Bump actions/cache from 3.0.4 to 3.0.5
- Bump shivammathur/setup-php from 2.20.1 to 2.21.0
- Bump shivammathur/setup-php from 2.21.0 to 2.21.1
- Bump actions/cache from 3.0.5 to 3.0.6
- Bump shivammathur/setup-php from 2.21.1 to 2.21.2
- Bump softprops/action-gh-release from 0.1.14 to 0.1.15
- Bump actions/checkout from 3.0.2 to 3.3.0

## [1.0.0-alpha.9] - 2022-07-08

### <!-- 08 -->Miscellaneous Tasks

- Update `config.allow-plugins` on the `composer` configs
- Normalize and update `composer` configs

## [1.0.0-alpha.8] - 2022-07-08

### <!-- 07 -->Continuous Integrations

- Add php version 8.1 to `tests` matrix
- Bump actions/cache from 3.0.1 to 3.0.2
- Bump actions/checkout from 3.0.0 to 3.0.1
- Bump actions/checkout from 3.0.1 to 3.0.2
- Bump orhun/git-cliff-action from 1.1.6 to 1.1.7
- Bump shivammathur/setup-php from 2.18.1 to 2.19.0
- Bump actions/cache from 3.0.2 to 3.0.3
- Bump shivammathur/setup-php from 2.19.0 to 2.19.1
- Bump actions/cache from 3.0.3 to 3.0.4

### <!-- 08 -->Miscellaneous Tasks

- Update `config.allow-plugins` on the `composer` configs

## [1.0.0-alpha.7] - 2022-04-11

### <!-- 07 -->Continuous Integrations

- Update `dependabot` prefixes on configuration
- Bump `actions/cache` from 2.x.x to 3.0.0

### <!-- 08 -->Miscellaneous Tasks

- Bump shivammathur/setup-php from 2.17.1 to 2.18.0
- Bump actions/cache from 3.0.0 to 3.0.1
- Bump shivammathur/setup-php from 2.18.0 to 2.18.1

## [1.0.0-alpha.6] - 2022-03-02

### <!-- 07 -->Continuous Integrations

- Change workflow actions versions to fixed versions
- Remove headlines of changelog from release notes
- Mark pre-releases tags on release workflow
- Improve and cleanup release bodies
- Add cache action for caching composer packages
- Update `actions/checkout` from v2.x.x to v3.0.0

### <!-- 08 -->Miscellaneous Tasks

- Bump actions/checkout from 2.3.5 to 2.4.0
- Bump actions/cache from 2.1.6 to 2.1.7
- Bump shivammathur/setup-php from 2.15.0 to 2.16.0
- Update github funding configs
- Solve github funding broken link issue
- Bump orhun/git-cliff-action from 1.1.5 to 1.1.6
- Bump shivammathur/setup-php from 2.16.0 to 2.17.0
- Bump shivammathur/setup-php from 2.17.0 to 2.17.1

## [1.0.0-alpha.5] - 2021-09-22

### <!-- 08 -->Miscellaneous Tasks

- Upgrade dependabot configuration

## [1.0.0-alpha.4] - 2021-09-22

### <!-- 03 -->Testing

- Add more tests for `mockClient`
- Replace instance assertions by global functions
- Replace assertions by expectations

### <!-- 07 -->Continuous Integrations

- Change php version on static workflow to 7.3

### <!-- 08 -->Miscellaneous Tasks

- Add `pestphp/pest-plugin-global-assertions:^1.0` package

## [1.0.0-alpha.3] - 2021-09-22

### <!-- 01 -->Features

- Keep single instance for `MockClient` using `mockClient` function
- Add new `assertRequestCount` for assert `MockClient` request count

### <!-- 03 -->Testing

- Add a test to check it can send multiple requests

### <!-- 04 -->Refactor

- [**breaking**] Rename `client` function to `mockClient`
- Rename `Client` trait to `ClientTrait`
- Add missing strict type declarations
- Replace mixed type usages by proper types

### <!-- 05 -->Documentation

- Add some description for `mockClient`
- Add license docblock to the top of files

### <!-- 07 -->Continuous Integrations

- Replace `php-cs-fixer` by `phpcs` on static workflow
- Replace direct usage of `pest` and `phpstan` by composer scripts

### <!-- 08 -->Miscellaneous Tasks

- Replace `php-cs-fixer` by `phpcs`

## [1.0.0-alpha.2] - 2021-09-21

### <!-- 05 -->Documentation

- Replace markdawn license file with a text file
- Update readme file with base information

## [1.0.0-alpha.1] - 2021-09-21

### <!-- 01 -->Features

- Add new `client` function to access mock client

### <!-- 04 -->Refactor

- Remove useless boilerplate files

### <!-- 05 -->Documentation

- Add funding configuration file

### <!-- 07 -->Continuous Integrations

- Add new workflow for create releases

### <!-- 08 -->Miscellaneous Tasks

- Ignore composer lock and vendor folder
- Add `git-clif` config file
- Change autoload namespace
- Add autoload for development
- Add `php-http/mock-client:^1.5` package
- Remove `pestphp/pest-dev-tools` package
- Add `phpstan/phpstan-strict-rules:^0.12.11` package
- Ignore phpcs cache file
- Add `ergebnis/phpstan-rules:^0.15.3` package
- Add `thecodingmachine/phpstan-strict-rules:^0.12.1` package
- Remove useless includes from phpstan config file
- Change project namespace
- Add `php-http/message:^1.0` package
- Add `guzzlehttp/psr7:^2.0` package
- Rename phpunit configuration file

<!-- generated by git-cliff -->
