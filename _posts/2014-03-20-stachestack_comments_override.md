---
layout: action
title:  "stachestack_comments_override"
category: actions
permalink: actions/stachestack_comments_override
---

This will skip loading the [templates/comments.php](https://github.com/StacheStack/StacheStack/blob/master/templates/comments.php) file, allowing you to replace it with your own custom template.

The templates/comments.php file includes the comments template, so this action hook is useful if we want to replace the WordPress default comment system with our own.

### Example:

```php
<?php

function my_custom_comments_template() {

	// Content here to replace the comments template

}
add_action( 'stachestack_comments_override', 'my_custom_comments_template' );

?>
```

<hr>

* Location: [templates/content-single.php](https://github.com/StacheStack/StacheStack/blob/master/templates/content-single.php)