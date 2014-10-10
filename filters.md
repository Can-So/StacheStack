---
layout: full-width
title: StacheStack Filters
---

You can use filters to change the default behavior and output of the theme.

What are filters?
<blockquote>Filters are functions that WordPress passes data through, at certain points in execution, just before taking some action with the data (such as adding it to the database or sending it to the browser screen). Filters sit between the database and the browser (when WordPress is generating pages), and between the browser and the database (when WordPress is adding new posts and comments to the database); most input and output in WordPress passes through at least one filter. WordPress does some filtering by default, and your plugin can add its own filtering.</blockquote>

You can read more about how to use WordPress filters by reading the [WordPress codex](http://codex.wordpress.org/Plugin_API#Filters).

<hr>

You can find a list of the available filters below:

<ul class="inline-list">

	<li><label class="button small primary disabled">Filters:</label></li>
	{% for post in site.categories.filters. %}
		<li><a class="button small secondary" href="/StacheStack{{ site.url }}{{ post.url }}">{{ post.title }}</a></li>
	{% endfor %}

</ul>
