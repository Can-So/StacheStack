---
layout: action
title:  "stachestack_pre_wrap"
category: actions
permalink: actions/stachestack_pre_wrap
---

Using the `stachestack_pre_wrap` action we can insert custom content before the `breadcrumb` and main `wrap` sections.

### Example:

```php
<?php

function my_custom_pre_wrap() {
	echo 'This is my custom content';
}
add_action( 'stachestack_pre_wrap', 'my_custom_pre_wrap' );

?>
```

<hr>

* Location: [base.php](https://github.com/StacheStack/StacheStack/blob/master/base.php)