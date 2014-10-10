---
layout: action
title:  "stachestack_in_article_bottom"
category: actions
permalink: actions/stachestack_in_article_bottom
---

Using the `stachestack_in_article_bottom` action we can inject custom content at the bottom of the content for single posts and custom post types.

### Example:

```php
<?php

function my_custom_bottom_content() {
	echo 'This content will appear at the very bottom of all posts';
}
add_action( 'stachestack_in_article_bottom', 'my_custom_top_content' );

?>
```

<hr>

* Location: [templates/content.php](https://github.com/StacheStack/StacheStack/blob/master/templates/content.php), [templates/content-single.php](https://github.com/StacheStack/StacheStack/blob/master/templates/content-single.php)