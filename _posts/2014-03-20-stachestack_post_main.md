---
layout: action
title:  "stachestack_post_main"
category: actions
permalink: actions/stachestack_post_main
---

The `stachestack_post_main` action is located in `base.php` between the primary and secondary sidebars.

### Example:

```php
<?php

function my_custom_post_main() {
	echo 'This content will be visible after the main content.';
}
add_action( 'stachestack_post_main', 'my_custom_post_main' );

?>
```

<hr>

* Location: [base.php](https://github.com/StacheStack/StacheStack/blob/master/base.php)