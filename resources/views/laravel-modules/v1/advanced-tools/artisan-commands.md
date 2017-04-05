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

### module:make

Generate a new module.

```bash
php artisan module:make Blog
```

### module:make

Generate multiple modules at once.

```bash
php artisan module:make Blog User Auth
```

### module:use

Use a given module. This allows you to not specific the module name on other commands requiring the module name as an argument.

```bash
php artisan module:use Blog
```

### module:list

List all available modules.

```bash
php artisan module:list
```

### module:migrate

Migrate the given module, or without a module an argument, migrate all modules.

```bash
php artisan module:migrate Blog
```

### module:migrate-rollback

Rollback the given module, or without an argument, rollback all modules.

```bash
php artisan module:migrate-rollback Blog
```

### module:seed

Seed the given module, or without an argument, seed all modules

```bash
php artisan module:seed Blog
```

### module:publish-migration

Publish the migration files for the given module, or without an argument publish all modules migrations.

```bash
php artisan module:publish-migration Blog
```

### module:publish-config

Publish the given module configuration files, or without an argument publish all modules configuration files.

```bash
php artisan module:publish-config Blog
```

### module:enable

Enable the given module.

```bash
php artisan module:enable Blog
```

### module:disable

Disable the given module.

```bash
php artisan module:disable Blog
```

### module:update

Update the given module.

```bash
php artisan module:update Blog
```

## Generator commands

### module:make-command

Generate the given console command for the specified module.

```bash
php artisan module:make-command CreatePostCommand Blog
```

### module:make-migration

Generate a migration for specified module.

```bash
php artisan module:make-migration create_posts_table Blog
```

### module:make-seed

Generate the given seed name for the specified module.

```bash
php artisan module:make-seed seed_fake_blog_posts Blog
```

### module:make-controller

Generate a controller for the specified module.

```bash
php artisan module:make-controller PostsController Blog
```

### module:make-model

Generate the given model for the specified module.

```bash
php artisan module:make-model Post Blog
```

### module:make-provider

Generate the given service provider name for the specified module.

```bash
php artisan module:make-provider BlogServiceProvider Blog
```

### module:make-middleware

Generate the given middleware name for the specified module.

```bash
php artisan module:make-middleware CanReadPostsMiddleware Blog
```

### module:make-mail

Generate the given mail class for the specified module.

```bash
php artisan module:make-mail SendWeeklyPostsEmail Blog
```

### module:make-notification

Generate the given notification class name for the specified module.

```bash
php artisan module:make-notification NotifyAdminOfNewComment Blog
```
