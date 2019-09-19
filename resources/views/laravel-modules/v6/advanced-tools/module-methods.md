---
title: Module Methods
---

Get an entity from a specific module.

```php
$module = Module::find('blog');
```

Get module name.

```
$module->getName();
```

Get module name in lowercase.

```
$module->getLowerName();
```

Get module name in studlycase.

```
$module->getStudlyName();
```

Get module path.

```
$module->getPath();
```

Get extra path.

```
$module->getExtraPath('Assets');
```

Disable the specified module.

```
$module->disable();
```

Enable the specified module.

```
$module->enable();
```

Delete the specified module.

```
$module->delete();
```

Get an array of module requirements. Note: these should be aliases of the module.

```
$module->getRequires();
