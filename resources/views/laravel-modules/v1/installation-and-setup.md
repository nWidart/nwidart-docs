---
title: Installation and Setup
---

## Composer

To install through composer, by run the following command:

``` bash
composer require nwidart/laravel-modules
```

## Add Service Provider

Next add the following service provider in `config/app.php`.

``` php
'providers' => [
  Nwidart\Modules\LaravelModulesServiceProvider::class,
],
```

Next, add the following aliases to `aliases` array in the same file.

``` php
'aliases' => [
  'Module' => Nwidart\Modules\Facades\Module::class,
],
```

Next publish the package's configuration file by running :

``` bash
php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"
```

## Autoloading

By default the module classes are not loaded automatically. You can autoload your modules using `psr-4`. For example :

``` json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "Modules/"
    }
  }
}
```
