---
layout: action
title:  "stachestack_content_override"
category: actions
permalink: actions/stachestack_content_override
---

Using the `stachestack_content_override` action we can override the content of individual posts inside the loop in post archives.

### Example:

```php
<?php

function my_stachestack_content_override() {
	echo 'This is my custom content';
}
add_action( 'stachestack_content_override', 'my_stachestack_content_override' );

?>
```

<hr>

* Location: [index.php](https://github.com/StacheStack/StacheStack/blob/master/index.php)