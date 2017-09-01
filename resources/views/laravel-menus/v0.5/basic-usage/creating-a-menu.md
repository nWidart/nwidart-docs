---
title: Creating a menu
---

You can define your menus in your desired file / class, as long as it is autoload by composer.

To create a menu, simply call the `create` method from `Menu` facade. The first parameter is the menu name and the second parameter is callback for defining menu items.

```php
Menu::create('navbar', function($menu) {
    // define your menu items here
});
```

### Menu Item

As explained before, we can defining menu item in the callback by accessing `$menu` variable, which the variable is instance of `Nwidart\Menus\MenuBuilder` class.

To defining a plain URL, you can use `->url()` method.
```php
Menu::create('navbar', function($menu) {
    // URL, Title, Attributes
    $menu->url('home', 'Home', ['target' => 'blank']);
});
```

If you have named route, you define the menu item by calling `->route()` method.
```php
Menu::create('navbar', function($menu) {
	$menu->route(
        'users.show', // route name
        'View Profile', // title
        ['id' => 1], // route parameters
        ['target' => 'blank'] // attributes
    );
});
```

You can also defining the menu item via array by calling `->add()` method.
```php
Menu::create('navbar', function($menu) {
    $menu->add([
        'url' => 'about',
        'title' => 'About',
        'attributes' => [
            'target' => '_blank'
        ]
    ]);

    $menu->add([
        'route' => ['profile', ['user' => 'nwidart']],
        'title' => 'Visit My Profile',
        'attributes' => [
            'target' => '_blank'
        ]
    ]);
});
```

### Menu Dropdown

To create a dropdown menu, you can call to `->dropdown()` method and passing the first parameter by title of dropdown and the second parameter by closure callback that retrieve `$sub` variable. The `$sub` variable is the the instance of `Nwidart\Menus\MenuItem` class.

```
Menu::create('navbar', function($menu) {
    $menu->url('/', 'Home');
    $menu->dropdown('Settings', function ($sub) {
        $sub->url('settings/account', 'Account');
        $sub->url('settings/password', 'Password');
        $sub->url('settings/design', 'Design');
    });
});
```

### Menu Dropdown Multi Level

You can also create a dropdown inside dropdown by using `->dropdown()` method. This will allow to to create a multilevel menu items.
```
Menu::create('navbar', function($menu) {
    $menu->url('/', 'Home');
    $menu->dropdown('Account', function ($sub) {
        $sub->url('profile', 'Visit My Profile');
        $sub->dropdown('Settings', function ($sub) {
            $sub->url('settings/account', 'Account');
            $sub->url('settings/password', 'Password');
            $sub->url('settings/design', 'Design');
        });
        $sub->url('logout', 'Logout');
    });
});
```

### Menu Divider

You may also define a divider for each menu item. You can divide between menu item by using `->divider()` method.

``` php
Menu::create('navbar', function($menu) {
    $menu->url('/', 'Home');
    $menu->divider();
    $menu->url('profile', 'Profile')
});
```

### Dropdown Header

You may also add a dropdown header for the specified menu item by using `->header()` method.

``` php
Menu::create('navbar', function($menu) {
    $menu->url('/', 'Home')
    $menu->dropdown('Settings', function ($sub) {
        $sub->header('ACCOUNT');
        $sub->url('/settings/design', 'Design');
        $sub->divider();
        $sub->url('logout', 'Logout');
    });
});
```

### Ordering Menu Item

You may order the menu by specify `order` parameter.

``` php
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
```

You may also set the order value by calling `->order` method.

``` php
Menu::create('navbar', function($menu) {
    $menu->url('/', 'Home', ['icon' => 'fa fa-dashboard'])->order(1);
    $menu->route('/', 'About', ['user' => '1'], ['icon' => 'fa fa-user'])->order(2);
    $menu->dropdown('Settings', function ($sub) {
        $sub->header('ACCOUNT');
        $sub->url('/settings/design', 'Design');
        $sub->divider();
        $sub->url('logout', 'Logout');
    })->order(3);
});
```

By default ordering feature is disabled. You can enable the `ordering` feature in your config file. Just update value of `ordering` config to `true` and now your menu will ordered by `order` key.

``` php
return [
	'ordering' => true
];
```

You may also enable or disable menu ordering for each menu via `->enableOrdering` and `->disableOrdering` method.

``` php
Menu::create('navbar', function($menu) {
    // disable menu ordering
    $menu->enableOrdering();

    // disable menu ordering
    $menu->disableOrdering();
});
```

### Make multiple menus

You can also create a set of menus with different name and menu items.

```php
Menu::create('menu1', function($menu) {
	$menu->route('home', 'Home');
    $menu->url('profile', 'Profile');
});

Menu::create('menu2', function($menu) {
    $menu->route('home', 'Home');
    $menu->url('profile', 'Profile');
});
```
