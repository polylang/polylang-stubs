# Polylang Stubs

This package provides stub declarations for [Polylang](https://wordpress.org/plugins/polylang/) and [Polylang Pro](https://polylang.pro).
These stubs can help plugin and theme developers leverage static analysis tools like [PHPStan](https://phpstan.org/).

Stubs are generated directly from the source using [giacocorsiglia/stubs-generator](https://github.com/GiacoCorsiglia/php-stubs-generator).

### Requirements

- PHP >=7.1

### Installation

Require this package as a development dependency with Composer.

```bash
composer require --dev wpsyntex/polylang-stubs
```

### Usage in PHPStan

Include the stubs in the PHPStan configuration file.

```yaml
parameters:
  bootstrapFiles:
    - vendor/wpsyntex/polylang-stubs/polylang-stubs.php
```

It's also recommended to use the Polylang PHPStan extension [wpsyntex/polylang-phpstan](https://github.com/polylang/polylang-phpstan)
