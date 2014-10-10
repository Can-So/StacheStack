---
layout: action
title:  "stachestack_index_begin"
category: actions
permalink: actions/stachestack_index_begin
---

Using the `stachestack_index_begin` action we can insert custom content at the top of the content when the index.php template file is being used (for example on post archives).

The custom content will be injected right after the title.

### Example:

```php
<?php

function my_custom_index_begin_content() {
	echo 'This content will appear at the very top of all post archives';
}
add_action( 'stachestack_index_begin', 'my_custom_index_begin_content' );

?>
```

<hr>

* Location: [index.php](https://github.com/StacheStack/StacheStack/blob/master/index.php)