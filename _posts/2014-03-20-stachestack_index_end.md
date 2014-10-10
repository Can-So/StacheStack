---
layout: action
title:  "stachestack_index_end"
category: actions
permalink: actions/stachestack_index_end
---

Using the `stachestack_index_end` action we can inject custom content at the bottom of the content when the index.php template file is being used (for example on post archives).

### Example:

```php
<?php

function my_custom_index_end_content() {
	echo 'This content will appear at the very bottom of all post archives';
}
add_action( 'stachestack_index_end', 'my_custom_index_end_content' );

?>
```

<hr>

* Location: [index.php](https://github.com/StacheStack/StacheStack/blob/master/index.php)