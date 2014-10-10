---
layout: function
title:  "stachestack_title_section"
category: functions
permalink: functions/stachestack_title_section
---

The `stachestack_title_section` function returns the title section of the current page.

```php
<?php echo stachestack_title_section( $header, $element, $link, $class ); ?>
```
* `$header`: boolean. Whether or not we want a `<header>` element wrapping our title. Defaults to `true`.
* `$element`: can be any valid HTML element (h1, h2, h3, div, span etc.). Defaults to `'h1'`.
* `$link`: boolean. Whether or not we want the title linked to the post. (`true`: title is linked. `false`: title is not linked.). Defaults to `false`.
* `$class`: The CSS class of the title. Defaults to `'entry-title'`.

### Example:

```php

<?php echo stachestack_title_section( true, 'h2', true, 'entry-title' ); ?>
```

The above will echo this HTML:

```html
<header>
	<title>POST TITLE</title>
	<h2 class="entry-title">
		<a href="example.com/post-link">POST TITLE</a>
	</h2>
</header>
```

<hr>

* Location: [lib/titles.php](https://github.com/StacheStack/StacheStack/blob/development/lib/titles.php)
* Related: [stachestack\_title](/functions/stachestack_title) (function), [stachestack\_title](/filters/stachestack_title) (filter).