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

Use a given module. This allows you to not specify the module name on other commands requiring the module name as an argument.

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

### module:migrate-refresh

Refresh the migration for the given module, or without a specified module refresh all modules migrations.

```bash
php artisan module:migrate-refresh Blog
```

### module:migrate-reset Blog

Reset the migration for the given module, or without a specified module reset all modules migrations.

```bash
php artisan module:migrate-reset Blog
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

### module:publish-translation

Publish the translation files for the given module, or without a specified module publish all modules migrations.

```bash
php artisan module:publish-translation Blog
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

Optional options:

- `--fillable=field1,field2`: set the fillable fields on the generated model
- `--migration`, `-m`: create the migration file for the given model

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

### module:make-listener

Generate the given listener for the specified module, base on an event

```bash
php artisan module:make-listener ListenerClassName Blog
```

### module:make-request

Generate the given request for the specified module.

```bash
php artisan module:make-request CreatePostRequest Blog
```

### module:make-event

Generate the given event for the specified module.

```bash
php artisan module:make-event BlogPostWasUpdated Blog
```

### module:make-job

Generate the given job for the specified module.

```bash
php artisan module:make-job
```

### module:route-provider

Generate the given route for the specified module.

```bash
php artisan module:route-provider Blog
```
