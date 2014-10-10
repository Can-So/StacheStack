---
layout: filter
title:  "stachestack_widgets_after_title"
category: filters
permalink: filters/stachestack_widgets_after_title
---

You can use the `stachestack_widgets_after_title` filter to change the HTML that will be used after the widgets title.

* Default value: `</h3>`

### Examples:

If you want to **replace** the default value, you can use the following code as an example:

```php
<?php

function custom_replace_widgets_after_title() {
	return '</h4>';
}
add_filter( 'stachestack_widgets_after_title', 'custom_replace_widgets_after_title' );
?>
```

You can also choose to add something on the title, for example close a `span` element that you opened before, you can use something like this:

```php
<?php

function custom_change_widgets_after_title( $after ) {
	return '</span>' . $after;
}
add_filter( 'stachestack_widgets_after_title', 'custom_change_widgets_after_title' );
?>
```

<div data-alert class="alert-box alert">
<p>Warning: If you change the default value, please make sure you change the <a class="alert-link" href="/filters/stachestack_widgets_before_title">stachestack_widgets_before_title</a> accordingly.</p>
</div>

<hr>
* Location: [lib/widgets.php](https://github.com/StacheStack/StacheStack/blob/development/lib/widgets.php)
* Related: [stachestack\_widgets\_class](/filters/stachestack_widgets_class), [stachestack\_widgets\_before\_title](/filters/stachestack_widgets_before_title)