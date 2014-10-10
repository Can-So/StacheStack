---
layout: filter
title:  "stachestack_section_class_wrapper"
category: filters
permalink: filters/stachestack_section_class_wrapper
---

Allows us to change or add classes to the wrapper div.

Please note that not all layouts require a wrapper, so their use depends on the current [framework](/framework) in use and the layout of the current page.

### Example:

#### Adding a class:

```php
<?php

function my_custom_wrapper_class( $class ) {
	return $class . ' my-class';
}
add_filter( 'stachestack_section_class_wrapper', 'my_custom_wrapper_class' );

?>
```

#### Replacing the default class(es) with our own:

```php
<?php

function my_custom_wrapper_class() {
	return 'my-class';
}
add_filter( 'stachestack_section_class_wrapper', 'my_custom_wrapper_class' );

?>
```