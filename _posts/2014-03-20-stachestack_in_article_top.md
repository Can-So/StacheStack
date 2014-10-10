---
layout: action
title:  "stachestack_in_article_top"
category: actions
permalink: actions/stachestack_in_article_top
---

Using the `stachestack_in_article_top` action we can inject custom content at the top of the content for single posts and custom post types, right before the title.

### Example:

```php
<?php

function my_custom_top_content() {
	echo 'This content will appear at the very top of all posts';
}
add_action( 'stachestack_in_article_top', 'my_custom_top_content' );

?>
```

<hr>

* Location: [templates/content.php](https://github.com/StacheStack/StacheStack/blob/master/templates/content.php)