## [1.0.0-alpha.14] - 2025-08-10

### 🐛 Bug Fixes

- Solve some minor issues and update dependencies
## [1.0.0-alpha.13] - 2023-07-01

### 📚 Documentation

- Update crypto funding address over configs
- Add funding to the composer configs
- Add crypto donate badge to the project readme
## [1.0.0-alpha.12] - 2023-05-18

### 📚 Documentation

- Replace build badge on readme file

### ⚙️ Miscellaneous Tasks

- *(dependabot)* Change `open-pull-requests-limit` from 10 to 20
## [1.0.0-alpha.11] - 2023-04-03

### ⚙️ Miscellaneous Tasks

- Add `git-cliff` config file for generating changelogs
## [1.0.0-alpha.9] - 2022-07-08

### 📚 Documentation

- *(changelog)* Update the changelog file

### ⚙️ Miscellaneous Tasks

- Update `config.allow-plugins` on the `composer` configs
- Normalize and update `composer` configs
## [1.0.0-alpha.8] - 2022-07-08

### 📚 Documentation

- *(changelog)* Update the changelog file

### ⚙️ Miscellaneous Tasks

- Add php version 8.1 to `tests` matrix
- Update `config.allow-plugins` on the `composer` configs
## [1.0.0-alpha.7] - 2022-04-11

### ⚙️ Miscellaneous Tasks

- Update `dependabot` prefixes on configuration
- *(deps)* Bump shivammathur/setup-php from 2.17.1 to 2.18.0
- *(deps)* Bump actions/cache from 3.0.0 to 3.0.1
- *(deps)* Bump shivammathur/setup-php from 2.18.0 to 2.18.1
## [1.0.0-alpha.6] - 2022-03-02

### 📚 Documentation

- *(changelog)* Update the changelog file

### ⚙️ Miscellaneous Tasks

- *(github)* Change workflow actions versions to fixed versions
- *(github)* Remove headlines of changelog from release notes
- *(deps)* Bump actions/checkout from 2.3.5 to 2.4.0
- *(github)* Mark pre-releases tags on release workflow
- *(github)* Improve and cleanup release bodies
- *(github)* Add cache action for caching composer packages
- *(deps)* Bump actions/cache from 2.1.6 to 2.1.7
- *(deps)* Bump shivammathur/setup-php from 2.15.0 to 2.16.0
- *(github)* Update github funding configs
- *(github)* Solve github funding broken link issue
- *(deps)* Bump orhun/git-cliff-action from 1.1.5 to 1.1.6
- *(deps)* Bump shivammathur/setup-php from 2.16.0 to 2.17.0
- *(deps)* Bump shivammathur/setup-php from 2.17.0 to 2.17.1
- Update `actions/checkout` from v2.x.x to v3.0.0
## [1.0.0-alpha.5] - 2021-09-22

### ⚙️ Miscellaneous Tasks

- *(deps)* Upgrade dependabot configuration
## [1.0.0-alpha.4] - 2021-09-22

### 📚 Documentation

- *(changelog)* Update the changelog file

### 🧪 Testing

- Add more tests for `mockClient`
- Replace instance assertions by global functions
- Replace assertions by expectations

### ⚙️ Miscellaneous Tasks

- *(github)* Change php version on static workflow to 7.3
- *(deps-dev)* Add `pestphp/pest-plugin-global-assertions:^1.0` package
## [1.0.0-alpha.3] - 2021-09-22

### 🚀 Features

- Keep single instance for `MockClient` using `mockClient` function
- Add new `assertRequestCount` for assert `MockClient` request count

### 🚜 Refactor

- [**breaking**] Rename `client` function to `mockClient`
- Rename `Client` trait to `ClientTrait`
- Add missing strict type declarations
- Replace mixed type usages by proper types

### 📚 Documentation

- Add some description for `mockClient`
- Add license docblock to the top of files

### 🎨 Styling

- Solve whitespace issues all over codes

### 🧪 Testing

- Add a test to check it can send multiple requests

### ⚙️ Miscellaneous Tasks

- *(test)* Replace `php-cs-fixer` by `phpcs`
- *(github)* Replace `php-cs-fixer` by `phpcs` on static workflow
- *(github)* Replace direct usage of `pest` and `phpstan` by composer scripts
## [1.0.0-alpha.2] - 2021-09-21

### 📚 Documentation

- Replace markdawn license file with a text file
- Update readme file with base information
- *(changelog)* Update the changelog file
## [1.0.0-alpha.1] - 2021-09-21

### 🚀 Features

- Add new `client` function to access mock client

### 🚜 Refactor

- Remove useless boilerplate files

### 📚 Documentation

- *(github)* Add funding configuration file
- *(changelog)* Update the changelog file

### ⚙️ Miscellaneous Tasks

- Ignore composer lock and vendor folder
- *(changelog)* Add `git-clif` config file
- *(github)* Add new workflow for create releases
- Change autoload namespace
- Add autoload for development
- *(deps)* Add `php-http/mock-client:^1.5` package
- *(deps)* Remove `pestphp/pest-dev-tools` package
- *(deps-dev)* Add `phpstan/phpstan-strict-rules:^0.12.11` package
- Ignore phpcs cache file
- *(deps-dev)* Add `ergebnis/phpstan-rules:^0.15.3` package
- *(deps-dev)* Add `thecodingmachine/phpstan-strict-rules:^0.12.1` package
- *(lint)* Remove useless includes from phpstan config file
- Change project namespace
- *(deps)* Add `php-http/message:^1.0` package
- *(deps)* Add `guzzlehttp/psr7:^2.0` package
- Rename phpunit configuration file
