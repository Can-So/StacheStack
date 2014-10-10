---
layout: filter
title:  "stachestack_widgets_before_title"
category: filters
permalink: filters/stachestack_widgets_before_title
---

You can use the `stachestack_widgets_before_title` filter to change the HTML that will be used before the widgets title.

* Default value: `<h3 class="widget-title">`

### Examples:

If you want to **replace** the default value, you can use the following code as an example:

```php
<?php

function custom_replace_widgets_before_title() {
	return '<h4 class="my-widget-title">';
}
add_filter( 'stachestack_widgets_before_title', 'custom_replace_widgets_before_title' );
?>
```

You can also choose to add something on the title, for example open a `span` element. In this case, you can use something like this:

```php
<?php

function custom_change_widgets_before_title( $before ) {
	return $before . '<span>';
}
add_filter( 'stachestack_widgets_before_title', 'custom_change_widgets_before_title' );
?>
```

<div data-alert class="alert-box alert">
<p>Warning: If you change the default value, please make sure you change the <a class="alert-link" href="/StacheStack/filters/stachestack_widgets_before_title">stachestack_widgets_before_title</a> accordingly.</p>
</div>

<hr>
* Location: [lib/widgets.php](https://github.com/StacheStack/StacheStack/blob/development/lib/widgets.php)
* Related: [stachestack\_widgets\_class](/filters/stachestack_widgets_class), [stachestack\_widgets\_after\_title](/filters/stachestack_widgets_after_title)