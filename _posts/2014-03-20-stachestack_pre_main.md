---
layout: action
title:  "stachestack_pre_main"
category: actions
permalink: actions/stachestack_pre_main
---

The `stachestack_pre_main` action is located in `base.php` between the content div and the main content.

### Example:

```php
<?php
function my_custom_pre_main() {
	echo 'This content will be visible after the content div and before the main content.';
}
add_action( 'stachestack_pre_main', 'my_custom_pre_main' );

?>
```

<hr>

* Location: [base.php](https://github.com/StacheStack/StacheStack/blob/master/base.php)