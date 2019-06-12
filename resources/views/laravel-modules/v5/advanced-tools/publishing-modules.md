---
title: Publishing Modules
---

After creating a module and you are sure your module will be used by other developers. You can push your module to [github](https://github.com) or [bitbucket](https://bitbucket.org) and after that you can submit your module to the packagist website.

You can follow this step to publish your module.

1. Create A Module.
2. Push the module to github, bitbucket, gitlab etc.
3. Submit your module to the packagist website.
Submit to packagist is very easy, just give your github repository, click submit and you done.

## Have modules be installed in the `Modules/` folder

There is also a way for you to have your modules be installed in the `Modules/` automatically using [joshbrw/laravel-module-installer](https://github.com/joshbrw/laravel-module-installer). Simply require this package on your module, and set the `type` key in the `composer.json` file to `laravel-module`.
