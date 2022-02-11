---
title: Creating a module
---

Creating a module is simple and straightforward. Run the following command to create a module.

``` bash
php artisan module:make <module-name>
```

Replace `<module-name>` by your desired name.

It is also possible to create multiple modules in one command.

``` bash
php artisan module:make Blog User Auth
```

By default when you create a new module, the command will add some resources like a controller, seed class, service provider, etc. automatically. If you don't want these, you can add `--plain` flag, to generate a plain module.

``` bash
php artisan module:make Blog --plain
# or
php artisan module:make Blog -p
```

## Naming convention

Because we are autoloading the modules using [psr-4](http://www.php-fig.org/psr/psr-4/), we strongly recommend using StudlyCase convention.

## Folder structure

```
app/
bootstrap/
vendor/
Modules/
  ├── Blog/
      ├── Assets/
      ├── Config/
      ├── Console/
      ├── Database/
          ├── Migrations/
          ├── Seeders/
      ├── Entities/
      ├── Http/
          ├── Controllers/
          ├── Middleware/
          ├── Requests/
          ├── routes.php
      ├── Providers/
          ├── BlogServiceProvider.php
      ├── Resources/
          ├── lang/
          ├── views/
      ├── Repositories/
      ├── Tests/
      ├── composer.json
      ├── module.json
      ├── start.php
```

