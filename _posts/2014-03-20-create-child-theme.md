---
layout: childtheme
title:  "Create a basic Child Theme"
category: child-themes
permalink: child-themes/create-basic-child-theme
---

<a class="button" href="https://github.com/StacheStack/stachestack-child">Sample Child Theme</a>

There are a lot of actions and hooks we can use to (re)place content in specific parts of our site.

An easy way to do that, keeping all of our custom work safe, is by creating a [child-theme](http://codex.wordpress.org/Child_Themes). The procedure is pretty simple and we'll see a basic example below.

* Inside your `/themes` folder create a new folder `/stachestack-child`
* Inside `/stachestack-child` folder create a `style.css` file containing the below code:

```css
/*
Theme Name:    My StacheStack 3
Description:   My custom child theme for StacheStack 3
Version:       draft
Author:        Your Name
Template:      StacheStack
*/
```

This file is used by WordPress to detect the properties of your child theme.
The "Template" line above is actually the folder name of the StacheStack parent theme. If for some reason you've renamed the folder, you'll need to change the `Template` definition in your child theme's `style.css` file.

* Inside the `/stachestack-child` folder you can now create a `functions.php` file.
Here you can insert all your custom functions and take advantage of all the actions and filters that StacheStack uses.