---
layout: full-width
title: StacheStack Actions
---

The StacheStack theme includes a lot of actions that you can use to insert your own custom content or trigger actions at different events during a page load.

What are Actions?
<blockquote>Actions are triggered by specific events that take place in WordPress, such as publishing a post, changing themes, or displaying an administration screen Action is a custom PHP function defined in your plugin (or theme) and hooked, i.e. set to respond, to some of these events.</blockquote>

You can read more about how to use WordPress filters by reading the [WordPress codex](http://codex.wordpress.org/Plugin_API#Actions).

<hr>

You can find a list of the available actions below:

<ul class="inline-list">

	<li><label class="button small primary disabled">Actions:</label></li>
	{% for post in site.categories.actions. %}
		<li><a class="button small secondary" href="{{ site.url }}{{ post.url }}">{{ post.title }}</a></li>
	{% endfor %}

</ul>

<hr>

If you have been using an older version of the theme and have developed your own extensions to it, you can find a list of the deprecated, no longer used actions below. We advise you to migrate to the newer actions that are listed above in order for your addons to keep working properly without any issues.

<ul class="inline-list">

	<li><label class="button tiny alert disabled">Deprecated Actions:</label></li>
	{% for post in site.categories.actions-deprecated. %}
		<li><a class="button tiny secondary" href="{{ site.url }}{{ post.url }}">{{ post.title }}</a></li>
	{% endfor %}

</ul>