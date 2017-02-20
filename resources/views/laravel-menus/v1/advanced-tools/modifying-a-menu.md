---
title: Modifying a menu
---

After we create a menu, maybe we need to add other additional menus. You may modifying menu via `->modify` method.

``` php
Menu::modify('navbar', function($menu)
{
	$menu->add([
		'title' => 'Foo',
		'url' => 'bar',
	]);
});
```
