---
title: Adding new Sources
---

If you would like to add new sources, you can achieve this by added new keys in the configuration file `source` array.

## Create a new presenter class

Start by creating a new presenter class. This class needs to extend the `Nwidart\LaravelVideoable\Sources\BaseVideoSource` abstract class.

Example:

```php
<?php

namespace App\Video\Sources;

use Nwidart\LaravelVideoable\Sources\BaseVideoSource;

final class MyVideoPresenter extends BaseVideoSource
{
    /**
     * @return string
     * @throws \Throwable
     */
    public function getEmbedCode()
    {
        return view('laravel-videoable::sources.my-video', ['code' => $this->entity->code])
            ->render();
    }
}
```

## Add your source to the configuration

Finally add you new source presenter in the configuration file, under the source key:

```php
'sources' => [
    // ...
    'my-source' => \App\Video\Sources\MyVideoPresenter::class,
],
```

To use this new source on videos, use the defined key as the `source` key on the video model.

```php
// $product being your model instance
$product->addVideo([
   'source' => 'my-source',
   'code' => '123',
   'title' => 'my video',
   'width' => 50,
   'height' => 150,
]);
```
