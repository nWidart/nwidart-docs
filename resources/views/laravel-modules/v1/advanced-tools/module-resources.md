---
title: Module Resources
---

Your module will most likely contain what laravel calls resources, those contain configuration, views, translation files, etc.
In order for you module to correctly load and if wanted publish them you need to let laravel know about them as in any regular package.

<div class="callout-block callout-success">
    <div class="icon-holder">
        <i class="fa fa-thumbs-up"></i>
    </div><!--//icon-holder-->
    <div class="content">
        <h4 class="callout-title">Note</h4>
        <p>Those resources are loaded in the service provider generated with a module (using <code>module:make</code>), unless the <code>plain</code> flag is used, in which case you will need to handle this logic yourself.</p>
    </div><!--//content-->
</div>

<div class="callout-block callout-success">
    <div class="icon-holder">
        <i class="fa fa-thumbs-up"></i>
    </div><!--//icon-holder-->
    <div class="content">
        <h4 class="callout-title">Note</h4>
        <p>Don't forget to change the paths, in the following code snippets a "Blog" module is assumed.</p>
    </div><!--//content-->
</div>


## Configuration

```php
$this->publishes([
    __DIR__.'/../Config/config.php' => config_path('blog.php'),
], 'config');
$this->mergeConfigFrom(
    __DIR__.'/../Config/config.php', 'blog'
);
```

## Views

```php
$viewPath = base_path('resources/views/modules/blog');

$sourcePath = __DIR__.'/../Resources/views';

$this->publishes([
    $sourcePath => $viewPath
]);

$this->loadViewsFrom(array_merge(array_map(function ($path) {
    return $path . '/modules/blog';
}, \Config::get('view.paths')), [$sourcePath]), 'blog');
```

The main part here is the `loadViewsFrom` method call. If you don't want your views to be published to the laravel views folder, you can remove the call to the `$this->publishes()` call.

## Language files

```php
 $langPath = base_path('resources/lang/modules/blog');

if (is_dir($langPath)) {
    $this->loadTranslationsFrom($langPath, 'blog');
} else {
    $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'blog');
}
```

### Factories

If you want to use laravel factories you will have to add the following in your service provider:

```php
$this->app->singleton(Factory::class, function () {
    return Factory::construct(__DIR__ . '/Database/factories');
});
```
