---
layout: class
title:  "StacheStack_Image"
category: classes
permalink: classes/StacheStack_Image
---

## Images manipulation in the StacheStack Theme

You can use the `StacheStack_Image` class to manage and resize youe images.


### Resize an image

You can use the `image_resize` method:
Resizes an image and returns an array containing the resized URL, width, height and file type. Uses native Wordpress functionality.

#### Example:

```php
<?php

// Build the array of data we'll need.
$data = array(
	'url'    => 'http://example.com/image.png', // The URL to the image
	'width'  => 400,	// The width of the resized image in pixels.
	'height' => 200,	// The height of the resized image in pixels.
	'crop'   => true,	// Should we crop? (boolean)
	'retina' => true,	// Enable or disable retina images (boolean)
	'resize' => true	// Should we resize the image (boolean)
);

$image = StacheStack_Image::image_resize( $data );

// echo the URL of the resized image
echo $image['url'];

// echo the width of the resized image
echo $image['width'];

// echo the height of the resized image
echo $image['height'];

// echo the filetype of the resized image
echo $image['height'];

?>
```

This method also supports retina images.
When we set `'retina' => true,` in our arguments, 2 new files are created: the normal file that WordPress creates with the new dimentions, and a second file with the exact double dimentions and a suffix of `@2x` to its filename.

We can then use [retina.js](http://retinajs.com/) to make use of those images.

The StacheStack theme already includes *retina.js* so there is no need to load it externally.
When you enable retina mode on the admin section of the theme, all featured images are automatically scaled using the `retina = true` parameter, and the retina.js script is automatically loaded.

