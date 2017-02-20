---
title: The menu instance
---

Sometimes, maybe we need to add a new additional menu from controller or other place. To get an instance of an existing menu, you can use the `instance` method.

```php
$menu = Menu::instance('zurb-top-bar');

// You can also make additions to the menu again

$menu->add(['title' => 'Settings', 'route' => 'settings']);

$menu->url('profile', 'Profile');

$menu->route('settings', 'Settings');
```
