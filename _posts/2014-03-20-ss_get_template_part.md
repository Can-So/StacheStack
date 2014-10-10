---
layout: function
title:  "ss_get_template_part"
category: functions
permalink: functions/ss_get_template_part
---

Introduced in StacheStack 3.2, this function allows us to override some templates from our framework.

It is similar to WordPress's [get\_template\_part](http://codex.wordpress.org/Function_Reference/get_template_part) function and will search for our template file in this order:

```
SS_FRAMEWORK_PATH . '/' . $template_name
STYLESHEETPATH . '/' . $template_name
TEMPLATEPATH . '/' . $template_name;
```

example:

```php
<?php ss_get_template_part( 'page' ); ?>
```

<hr>

* Location: [/lib/template.php](https://github.com/StacheStack/StacheStack/blob/development/lib/template.php)
* Related: [ss\_locate\_template](/functions/ss_locate_template)