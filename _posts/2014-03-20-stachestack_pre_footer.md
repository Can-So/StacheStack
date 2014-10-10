---
layout: action
title:  "stachestack_pre_footer"
category: actions
permalink: actions/stachestack_pre_footer
---

The `stachestack_pre_footer` action is located in `base.php` after the main wrapper div and before the footer.

### Example:

```php
<?php

function my_custom_pre_footer() {
	echo 'This content will be visible before the footer.';
}
add_action( 'stachestack_pre_footer', 'my_custom_pre_footer' );

?>
```

<hr>

* Location: [base.php](https://github.com/StacheStack/StacheStack/blob/master/base.php)