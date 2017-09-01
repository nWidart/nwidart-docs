---
title: Menu presenters
---

This package includes some presenter classes that are used for converting menus to html. By default the generated menu style is `bootstrap navbar`. But, there are also several different menu styles.

You can apply the menu style via `->style()` method.

``` php
Menu::create('navbar', function($menu) {
    $menu->style('nav-pills');
});
```

Or you can set which presenter to present the menu style via `->setPresenter()` method.

```php
Menu::create('navbar', function($menu) {
    $menu->setPresenter(\Nwidart\Menus\Presenters\Bootstrap\NavTabPresenter::class);
});
```

You can also set which style of presenter when you rendering a menu.

```php
Menu::render('navbar', 'navbar-right');

Menu::render('navbar', \Nwidart\Menus\Presenters\Bootstrap\NavPillsPresenter::class);
```

### The List of Available Menu Presenter Class

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Style name</th>
                <th>Presenter class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>navbar</td>
                <td>Nwidart\Menus\Presenters\Bootstrap\NavbarPresenter</td>
            </tr>
            <tr>
                <td>navbar-right</td>
                <td>Nwidart\Menus\Presenters\Bootstrap\NavbarRightPresenter</td>
            </tr>
            <tr>
                <td>nav-pills</td>
                <td>Nwidart\Menus\Presenters\Bootstrap\NavPillsPresenter</td>
            </tr>
            <tr>
                <td>nav-tab</td>
                <td>Nwidart\Menus\Presenters\Bootstrap\NavTabPresenter</td>
            </tr>
            <tr>
                <td>sidebar</td>
                <td>Nwidart\Menus\Presenters\Bootstrap\SidebarMenuPresenter</td>
            </tr>            
            <tr>
                <td>navmenu</td>
                <td>Nwidart\Menus\Presenters\Bootstrap\NavMenuPresenter</td>
            </tr>
        </tbody>
    </table>
</div>

### Make A custom Presenter

You can create your own presenter classes. Make sure your presenter extends the `Nwidart\Menus\Presenters\Presenter` and `implements` the 'Nwidart\Menus\Presenters\PresenterInterface' interface.

For example, this is `zurb-top-bar` presenter. 

```php
use Nwidart\Menus\Presenters\Presenter;

class ZurbTopBarPresenter extends Presenter
{
	/**
	 * {@inheritdoc }
	 */
	public function getOpenTagWrapper()
	{
		return  PHP_EOL . '<section class="top-bar-section">' . PHP_EOL;
	}

	/**
	 * {@inheritdoc }
	 */
	public function getCloseTagWrapper()
	{
		return  PHP_EOL . '</section>' . PHP_EOL;
	}

	/**
	 * {@inheritdoc }
	 */
	public function getMenuWithoutDropdownWrapper($item)
	{
		return '<li'.$this->getActiveState($item).'><a href="'. $item->getUrl() .'">'.$item->getIcon().' '.$item->title.'</a></li>';
	}

	/**
	 * {@inheritdoc }
	 */
	public function getActiveState($item)
	{
		return \Request::is($item->getRequest()) ? ' class="active"' : null;
	}

	/**
	 * {@inheritdoc }
	 */
	public function getDividerWrapper()
	{
		return '<li class="divider"></li>';
	}

	/**
	 * {@inheritdoc }
	 */
	public function getMenuWithDropDownWrapper($item)
	{
		return '<li class="has-dropdown">
		        <a href="#">
		         '.$item->getIcon().' '.$item->title.'
		        </a>
		        <ul class="dropdown">
		          '.$this->getChildMenuItems($item).'
		        </ul>
		      </li>' . PHP_EOL;
		;
	}
}

```
To use this custom presenter, you can use the `setPresenter` method.

```php
Menu::create('zurb-top-bar', function($menu) {
    $menu->setPresenter('ZurbTopBarPresenter');
});
```

### Register A New Menu Style

Menu style is like an alias to a presenter. You can register your style from your costum presenter in the configuration file in `config/menus.php`.

```php
return [
	'navbar' =>	'Nwidart\Menus\Presenters\Bootstrap\NavbarPresenter',
	'navbar-right' => 'Nwidart\Menus\Presenters\Bootstrap\NavbarRightPresenter',
	'nav-pills' => 'Nwidart\Menus\Presenters\Bootstrap\NavPillsPresenter',
	'nav-tab' => 'Nwidart\Menus\Presenters\Bootstrap\NavTabPresenter',

	'zurb-top-bar'	=>	'ZurbTopBarPresenter',
];
```

Now, you can use a style like this.

```php
Menu::create('zurb-top-bar', function($menu) {
    $menu->style('zurb-top-bar');
});
```

## View Presenter

If you don't like to use presenter classes, you use view presenters instead. We can set which view to present the menus by calling `->setView()` method.

```
Menu::create('navbar', function($menu) {
    $menu->setView('menus::default');
});
```

### The List of Available View Presenter

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>View name</th>
                <th>Menu style</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>menus::default</td>
                <td>Bootstrap Navbar (default)</td>
            </tr>
            <tr>
                <td>menus::navbar-left</td>
                <td>Bootstrap Navbar Left</td>
            </tr>
            <tr>
                <td>menus::navbar-right</td>
                <td>Bootstrap Navbar Right</td>
            </tr>
            <tr>
                <td>menus::nav-tabs</td>
                <td>Bootstrap Nav Tabs</td>
            </tr>
            <tr>
                <td>menus::nav-tabs-justified</td>
                <td>Bootstrap Nav Tabs Justified</td>
            </tr>
            <tr>
                <td>menus::nav-pills</td>
                <td>Bootstrap Nav Pills</td>
            </tr>
            <tr>
                <td>menus::nav-pills-stacked</td>
                <td>Bootstrap Nav Pills Stacked</td>
            </tr>
            <tr>
                <td>menus::nav-pills-justified</td>
                <td>Bootstrap Nav Pills Justified</td>
            </tr>
            <tr>
                <td>menus::menu</td>
                <td>Plain Menu</td>
            </tr>
        </tbody>
    </table>
</div>
