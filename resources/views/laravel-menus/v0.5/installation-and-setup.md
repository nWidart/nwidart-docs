---
title: Installation and Setup
---

## Composer

To install through composer, by run the following command:

``` bash
composer require nwidart/laravel-menus
```

## Add Service Provider

Next add the following service provider in `config/app.php`.

``` php
'providers' => [
  Nwidart\Menus\MenusServiceProvider::class,
],
```

Next, add the following aliases to `aliases` array in the same file.

``` php
'aliases' => [
   'Menu' => Nwidart\Menus\Facades\Menu::class,
],
```

Next publish the package's configuration file by running :

``` bash
php artisan vendor:publish --provider="Nwidart\Menus\MenusServiceProvider"
```
