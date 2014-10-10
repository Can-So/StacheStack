---
layout: action
title:  "stachestack_pre_content"
category: actions
permalink: actions/stachestack_pre_content
---

The `stachestack_pre_content` action is located in `base.php` between the main wrapper div and the content divs.

### Example:

```php
<?php

function my_custom_pre_content() {
	echo 'This content will be visible after the main wrap and before the content.';
}
add_action( 'stachestack_pre_content', 'my_custom_pre_content' );

?>
```

<hr>

* Location: [base.php](https://github.com/StacheStack/StacheStack/blob/master/base.php)