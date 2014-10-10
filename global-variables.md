---
layout: post
title:  "Global Variables"
---

StacheStack uses the below gloval variables.

* `SS_FRAMEWORK` : the name of the framework that is currently used. Default: `bootstrap`.
* `stachestack_ASSETS_URL` : the URL to the /assets folder of the theme. Default: `get_template_directory_uri() . '/assets'`
* `stachestack_OPT_NAME` : The name of the option in the database that contains all StacheStack options. Default: `stachestack`

You can override these from a plugin or from your `wp-config.php` file.

For example if you want to change the database option from *stachestack* to *my_option*, you would add this line in your wp-config.php file:

```php
define( 'stachestack_OPT_NAME', 'my_option' );
```