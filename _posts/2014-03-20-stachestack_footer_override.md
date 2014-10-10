---
layout: action
title:  "stachestack_footer_override"
category: actions
permalink: actions/stachestack_footer_override
---

Using the `stachestack_footer_override` action we can replace the standard footer template of StacheStack.

### Example:

```php
<?php

function my_custom_footer_override() { ?>
	<hr>
	<div id="footer">
		<p>Powered by <a href="http://wordpress.org/" title="WordPress">WordPress</a></p>
		<br />
		<a href="feed:<?php bloginfo( 'rss2_url' ); ?>">Entries (RSS)</a>
	</div>
	<?php
}
add_action( 'stachestack_footer_override', 'my_custom_footer_override' );

?>
```

<hr>

* Location: [base.php](https://github.com/StacheStack/StacheStack/blob/master/base.php)