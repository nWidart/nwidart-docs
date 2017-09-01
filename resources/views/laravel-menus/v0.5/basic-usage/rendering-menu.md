---
title: Rendering menus
---

To render the menu you can use `render` or `get` method.

```php
Menu::render('navbar');

Menu::get('navbar');
```

You can also set which style to present the menu in the second parameter.

```php
Menu::render('navbar', 'navbar-right');
```

Or you may also set which view to present the menu.

```php
Menu::render('navbar', 'menus::nav-tabs');
```
