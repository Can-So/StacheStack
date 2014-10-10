---
layout: full-width
title: StacheStack Functions
---

<hr>

You can find a list of the available functions below:

<ul class="inline-list">

	<li><label class="button small primary disabled">Functions:</label></li>
	{% for post in site.categories.functions. %}
		<li><a class="button small secondary" href="{{ site.url }}{{ post.url }}">{{ post.title }}</a></li>
	{% endfor %}

</ul>

<hr>

If you have been using an older version of the theme and have developed your own extensions to it, you can find a list of the deprecated, no longer used functions below. We advise you to migrate to the newer functions and methods that are listed above in order for your addons to keep working properly without any issues.

<ul class="inline-list">

	<li><label class="button tiny alert disabled">Deprecated Actions:</label></li>
	{% for post in site.categories.functions-deprecated. %}
		<li><a class="button tiny secondary" href="{{ site.url }}{{ post.url }}">{{ post.title }}</a></li>
	{% endfor %}

</ul>