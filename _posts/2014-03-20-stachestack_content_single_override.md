---
layout: action
title:  "stachestack_content_single_override"
category: actions
permalink: actions/stachestack_content_single_override
---

Using the `stachestack_content_single_override` action you can override the content of single posts.
This will completely bypass loading the [templates/content-single.php](https://github.com/StacheStack/StacheStack/blob/master/templates/content-single.php) file and you will have to manually add your own template.

### Example:

```php
<?php

function my_custom_single_content() {
	while ( have_posts()) : the_post(); ?>

		<article>

			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
				<div class="clearfix"></div>
			</div>

			<?php comments_template( '/templates/comments.php' ); ?>

		</article>
	<?php endwhile;
}
add_action( 'stachestack_content_single_override', 'my_custom_single_content' );

?>
```

<hr>

* Location: [single.php](https://github.com/StacheStack/StacheStack/blob/master/single.php)