---
layout: framework
title: StacheStack Framework
---

## Framework Agnostic

StacheStack is now a Framework-Agnostic theme. [Bootstrap](http://getbootstrap.com) is included and is currently the default CSS framework, but it can easily be switched to another framework.

Other frameworks can be included via a plugin. To see an example of how to build your own frameworks as plugins, we've already built [Foundation 5](http://foundation.zurb.com/) in a plugin.

<a class="button button-alert" href="https://github.com/StacheStack/stachestack-foundation">StacheStack-Foundation</a>

By installing and activating this plugin, the theme will use the styles, scripts and definitions of the new framework and disregard the pre-bundeled Bootstrap.

<!-- <ul class="side-nav">
	<li><label>The Framework</label></li>
	{% for post in site.categories.framework. %}
		<li><a href="/StacheStack{{ site.url }}{{ post.url }}">{{ post.title }}</a></li>
	{% endfor %}

</ul> -->