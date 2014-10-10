---
layout: filter
title:  "stachestack_title_section"
category: filters
permalink: filters/stachestack_title_section
---

Allows changing the title section.

### Example:

```php
<?php

function custom_stachestack_title_section() {
	return '<header><h1>' . stachestack_title() . '</h1></header>';
}
add_filter( 'stachestack_title_section', 'custom_stachestack_title_section' );
?>
```

<hr>

* Location: [lib/titles.php](https://github.com/StacheStack/StacheStack/blob/development/lib/titles.php)
* Related: [stachestack\_title](/functions/stachestack_title) (function), [stachestack\_title](/filters/stachestack_title) (filter).