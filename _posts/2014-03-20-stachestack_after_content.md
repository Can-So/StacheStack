---
layout: action
title:  "stachestack_after_content"
category: actions
permalink: actions/stachestack_after_content
---

The `stachestack_after_content` action is located in the `base.php` file, right after the content div (before the main wrapper div closes). You can use it to inject your custom content at that point.

### Example:

```php
<?php

function my_custom_after_content() {
	echo 'This content will be visible after the content div.';
}
add_action( 'stachestack_after_content', 'my_custom_after_content' );

?>
```

<hr>

* Location: [base.php](https://github.com/StacheStack/StacheStack/blob/master/base.php)