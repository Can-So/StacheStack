---
layout: childtheme
title:  "When to use a child theme"
category: child-themes
permalink: child-themes/when-to-use-child-themes
---

StacheStack is pretty extendable and in most cases a child theme is **not** needed.

Most people create child themes in order to add their own styles or scripts.

On the StacheStack theme however, you can write your custom CSS, LESS and JS right from the admin panel and they will be included in your theme without needing a child theme, as swown in the below screenshot of the options:
![Redux Admin StacheStack Options](/StacheStack{{ site.url }}/images/admin-custom-css-less-js.png)

* If you write your custom styles in the **Custom CSS** field, the theme will output your styles on the `<head>` of the page.
* If you write your custom styles in the **Custom LESS** field, your styles will be automatically compiled and included in the main stylesheet. This way you avoid loading an extra file.
* On the **Custom Less** field you can write using the [Less](http://www.lesscss.org/) syntax, or even plain CSS.
If you write LESS, you can even use bootstrap variables in your styles. You could change for example the Branding Warning and Branding Danger colors using the StacheStack admin panel, and your styles will automatically change according to that:

```css
#my-div {
	color: @brand-warning;

	a.my-link {
		.btn;
		.btn-danger;
	}
}
```

The above code for example will make the text inside the `#my-div`> div on your page inherit the color you have specified as brand-warning and the link that has a class of `my-link` inside that div will be styled as a bootstrap danger button.

* If you write your custom JavaScript in the **Custom JS** field, it will be included at the bottom of your theme.

All of the above tweaks are completely safe and on a Multisite installation these changes will be applied on a per-site basis so you can modify one site using the admin panel and the other sites on your network will not be affected by these changes.

### So when should you use a child theme?

You should use a child theme if one of the following is true:

* You want to write custom templates
* You want to include custom functions in your theme's `functions.php` file
* You are on a multisite and you want your custom styles to be applied network-wide.


#### Writing Custom Templates:

You can include your custom templates in the `templates` folder in your child theme, following the same structure as in the parent theme.
So if you want for example to override the template for single posts, you will have to create a new file in the `templates` folder in your child theme called `content-single.php`.
The child theme template you create will automatically override the parent theme template and your file will be used instead.


#### Including custom functions in your theme's `functions.php` file:

Any code and custom functions you write in your child theme's functions.php file will be automatically included.


#### Hard-code custom styles

You can add both custom CSS and custom LESS, depending on your use case.
* **Write your styles in the `style.css` file of your child theme**
By default the `style.css` file is not included.
In order for your stylesheets to be included, you will have to enqueue that file.
To do that, add the following code in your child theme's `functions.php` file:

```php
<?php

function my_child_theme_stylesheet() {

	wp_enqueue_style( 'my_child_theme_stylesheet', get_stylesheet_uri(), false, null );

}
add_action( 'wp_enqueue_scripts', 'my_child_theme_stylesheet', 100 );

?>
```

* **Write less and include it in the compiled css**
You can write your own less files and have them included in the compiled CSS.
To do that, create a new file in your child theme called `my-styles.less` and place it in your `assets/less/` folder.
Then add the following in your child theme's `functions.php` file:

```php
<?php

add_filter( 'stachestack_compiler', 'my_childtheme_less_styles' );
function my_childtheme_less_styles( $bootstrap ) {

	return $bootstrap . '
	@import "' . get_stylesheet_directory() . '/assets/less/my-styles.less";';

}
?>
```
