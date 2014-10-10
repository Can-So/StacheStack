---
layout: action
title:  "stachestack_entry_meta_override"
category: actions
permalink: actions/stachestack_entry_meta_override
---

This will skip loading the [templates/entry-meta.php](https://github.com/StacheStack/StacheStack/blob/master/templates/entry-meta.php) file, allowing us to replace it with our own custom template.
The templates/entry-meta.php file includes the author info, date info, categories etc of the post.

Example:

```php
<?php

function my_custom_metadata() {
	echo 'This is my custom metadata';
}
add_action( 'stachestack_entry_meta_override', 'my_custom_metadata' );
?>
```

<hr>

* Location: [templates/content-single.php](https://github.com/StacheStack/StacheStack/blob/master/templates/content-single.php), [templates/content.php](https://github.com/StacheStack/StacheStack/blob/master/templates/content.php).