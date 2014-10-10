---
layout: action
title:  "stachestack_after_comments"
category: actions
permalink: actions/stachestack_after_comments
---

Using the `stachestack_after_comments` action we can insert custom content right after the comments template get called on single posts.

### Example:
```php
<?php

function my_custom_after_comments_content() {
	echo 'This is my custom content';
}
add_action( 'stachestack_after_comments', 'my_custom_after_comments_content' );
?>
```

<hr>

* Location: [templates/content-single.php](https://github.com/StacheStack/StacheStack/blob/master/templates/content-single.php)