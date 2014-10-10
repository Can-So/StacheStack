---
layout: action
title:  "stachestack_pre_comments"
category: actions
permalink: actions/stachestack_pre_comments
---

Using the `stachestack_pre_comments` action hook, we can insert custom content right before the comments template gets called on single posts.

### Example:

```php
<?php

function my_custom_pre_comments_content() {
	echo 'This is my custom content';
}
add_action( 'stachestack_pre_comments', 'my_custom_pre_comments_content' );

?>
```

<hr>

* Location: [templates/content-single.php](https://github.com/StacheStack/StacheStack/blob/master/templates/content-single.php)