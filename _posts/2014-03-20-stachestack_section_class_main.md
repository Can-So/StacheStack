---
layout: filter
title:  "stachestack_section_class_main"
category: filters
permalink: filters/stachestack_section_class_main
---

Allows us to change or add classes to the main (content) area

### Example:

#### Adding a class:

```php
<?php

function my_custom_class( $class ) {
	return $class . ' my-class';
}
add_filter( 'stachestack_section_class_main', 'my_custom_class' );

?>
```

#### Replacing the default class(es) with our own:

```php
<?php

function my_custom_class() {
	return 'my-class';
}
add_filter( 'stachestack_section_class_main', 'my_custom_class' );

?>
```