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

### module:make Blog

Generate a new module.

``` bash
php artisan module:make Blog

```

### module:use Blog

Use a given module. This allows you to not specific the module name on other commands requiring the module name as an argument.

``` bash
php artisan module:use Blog

```

### module:list

List all available modules.

``` bash 
php artisan module:list

```

### module:migrate Blog

Migrate the given module, or without a module an argument, migrate all modules.

``` bash 
php artisan module:migrate Blog

```

### module:migrate-rollback Blog

Rollback the given module, or without an argument, rollback all modules.

``` bash 
php artisan module:migrate-rollback Blog

```

### module:seed Blog

Seed the given module, or without an argument, seed all modules

``` bash 
artisan module:seed Blog

```

### module:publish-migrations Blog

Publish the migration files for the given module, or without an argument publish all modules migrations.

``` bash 
php artisan module:migrate Blog

```

### module:publish-config Blog

Publish the given module configuration files, or without an argument publish all modules configuration files.

``` bash 
php artisan module:publish-config Blog

```

### module:enable Blog

Enable the given module.

``` bash 
php artisan module:enable Blog

```

### module:disable Blog

Disable the given module.

``` bash 
php artisan module:disable Blog

```

### module:update Blog

Update the given module.

``` bash 
php artisan module:update Blog

```

## Generator commands

### module:make-command CreatePostCommand Blog

Generate the given console command for the specified module.

``` bash 
php artisan module:make-command CreatePostCommand Blog

```

### module:make-migration create_posts_table Blog

Generate a migration for specified module.

``` bash 
php artisan module:make-migration create_posts_table Blog

```

### module:make-seed seed_fake_blog_posts Blog

Generate the given seed name for the specified module.

``` bash 
php artisan module:make-seed seed_fake_blog_posts Blog

```

### module:make-controller PostsController Blog

Generate a controller for the specified module.

``` bash 
php artisan module:make-controller PostsController Blog

```

### module:make-model Post Blog

Generate the given model for the specified module.

``` bash 
php artisan module:make-model Post Blog

```

### module:make-provider BlogServiceProvider Blog

Generate the given service provider name for the specified module.

``` bash 
php artisan module:make-provider BlogServiceProvider Blog

```

### module:make-middleware CanReadPostsMiddleware Blog

Generate the given middleware name for the specified module.

``` bash 
php artisan module:make-middleware CanReadPostsMiddleware Blog

```

### module:make-mail SendWeeklyPostsEmail Blog

Generate the given mail class for the specified module.

``` bash 
php artisan module:make-mail SendWeeklyPostsEmail Blog

```

### module:make-notification NotifyAdminOfNewComment Blog

Generate the given notification class name for the specified module.

``` bash 
php artisan module:make-notification NotifyAdminOfNewComment Blog

```
