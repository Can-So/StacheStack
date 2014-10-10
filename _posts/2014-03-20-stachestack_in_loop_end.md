---
layout: action
title:  "stachestack_in_loop_end"
category: actions
permalink: actions/stachestack_in_loop_end
---

The `stachestack_in_loop_end` action can be used to inject custom content at the end of the loop, after the content template.

### Example:

```php
<?php

function my_custom_in_loop_end() {
	echo 'This content will appear in the end of the loop';
}
add_action( 'stachestack_in_loop_end', 'my_custom_in_loop_end' );

?>
```

<hr>

* Location: [index.php](https://github.com/StacheStack/StacheStack/blob/master/index.php)