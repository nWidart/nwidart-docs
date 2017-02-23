---
title: Customising existing Sources
---

Existing sources can be customised in 2 ways:

1. Changing the view file
2. Changing the source presenter class

## Changing view file

Source built in sources use laravel views to handle the embed 'template'. Those can be edited and adapted however you like.

You can publish those views using the following command:

``` bash
php artisan vendor:publish --provider="Nwidart\LaravelVideoable\LaravelVideoableServiceProvider" --tag=views
```

You will now have those views in the `resources/views/vendor/laravel-videoable` folder.

The view file for the YouTube source looks like this:

```html
<div class="video">
    <iframe id="ytplayer" type="text/html" width="100%" height="100%"
            src="https://www.youtube.com/embed/{{ $code }}?rel=0"
            frameborder="0" allowfullscreen></iframe>
</div>
```

## Changing the source presenter class

In case you'd like to have more customisation options you can overwrite the complete source presenter class. 

The source presenter class handles the rendering of the view, and sending the desired data to it.

Those presenter classes are defined in the configuration file. To publish it run the following command:

``` bash
php artisan vendor:publish --provider="Nwidart\LaravelVideoable\LaravelVideoableServiceProvider" --tag=config
```

Once published, you can define your own classes in the existing source keys.
