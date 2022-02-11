---
title: Custom namespaces
---

When you create a new module it also registers new custom namespace for `Lang`, `View` and `Config`. For example, if you create a new module named blog, it will also register new namespace/hint blog for that module. Then, you can use that namespace for calling `Lang`, `View` or `Config`. Following are some examples of its usage:

Calling Lang:

```php
Lang::get('blog::group.name');

@trans('blog::group.name');
```

Calling View:

```php
view('blog::index')

view('blog::partials.sidebar')
```

Calling Config:

```php
Config::get('blog.name')
```
