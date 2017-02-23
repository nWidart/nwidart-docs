---
title: Introduction
---

**Laravel Videoable** is a quick and easy way to add a video to your Eloquent Models. It also features a way to generate the embed code directly.

### Quick Example

``` php
$product = Product::create(['product_name' => 'something']);

$product->addVideo([
   'source' => 'youtube',
   'code' => '123',
   'title' => 'my video',
   'width' => 50,
   'height' => 150,
]);

// Get the embeddable code
$product->video->getEmbed();

// Returns
<div class="video">
    <iframe id="ytplayer" type="text/html" width="100%" height="100%"
            src="https://www.youtube.com/embed/123?rel=0"
            frameborder="0" allowfullscreen></iframe>
</div>
```
