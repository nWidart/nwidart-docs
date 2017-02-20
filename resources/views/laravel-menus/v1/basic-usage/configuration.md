---
title: Configuration
---

You can publish the package configuration using the following command:

``` bash
php artisan vendor:publish --provider="Nwidart\Menus\MenusServiceProvider"
```

In the published configuration file you can configure the following things:

## Styles

These are available ready to use menu presenters.

Key: `styles`

## Ordering

Enable or disable menu item ordering for all menus

Key: `ordering`

Default: `false`
