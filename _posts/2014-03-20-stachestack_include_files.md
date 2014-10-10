---
layout: action
title:  "stachestack_include_files"
category: actions
permalink: actions/stachestack_include_files
---

The `stachestack_include_files` action will allow you to include files in the theme's functions.php file. This way if you're building a plugin or theme and want to take advantage of stachestack's framework you can be sure that the theme core files have been loaded prior to your own custom code.

### Example:

This function is from our [StacheStack EDD Child Theme](http://stachestack.io/downloads/StacheStack-edd-child/):

```php
<?php

/**
 * Include our custom files after the theme core files and framework
 */
function stachestack_edd_include_files() {

	// Only include our files if Easy Digital Downloads exists
	if ( class_exists( 'Easy_Digital_Downloads' ) ) {

		require_once dirname( __FILE__ ) . '/lib/class-StacheStack_EDD.php';
		require_once dirname( __FILE__ ) . '/lib/checkout-template.php';
		require_once dirname( __FILE__ ) . '/lib/login-register.php';
		require_once dirname( __FILE__ ) . '/lib/edd-shortcodes.php';
		require_once dirname( __FILE__ ) . '/lib/edd-widgets.php';
		require_once dirname( __FILE__ ) . '/lib/addons/edd-simple-shipping.php';
		require_once dirname( __FILE__ ) . '/lib/addons/edd-variable-pricing-switcher.php';

	}

}
add_action( 'stachestack_include_files', 'stachestack_edd_include_files' );

?>
```

<hr>

* Location: [functions.php](https://github.com/StacheStack/StacheStack/blob/master/functions.php).