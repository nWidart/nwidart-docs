---
title: Registering Module Events
---

Your module may contain events and event listeners. You can create these classes manually, or with the following helpers:

``` bash
php artisan module:make-event BlogPostWasUpdated Blog
php artisan module:make-listener NotifyAdminOfNewPost Blog
```

Once those are create you need to register them in laravel. This can be done in 2 ways:

- Manually calling `$this->app['events']->listen(BlogPostWasUpdated::class, NotifyAdminOfNewPost::class);` in your module service provider
- Or by creating a event service provider for your module which will contain all its events, similar to the `EventServiceProvider` under the app/ namespace.

## Creating an EventServiceProvider

Once you have multiple events, you might find it easier to have all events and their listeners in a dedicated service provider. This is what the EventServiceProvider is for.

Create a new class called for instance `EventServiceProvider` in the `Modules/Blog/Providers` folder (Blog being an example name).

This class needs to look like this:

``` .language-php
<?php

namespace Modules\Blog\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [];
}
```


<div class="callout-block callout-success">
    <div class="content" style="margin-left: 0;">
        <p><strong>Don't forget to load this service provider, for instance by adding it in the module.json file of your module.</strong></p>
    </div>
</div>

This is now like the regular EventServiceProvider in the `app/` namespace. In our example the `listen` property will look like this:


``` .language-php
// ...
class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        BlogPostWasUpdated::class => [
            NotifyAdminOfNewPost::class,
        ],
    ];
}
```
