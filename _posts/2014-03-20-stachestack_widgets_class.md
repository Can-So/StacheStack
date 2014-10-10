---
layout: filter
title:  "stachestack_widgets_class"
category: filters
permalink: filters/stachestack_widgets_class
---

You can use the `stachestack_widgets_class` filter to change the class of the widgets, or add your own classes to them.

### Examples:

If you want to **replace** the default class of the widgets, you can use the following code:

```php
<?php

function custom_replace_widget_class() {
	return 'my-class';
}
add_filter( 'stachestack_widgets_class', 'custom_replace_widget_class' );
?>
```

If on the other hand you want to **add** a class to the widgets, you can use something like this:

```php
<?php

function custom_add_widget_class( $class ) {
	return $class . ' my-class';
}
add_filter( 'stachestack_widgets_class', 'custom_replace_widget_class' );
?>
```

<hr>
* Location: [lib/widgets.php](https://github.com/StacheStack/StacheStack/blob/development/lib/widgets.php)
* Related: [stachestack\_widgets\_before\_title](/filters/stachestack_widgets_before_title), [stachestack\_widgets\_after\_title](/filters/stachestack_widgets_after_title)