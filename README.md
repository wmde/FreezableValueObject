# FreezableValueObject

[![Build Status](https://travis-ci.org/wmde/FreezableValueObject.svg?branch=master)](https://travis-ci.org/wmde/FreezableValueObject)
[![Latest Stable Version](https://poser.pugx.org/wmde/freezable-value-object/version.png)](https://packagist.org/packages/wmde/freezable-value-object)
[![Download count](https://poser.pugx.org/wmde/freezable-value-object/d/total.png)](https://packagist.org/packages/wmde/freezable-value-object)

PHP Trait for creating freezable value objects.

For motivation and considerations, see
[Missing in PHP7: Value objects](https://www.entropywins.wtf/blog/2016/02/03/missing-in-php7-value-objects/)

## Installation

To use the FreezableValueObject library in your project, simply add a dependency on wmde/freezable-value-object
to your project's `composer.json` file. Here is a minimal example of a `composer.json`
file that just defines a dependency on FreezableValueObject 1.x:

```json
{
    "require": {
        "wmde/freezable-value-object": "~1.0"
    }
}
```

## Development

For development you need to have Docker and Docker-compose installed. Local PHP and Composer are not needed.

    sudo apt-get install docker docker-compose

### Running Composer

To pull in the project dependencies via Composer, run:

    make composer install

You can run other Composer commands via `make run`, but at present this does not support argument flags.
If you need to execute such a command, you can do so in this format:

    docker run --rm --interactive --tty --volume $PWD:/app -w /app\
     --volume ~/.composer:/composer --user $(id -u):$(id -g) composer composer install -vvv

### Running the CI checks

To run all CI checks, which includes PHPUnit tests, PHPCS style checks and coverage tag validation, run:

    make
    
### Running the tests

To run just the PHPUnit tests run

    make test

To run only a subset of PHPUnit tests or otherwise pass flags to PHPUnit, run

    docker-compose run --rm app ./vendor/bin/phpunit --filter SomeClassNameOrFilter
