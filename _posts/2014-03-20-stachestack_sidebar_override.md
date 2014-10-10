---
layout: action
title:  "stachestack_sidebar_override"
category: actions
permalink: actions/stachestack_sidebar_override
---

The `stachestack_sidebar_override` action can be used to replace the primary sidebar template.

### Example:
```php
<?php

function my_custom_sidebar() {
	// your custom sidebar template code
}
add_action( 'stachestack_sidebar_override', 'my_custom_sidebar' );

?>
```

<hr>

* Location: [base.php](https://github.com/StacheStack/StacheStack/blob/master/base.php)