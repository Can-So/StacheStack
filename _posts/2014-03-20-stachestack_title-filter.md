---
layout: filter
title:  "stachestack_title"
category: filters
permalink: filters/stachestack_title
---

The `stachestack_title` fuilter can be used to change the output of the [`stachestack_title`](/functions/stachestack_title) function.

### Example:

```php
<?php

function custom_stachestack_title( $title ) {
	return '<span>' . $title . '</span>';
}
add_filter( 'stachestack_title', 'custom_stachestack_title' );

?>
```

Output can be filtered using the [stachestack\_title](/filters/stachestack_title) filter.

* Location: [lib/titles.php](https://github.com/StacheStack/StacheStack/blob/development/lib/titles.php)
* Related: [stachestack\_title](/filters/stachestack_title)