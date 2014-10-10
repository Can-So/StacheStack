---
layout: action
title:  "stachestack_in_loop_start"
category: actions
permalink: actions/stachestack_in_loop_start
---

The `stachestack_in_loop_start` action is at the beginning of the loop before the content template part.
You can use it to inject your custom content at that point.

### Example:

```php
<?php

function my_custom_in_loop_start() {
	echo 'This content will appear in the beginning of the loop';
}
add_action( 'stachestack_in_loop_start', 'my_custom_in_loop_start' );

?>
```

<hr>

* Location: [index.php](https://github.com/StacheStack/StacheStack/blob/master/index.php)