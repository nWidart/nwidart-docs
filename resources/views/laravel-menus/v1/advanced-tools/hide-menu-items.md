---
title: Hide Menu Items
---

To hide a menu item, you can use `hideWhen` method from `Nwidart\Menus\MenuItem` class.

```php
Menu::create('menu-name', function($menu) {
	$menu->url('login', 'Login')->hideWhen(function() {return \Auth::check();});
	$menu->url('register', 'Register')->hideWhen(function() {return \Auth::check();});
	$menu->dropdown('Account', function ($sub) {
		$sub->url('settings', 'Settings');
		$sub->url('admin', 'Admin Panel')->hideWhen(function() {return !\Auth::user()->isAdmin();});
	})->hideWhen(function() {return !\Auth::check();});
});
```




