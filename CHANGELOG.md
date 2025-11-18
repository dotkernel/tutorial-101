# Changelog

## 1.2.0 - 2025-03-03

Implemented `PSR-15`-compliant request handlers, which replace request controllers.

Since these files are meant to handle one single action, their names must reflect their responsibility.

For this, we introduced a unified handler naming pattern used across the application: `HTTP Verb` + `Resource` + `Action` + `Extra (optional)` + `Handler`.

### Changed

* Issue [#42](https://github.com/dotkernel/light/issues/42): Refactored `PageHandler` to reflect naming standard by [@alexmerlin](https://github.com/alexmerlin) in [#43](https://github.com/dotkernel/light/pull/43)
* Issue [#46](https://github.com/dotkernel/light/issues/46): Renamed `PageHandlerFactory` to `GetPageViewHandlerFactory` by [@alexmerlin](https://github.com/alexmerlin) in [#47](https://github.com/dotkernel/light/pull/47)
* Update qodana_code_quality.yml by [@arhimede](https://github.com/arhimede) in [#34](https://github.com/dotkernel/light/pull/34)

### Added

* Issue [#44](https://github.com/dotkernel/light/issues/44): Added full config for `dot-errorhandler` by [@alexmerlin](https://github.com/alexmerlin) in [#45](https://github.com/dotkernel/light/pull/45)
* Run `PHPStan` checks on `PHP 8.4` as well by [@alexmerlin](https://github.com/alexmerlin) in [#40](https://github.com/dotkernel/light/pull/40)

### Deprecated

* Nothing

### Removed

* Issue [#27](https://github.com/dotkernel/light/issues/27): Removed `dotkernel/dot-controller` and replaced with handlers by [@MarioRadu](https://github.com/MarioRadu) in [#33](https://github.com/dotkernel/light/pull/33)
* Removed section "Configuration - First Run" from README.md by [@Howriq](https://github.com/Howriq) in [#38](https://github.com/dotkernel/light/pull/38)

### Fixed

* Nothing

## 1.1.1 - 2025-02-07

### Changed

* Issue [#28](https://github.com/dotkernel/light/issues/28): Bumped dependencies in `composer.json` by [@alexmerlin](https://github.com/alexmerlin) in [#29](https://github.com/dotkernel/light/pull/29)

### Added

* Added documentation link to README.md by [@arhimede](https://github.com/arhimede) in [#26](https://github.com/dotkernel/light/pull/26)

### Deprecated

* Nothing

### Removed

* Issue [#28](https://github.com/dotkernel/light/issues/28): Removed dependency `friendsofphp/proxy-manager-lts` from `composer.json` by [@alexmerlin](https://github.com/alexmerlin) in [#29](https://github.com/dotkernel/light/pull/29)

### Fixed

* Nothing

## 1.1.0 - 2025-01-22

### Changed

* Issue [#12](https://github.com/dotkernel/light/issues/12): Restricted `Qodana` to supported PHP versions by [@alexmerlin](https://github.com/alexmerlin) in [#13](https://github.com/dotkernel/light/pull/13)
* Issue [#16](https://github.com/dotkernel/light/issues/16): Updated laminas/laminas-coding-standard to latest version by [@MarioRadu](https://github.com/MarioRadu) in [#17](https://github.com/dotkernel/light/pull/17)
* Issue [#10](https://github.com/dotkernel/light/issues/10): Increased PHPStan `memory_limit` to `1G` by [@alexmerlin](https://github.com/alexmerlin) in [#20](https://github.com/dotkernel/light/pull/20)
* Issue [#23](https://github.com/dotkernel/light/issues/23): Home page tweaks by [@alexmerlin](https://github.com/alexmerlin) in [#24](https://github.com/dotkernel/light/pull/24)

### Added

* Issue [#14](https://github.com/dotkernel/light/issues/14): Composer post install script by [@MarioRadu](https://github.com/MarioRadu) in [#15](https://github.com/dotkernel/light/pull/15)
* Issue [#21](https://github.com/dotkernel/light/issues/21): Replaced `dotkernel/dot-twigrenderer` with `mezzio/mezzio-twigrenderer` by [@alexmerlin](https://github.com/alexmerlin) in [#22](https://github.com/dotkernel/light/pull/22)
* Issue [#7](https://github.com/dotkernel/light/issues/7): Added support for PHP 8.4 by [@alexmerlin](https://github.com/alexmerlin) in [#25](https://github.com/dotkernel/light/pull/25)

### Deprecated

* Nothing

### Removed

* Issue [#21](https://github.com/dotkernel/light/issues/21): Replaced `dotkernel/dot-twigrenderer` with `mezzio/mezzio-twigrenderer` by [@alexmerlin](https://github.com/alexmerlin) in [#22](https://github.com/dotkernel/light/pull/22)

### Fixed

* Issue [#18](https://github.com/dotkernel/light/issues/18): Fixed broken `LICENSE` link in `README.md` by [@alexmerlin](https://github.com/alexmerlin) in [#19](https://github.com/dotkernel/light/pull/19)

## 1.0.1 - 2024-11-22

### Changed

* Update qodana_code_quality.yml by [@arhimede](https://github.com/arhimede) in [#5](https://github.com/dotkernel/light/pull/5)

### Added

* Issue [#8](https://github.com/dotkernel/light/issues/8): Implemented PHPStan by [@MarioRadu](https://github.com/MarioRadu) in [#9](https://github.com/dotkernel/light/pull/9)

### Deprecated

* Nothing

### Removed

* Issue [#8](https://github.com/dotkernel/light/issues/8) Removed Psalm by [@MarioRadu](https://github.com/MarioRadu) in [#9](https://github.com/dotkernel/light/pull/9)

### Fixed

* Nothing

## 1.0.0 - 2024-10-03

### Changed

* Update home.html.twig by [@arhimede](https://github.com/arhimede) in [#4](https://github.com/dotkernel/light/pull/4)

### Added

* Issue [#2](https://github.com/dotkernel/light/issues/2): Added project files by [@alexmerlin](https://github.com/alexmerlin) in [#3](https://github.com/dotkernel/light/pull/3)

### Deprecated

* Nothing

### Removed

* Nothing

### Fixed

* Nothing
