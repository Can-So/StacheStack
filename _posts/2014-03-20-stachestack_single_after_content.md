---
layout: action
title:  "stachestack_single_after_content"
category: actions
permalink: actions/stachestack_single_after_content
---

This action can be used to add content on single posts, right after `the_content()`.

### Example:

```php
<?php

// Insert content using the 'stachestack_single_after_content' action.
function custom_content_stachestack_single_pre_content() {

	echo '<p>This content will be added on all posts.</p>';
	echo '<p>The content will be located AFTER the main post content.</p>';

}
add_action( 'stachestack_single_after_content', 'custom_content_stachestack_single_top' );

?>
```

<hr>

* Location: [templates/content-single.php](https://github.com/StacheStack/StacheStack/blob/development/templates/content-single.php)