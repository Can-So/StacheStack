---
layout: action
title:  "stachestack_single_top"
category: actions
permalink: actions/stachestack_single_top
---

This action can be used to add content on single posts, right after the `<article>` element opens.

### Example:

```php
<?php

// Insert content using the 'stachestack_single_top' action.
function custom_content_stachestack_single_top() {

	echo '<p>This content will be added on all posts.</p>';
	echo '<p>The content will be located BEFORE the title</p>';

}
add_action( 'stachestack_single_top', 'custom_content_stachestack_single_top' );

?>
```

<hr>

* Location: [templates/content-single.php](https://github.com/StacheStack/StacheStack/blob/development/templates/content-single.php)