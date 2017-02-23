---
title: Adding and removing videos
---

Before you can attach a video to your eloquent models, you need to require the following trait on any model that can have a video:

```php
class Product extends Model
{
    use HasVideos;
}
```

### Adding a video

You can add a video using the following api:

```php
// $product being your model instance
$product->addVideo([
   'source' => 'youtube',
   'code' => '123',
   'title' => 'my video',
   'width' => 50,
   'height' => 150,
]);
```

The source key needs to be an existing source, or a custom one defined in the configuration.

### Removing a video

You can remove a video from your model with the following api:

```php
// $product being your model instance
$product->removeVideo();
```

### Getting embeddable code

Once you have stored a video on your model, you can fetch its embeddable code:

```php
// $product being your model instance
$product->video->getEmbed();
```
