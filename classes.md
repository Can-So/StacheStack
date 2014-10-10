---
layout: full-width
title: StacheStack Classes
---

Classes are a way to better organize the code in the StacheStack theme. We are slowly moving towards a more OOP model, so some of the [functions](/functions) currently available in the theme will be slowly migrating in classes.

You can learn more about PHP Classes in the [PHP Manuals](http://www.php.net/manual/en/language.oop5.php).

<hr>

You can find a list of the available classes below:

<ul class="inline-list">

	<li><label class="button small primary disabled">Classes:</label></li>
	{% for post in site.categories.classes. %}
		<li><a class="button small secondary" href="{{ site.url }}{{ post.url }}">{{ post.title }}</a></li>
	{% endfor %}

</ul>
