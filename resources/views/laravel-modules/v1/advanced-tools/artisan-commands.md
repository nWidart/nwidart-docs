---
title: Artisan commands
---
<div class="callout-block callout-success">
    <div class="icon-holder">
        <i class="fa fa-thumbs-up"></i>
    </div><!--//icon-holder-->
    <div class="content">
        <h4 class="callout-title">Useful Tip:</h4>
        <p>You can use the following commands with the <code>--help</code> suffix to find its arguments and options.</p>
    </div><!--//content-->
</div>

__Note all the following commands use "Blog" as example module name, and example class/file names__

## Utility commands

### php artisan module:make Blog

Generate a new module.

``` bash
php artisan module:make Blog

```

### php artisan module:make Blog User Auth

Generate multiple modules at once.

``` bash
php artisan module:make Blog User Auth

```

### php artisan module:use Blog

Use a given module. This allows you to not specific the module name on other commands requiring the module name as an argument.

``` bash
php artisan module:use Blog

```

### php artisan module:list

List all available modules.

``` bash 
php artisan module:list

```

### php artisan module:migrate Blog

Migrate the given module, or without a module an argument, migrate all modules.

``` bash 
php artisan module:migrate Blog

```

### php artisan module:migrate-rollback Blog

Rollback the given module, or without an argument, rollback all modules.

``` bash 
php artisan module:migrate-rollback Blog

```

### php artisan module:seed Blog

Seed the given module, or without an argument, seed all modules


``` bash 
artisan module:seed Blog

```

### php artisan module:publish-migrations Blog

Publish the migration files for the given module, or without an argument publish all modules migrations.

``` bash 
php artisan module:migrate Blog

```

### php artisan module:publish-config Blog

Publish the given module configuration files, or without an argument publish all modules configuration files.

``` bash 
php artisan module:publish-config Blog

```

### php artisan module:enable Blog

Enable the given module.

``` bash 
php artisan module:enable Blog

```

### php artisan module:disable Blog

Disable the given module.


``` bash 
php artisan module:disable Blog

```

### php artisan module:update Blog

Update the given module.


``` bash 
php artisan module:update Blog

```

## Generator commands

### php artisan module:make-command CreatePostCommand Blog

Generate the given console command for the specified module.

``` bash 
php artisan module:make-command CreatePostCommand Blog

```

### php artisan module:make-migration create_posts_table Blog

Generate a migration for specified module.

``` bash 
php artisan module:make-migration create_posts_table Blog

```

### php artisan module:make-seed seed_fake_blog_posts Blog

Generate the given seed name for the specified module.


``` bash 
php artisan module:make-seed seed_fake_blog_posts Blog

```

### php artisan module:make-controller PostsController Blog

Generate a controller for the specified module.

``` bash 
php artisan module:make-controller PostsController Blog

```

### php artisan module:make-model Post Blog

Generate the given model for the specified module.

``` bash 
php artisan module:make-model Post Blog

```

### php artisan module:make-provider BlogServiceProvider Blog

Generate the given service provider name for the specified module.

``` bash 
php artisan module:make-provider BlogServiceProvider Blog

```

### php artisan module:make-middleware CanReadPostsMiddleware Blog

Generate the given middleware name for the specified module.

``` bash 
php artisan module:make-middleware CanReadPostsMiddleware Blog

```

### php artisan module:make-mail SendWeeklyPostsEmail Blog

Generate the given mail class for the specified module.

``` bash 
php artisan module:make-mail SendWeeklyPostsEmail Blog

```

### php artisan module:make-notification NotifyAdminOfNewComment Blog

Generate the given notification class name for the specified module.

``` bash 
php artisan module:make-notification NotifyAdminOfNewComment Blog

```
