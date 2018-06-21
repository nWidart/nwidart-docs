---
title: Lumen
---

Lumen doesn't come with a vendor publisher. In order to use laravel-modules with lumen you have to set it up manually.

Create a config folder inside the root directory and copy `vendor/nwidart/laravel-modules/config/config.php` to that folder named `modules.php`

``` bash
mkdir config
cp vendor/nwidart/laravel-modules/config/config.php config/modules.php
```

Then load the config and the service provider in `bootstrap/app.php`

``` php
$app->configure('modules');
$app->register(\Nwidart\Modules\LumenModulesServiceProvider::class)
```

Laravel-modules uses `path.public` which isn't defined by default in Lumen.
Register `path.public` before loading the service provider.

``` php
$app->bind('path.public', function() {
 return __DIR__ . 'public/';
});
```
