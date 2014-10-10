---
layout: filter
title:  "stachestack_top_bar_template"
category: filters
permalink: filters/stachestack_top_bar_template
---

Use this filter to change the template file that will be used for the top-bar.

You can find this filter on the [`base.php`](https://github.com/StacheStack/StacheStack/blob/development/base.php) file:

```php

<?php ss_get_template_part( apply_filters( 'stachestack_top_bar_template', 'templates/top-bar' ) ); ?>

```

We use the [`ss_get_template_part`](/functions/ss_get_template_part) function to locate the template file.

Usage:

```php

<?php

function custom_override_top_bar_template() {
	return 'templates/my-top-bar';
}
add_filter( 'stachestack_top_bar_template', 'custom_override_top_bar_template' );

?>
```