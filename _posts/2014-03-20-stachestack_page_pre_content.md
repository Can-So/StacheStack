---
layout: action
title:  "stachestack_page_pre_content"
category: actions
permalink: actions/stachestack_page_pre_content
---

Using the `stachestack_page_pre_content` action we can insert custom content at the top of the content of single pages, right below the title and the meta-data of the post.

Our content will be inserted before `the_content()`.

### Example:

```php
<?php

function my_custom_page_pre_content() {
	echo 'This is my custom content';
}
add_action( 'stachestack_page_pre_content', 'my_custom_page_pre_content' );

?>
```

<hr>

* Location: [templates/content-page.php](https://github.com/StacheStack/StacheStack/blob/master/templates/content-page.php)