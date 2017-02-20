---
title: Introduction
---

`nwidart/laravel-menus` is a laravel package which created to manage menus. It has a feature called **presenters** which enables easy styling and custom structure of menu rendering.

This package is a re-published, re-organised and maintained version of [pingpong/menus](https://github.com/pingpong-labs/menus), which isn't maintained anymore. This package is used in [AsgardCMS](https://asgardcms.com/).

With one big added bonus that the original package didn't have: **tests**.


### Quick Example

``` php
// Menu.php
Menu::create('navbar', function($menu) {
    $menu->url('/', 'Home', 1);
    $menu->route('/', 'About', ['user' => '1'], 2);
    $menu->dropdown('Settings', function ($sub) {
        $sub->header('ACCOUNT');
        $sub->url('/settings/design', 'Design');
        $sub->divider();
        $sub->url('logout', 'Logout');
    }, 3);
});

// main.blade.php
{!! Menu::get('navbar') !!}
```
