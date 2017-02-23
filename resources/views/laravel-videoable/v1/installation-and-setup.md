---
title: Installation and Setup
---

## Composer

To install through composer, by run the following command:

``` bash
composer require nwidart/laravel-videoable
```

## Add Service Provider

Next add the following service provider in `config/app.php`.

``` php
'providers' => [
  Nwidart\LaravelVideoable\LaravelVideoableServiceProvider::class,
],
```

Publish the package's migrations files by running :

```bash
php artisan vendor:publish --provider="Nwidart\LaravelVideoable\LaravelVideoableServiceProvider" --tag=migrations
```

After the migrations have been published you can create the `laravel_videoables` table by running the migrations

```bash
php artisan migrate
```

(optional) Publish the package's configuration file by running :

``` bash
php artisan vendor:publish --provider="Nwidart\LaravelVideoable\LaravelVideoableServiceProvider" --tag=config
```

(optional) Publish the package's view files by running :

``` bash
php artisan vendor:publish --provider="Nwidart\LaravelVideoable\LaravelVideoableServiceProvider" --tag=views
```
