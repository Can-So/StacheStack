---
layout: childtheme
title: StacheStack Child-Themes
---

You can learn more about how to use Child themes with the StacheStack Theme by reading the articles below.

We also have some premium Child themes available:
<ul class="button-group">
	<li><a href="http://stachestack.io/downloads/StacheStack-woocommerce-child/" class="button alert">WooCommerce Child theme</a></li>
	<li><a href="http://stachestack.io/downloads/StacheStack-edd-child/" class="button alert">Easy Digital Downloads Child theme</a></li>
</ul>

<hr>

<ul class="side-nav">

	<li><label>Articles and resources about Child-Themes:</label></li>
	{% for post in site.categories.child-themes. %}
		<li><a href="/StacheStack{{ site.url }}{{ post.url }}">{{ post.title }}</a></li>
	{% endfor %}

</ul>