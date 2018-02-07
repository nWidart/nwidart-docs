---
title: Configuration
---

You can publish the package configuration using the following command:

``` bash
php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"
```

In the published configuration file you can configure the following things:

## Default namespace

What the default namespace will be when generating modules.

Key: `namespace`

Default: `Modules`

## Overwrite the generated files

Overwrite the default generated stubs to be used when generating modules. This can be useful to customise the output of different files.

Key: `stubs`

## Overwrite the paths

Overwrite the default paths used throughout the package.

Key: `paths`

## Scan additional folders for modules

This is disabled by default. Once enabled, the package will look for modules in the specified array of paths.

Key: `scan`

## Composer file template

Customise the generated `composer.json` file.

Key: `composer`

## Caching

If you have many modules it's a good idea to cache this information (like the multiple `module.json` files for example).

Key: `cache`

## Registering custom namespace

Decide which custom namespaces need to be registered by the package. If one is set to false, the package won't handle its registration.

Key: `register`

