---
title: Artisan commands
---
<div class="callout-block callout-success">
    <div class="icon-holder">
        <i class="fa fa-thumbs-up"></i>
    </div><!--//icon-holder-->
    <div class="content">
        <h4 class="callout-title">Useful Tip:</h4>
        <p>You can use the following commands with the <code>--help</code> suffix to find its arguments and options.</p>
    </div><!--//content-->
</div>

## Utility commands

### module:make <module-name>

Generate a new module.

### module:use <module-name>

Use a given module. This allows you to not specific the module name on other commands requiring the module name as an argument.

### module:list

List all available modules.

### module:migrate <module-name>

Migrate the given module, or without a module an argument, migrate all modules.

### module:migrate-rollback <module-name>

Rollback the given module, or without an argument, rollback all modules.

### module:seed <module-name>

Seed the given module, or without an argument, seed all modules

### module:publish-migrations <module-name>

Publish the migration files for the given module, or without an argument publish all modules migrations.

### module:publish-config <module-name>

Publish the given module configuration files, or without an argument publish all modules configuration files.

### module:enable <module-name>

Enable the given module.

### module:disable <module-name>

Disable the given module.

### module:update <module-name>

Update the given module.

## Generator commands

### module:make-command <command-name> <module-name>

Generate the given console command for the specified module.

### module:make-migration <migration-name> <module-name>

Generate a migration for specified module.

### module:make-seed <seed-name> <module-name>

Generate the given seed name for the specified module.

### module:make-controller <controller-name> <module-name>

Generate a controller for the specified module.

### module:make-model <model-name> <module-name>

Generate the given model for the specified module.

### module:make-provider <provider-name> <module-name>

Generate the given service provider name for the specified module.

### module:make-middleware <middleware-name> <module-name>

Generate the given middleware name for the specified module.

### module:make-mail <mail-name> <module-name>

Generate the given mail class for the specified module.

### module:make-notification <notification-name> <module-name>

Generate the given notification class name for the specified module.
