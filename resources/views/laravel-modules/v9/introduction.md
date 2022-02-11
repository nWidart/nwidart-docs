---
title: Introduction
---

`nwidart/laravel-modules` is a Laravel package which was created to manage your large Laravel app using modules. A module is like a Laravel package, it has some views, controllers or models. This package is supported and tested in Laravel 9.

This package is a re-published, re-organised and maintained version of [pingpong/modules](https://github.com/pingpong-labs/modules), which isn't maintained anymore. This package is used in [AsgardCMS](https://asgardcms.com/).

With one big added bonus that the original package didn't have: **tests**.

Find out why you should use this package in the article: [Writing modular applications with laravel-modules](https://nicolaswidart.com/blog/writing-modular-applications-with-laravel-modules).

<div class="callout-block callout-success">
    <div class="icon-holder">
        <i class="fa fa-thumbs-up"></i>
    </div><!--//icon-holder-->
    <div class="content">
        <h4 class="callout-title">Heads up:</h4>
        <p>If you upgrade to v6 from previous version, run the following command: <code>php artisan module:v6:migrate</code></p>
    </div><!--//content-->
</div>

### Quick Example

Generate your first module using `php artisan module:make Blog`. The following structure will be generated.

```
Modules/
  ├── Blog/
      ├── Config/
      ├── Console/
      ├── Database/
          ├── factories/
          ├── Migrations/
          ├── Seeders/
      ├── Entities/
      ├── Http/
          ├── Controllers/
          ├── Middleware/
          ├── Requests/
      ├── Providers/
          ├── BlogServiceProvider.php
          ├── RouteServiceProvider.php
      ├── Resources/
          ├── assets/
          ├── lang/
          ├── views/
      ├── Routes/
          ├── api.php
          ├── web.php
      ├── Tests/
      ├── composer.json
      ├── module.json
      ├── package.json
      ├── webpack.mix.js
```
