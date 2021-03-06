# Changelog
All notable changes to this project will be documented in this file.

## [1.0.0-alpha.9] - 2022-07-08

### Miscellaneous Tasks

- Update `config.allow-plugins` on the `composer` configs
- Normalize and update `composer` configs

## [1.0.0-alpha.8] - 2022-07-08

### Miscellaneous Tasks

- Update `config.allow-plugins` on the `composer` configs

## [1.0.0-alpha.7] - 2022-04-11

### Miscellaneous Tasks

- Bump shivammathur/setup-php from 2.17.1 to 2.18.0
- Bump actions/cache from 3.0.0 to 3.0.1
- Bump shivammathur/setup-php from 2.18.0 to 2.18.1

## [1.0.0-alpha.6] - 2022-03-02

### Miscellaneous Tasks

- Bump actions/checkout from 2.3.5 to 2.4.0
- Bump actions/cache from 2.1.6 to 2.1.7
- Bump shivammathur/setup-php from 2.15.0 to 2.16.0
- Update github funding configs
- Solve github funding broken link issue
- Bump orhun/git-cliff-action from 1.1.5 to 1.1.6
- Bump shivammathur/setup-php from 2.16.0 to 2.17.0
- Bump shivammathur/setup-php from 2.17.0 to 2.17.1

## [1.0.0-alpha.5] - 2021-09-22

### Miscellaneous Tasks

- Upgrade dependabot configuration

## [1.0.0-alpha.4] - 2021-09-22

### Miscellaneous Tasks

- Add `pestphp/pest-plugin-global-assertions:^1.0` package

### Testing

- Add more tests for `mockClient`
- Replace instance assertions by global functions
- Replace assertions by expectations

## [1.0.0-alpha.3] - 2021-09-22

### Documentation

- Add some description for `mockClient`
- Add license docblock to the top of files

### Features

- Keep single instance for `MockClient` using `mockClient` function
- Add new `assertRequestCount` for assert `MockClient` request count

### Miscellaneous Tasks

- Replace `php-cs-fixer` by `phpcs`

### Refactor

- Rename `client` function to `mockClient`
- Rename `Client` trait to `ClientTrait`
- Add missing strict type declarations
- Replace mixed type usages by proper types

### Styling

- Solve whitespace issues all over codes

### Testing

- Add a test to check it can send multiple requests

## [1.0.0-alpha.2] - 2021-09-21

### Documentation

- Replace markdawn license file with a text file
- Update readme file with base information

## [1.0.0-alpha.1] - 2021-09-21

### Documentation

- Add funding configuration file

### Features

- Add new `client` function to access mock client

### Miscellaneous Tasks

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

### Refactor

- Remove useless boilerplate files

<!-- generated by git-cliff -->
