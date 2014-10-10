---
layout: action
title:  "stachestack_after_main"
category: actions
permalink: actions/stachestack_after_main
---

The `stachestack_after_main` action lies in the `base.php` file between the main content and before the primary sidebar.

### Example:

```php
<?php

function my_custom_after_main() {
	echo 'This content will be visible after the main content.';
}
add_action( 'stachestack_after_main', 'my_custom_after_main' );

?>
```

<hr>

* Location: [base.php](https://github.com/StacheStack/StacheStack/blob/master/base.php)