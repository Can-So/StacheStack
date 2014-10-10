---
layout: action
title:  "stachestack_override_index_loop"
category: actions
permalink: actions/stachestack_override_index_loop
---

Using the `stachestack_override_index_loop` action we can override the whole index loop of StacheStack.

### Example:

```php
<?php

function my_custom_index_loop() {
	while ( have_posts() ) : the_post();
		ss_get_template_part( 'templates/content', get_post_format() );
	endwhile;
}
add_action( 'stachestack_override_index_loop', 'my_custom_index_loop' );

?>
```

<hr>

* Location: [index.php](https://github.com/StacheStack/StacheStack/blob/master/index.php)