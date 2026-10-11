# webservco/environment

A PHP component/library. Please see [webservco/sandbox](https://webservco.github.io/sandbox/) for an example project using these types of components.

Names for the environments an application runs in: development, testing, staging and production.

---

## Installation

```shell
composer require webservco/environment
```

---

## Usage

Store the environment name in the configuration and compare it with the constants. The `ErrorController` in the `webservco/sandbox` project uses this to decide how much error detail to show.

```php
use WebServCo\Environment\Contract\EnvironmentInterface;

// \WebServCo\Configuration\Contract\ConfigurationGetterInterface
$showErrorDetails = match ($configurationGetter->getString('ENVIRONMENT')) {
    EnvironmentInterface::ENVIRONMENT_DEVELOPMENT,
    EnvironmentInterface::ENVIRONMENT_TESTING => true,
    EnvironmentInterface::ENVIRONMENT_STAGING,
    EnvironmentInterface::ENVIRONMENT_PRODUCTION => false,
};
```

---

## Contracts

| Interface | Implementation | Purpose |
| --- | --- | --- |
| `Contract\EnvironmentInterface` | none (constants only) | `ENVIRONMENT_DEVELOPMENT`, `ENVIRONMENT_TESTING`, `ENVIRONMENT_STAGING`, `ENVIRONMENT_PRODUCTION`. |

Namespaces are relative to `WebServCo\Environment\`.

---

## Configuration

```ini
[General]

ENVIRONMENT = development
```

---

## Development

```shell
# Start project.
ddev start
# Install dependencies.
ddev c u
# Run all validations.
ddev c c
# Run unit tests.
ddev c test:dox
```

---

## License

[MIT](LICENSE.md)
