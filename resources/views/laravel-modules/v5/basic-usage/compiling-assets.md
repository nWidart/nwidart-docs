---
title: Compiling Assets (Laravel Mix)
---

## Installation & Setup

When you create a new module it also create assets for CSS/JS and the `webpack.mix.js` configuration file.
``` bash
php artisan module:make Blog
```

Change directory to the module:
``` bash
cd Modules/Blog
```

The default `package.json` file includes everything you need to get started. You may install the dependencies it references by running:
``` bash
npm install
```

## Running Mix

Mix is a configuration layer on top of [Webpack](https://webpack.js.org/), so to run your Mix tasks you only need to execute one of the NPM scripts that is included with the default `laravel-modules` `package.json` file

``` bash
// Run all Mix tasks...
npm run dev

// Run all Mix tasks and minify output...
npm run production
```

After generating the versioned file, you won't know the exact file name. So, you should use Laravel's global mix function within your views to load the appropriately hashed asset. The  mix function will automatically determine the current name of the hashed file:

``` html
// Modules/Blog/Resources/views/layouts/master.blade.php

<link rel="stylesheet" href="{{ mix('css/blog.css') }}">

<script src="{{ mix('js/blog.js') }}"></script>
```

For more info on Laravel Mix view the documentation here: [https://laravel.com/docs/mix](https://laravel.com/docs/mix)

> Note: to prevent the main Laravel Mix configuration from overwriting the `public/mix-manifest.json` file:


Install `laravel-mix-merge-manifest`

```bash
npm install laravel-mix-merge-manifest --save-dev
```

Modify `webpack.mix.js` main file

```js
let mix = require('laravel-mix');


/* Allow multiple Laravel Mix applications*/
require('laravel-mix-merge-manifest');
mix.mergeManifest();
/*----------------------------------------*/

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

```
