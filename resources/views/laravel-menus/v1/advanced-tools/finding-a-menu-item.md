---
title: Finding a menu item
---
To find menu item, you can use `findBy` method from `Nwidart\Menus\MenuBuilder` class.

```php
$menu = Menu::instance('sidebar');

$menu->url('profile', 'Profile');

$menuItem = $menu->findBy('title', 'Profile');

// add child menu
$menuItem->url('foo', 'Foo');
```

You may also use `whereTitle` helper method to find a specific menu item. Also, you can add other child menu item in the callback that located in the second argument in `whereTitle` method.

```php
$menu = Menu::instance('sidebar');

$menu->url('profile', 'Profile');

$menu->whereTitle('Profile', function ($sub)
{
	$sub->url('foo', 'Foo');
});

// add childs menu
```
