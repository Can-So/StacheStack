---
layout: action
title:  "stachestack_inside_nav_end"
category: actions
permalink: actions/stachestack_inside_nav_end
---

The StacheStack 3.2 update has changed a lot of things.
The theme is now framework-agnostic and not bootstrap-specific.

This action was specific to bootstrap and though it still exists, we only advise using this if you are building something specific to bootstrap.

<hr>

Using the `stachestack_inside_nav_end` action we can insert custom content inside the `nav` element in the header top menu, after the menu items.

### Example:

```php
<?php

function my_custom_inside_nav_begin() {
	echo 'This is my custom content';
}
add_action( 'stachestack_inside_nav_end', 'my_custom_inside_nav_begin' );

?>
```