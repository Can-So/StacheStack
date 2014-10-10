---
layout: action
title:  "stachestack_pre_top_bar"
category: actions
permalink: actions/stachestack_pre_top_bar
---

The `stachestack_pre_top_bar` action is located in `base.php` and allows us to inject content before the main top navbar.

### Example:

```php
<?php

function my_custom_pre_top_bar() {
	echo 'This content will be visible before the main top navbar.';
}
add_action( 'stachestack_pre_top_bar', 'my_custom_pre_top_bar' );

?>
```

<hr>

* Location: [base.php](https://github.com/StacheStack/StacheStack/blob/master/base.php)