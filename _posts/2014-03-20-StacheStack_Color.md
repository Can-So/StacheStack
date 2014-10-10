---
layout: class
title:  "StacheStack_Color"
category: classes
permalink: classes/StacheStack_Color
---

## Color manipulation in the StacheStack theme

The `StacheStack_Color` is responsible for all the color calculations in the theme. These methods are used in the compiler in order to auto-calculate the optimal values for your colors to ensure better readability and contrast.

You can find examples and usage instructions for all methods in the class below.

<div data-alert class="alert-box">
	<p>If you are integrating your own CSS Framework in StacheStack, you can use these methods to in your compiler. You can even auto-calculate all CSS colors of your theme using these and having the user simply define their "main" color.</p>
</div>

### Color Sanitization
Make sure that the color is properly formatted.
Returns a hex value.

```php

<?php return StacheStack_Color::sanitize_hex( $color ); ?>

```
`$color`: the color that we want to sanitize to a hex value.


### Convert HEX to RGB

```php

<?php return StacheStack_Color::get_rgb( $color, $implode ); ?>

```
* `$color`: a **HEX** value that we want to convert to *RGB**.
* `$implode`: can be `true` or `false`.
	* If set to *true*, the function returns a formatted string `(R,G,B)`.
	* If set to *false, the function returns an array: `array( $red, $green, $blue )`


### Convert HEX to RGBA

```php

<?php return StacheStack_Color::get_rgba( $hex, $opacity, $echo ) ?>

```
* `$hex`: a **HEX** value that we want to convert to **RGBA**.
* `$opacity` : numeric value of the opacity. If a value between 1 and 100 is used, the function divides it by 100 to return a properly formatted opacity value (range 0-1). Defaults to 100%.
* `$echo`: If *true*, the value is echoed. If *false*, the value is returned. Defaults to false.


### Get the brightness of a hex color

```php

<?php return StacheStack_Color::get_brightness( $hex ) ?>

```
* Returns a value between 0 and 255


### Adjust the brightness of a hex color

```php

<?php return StacheStack_Color::adjust_brightness( $hex, $steps ) ?>

```
* `$steps` should be between -255 and 255. Negative = darker, positive = lighter
* Returns a hex color value.


### Mix 2 hex colors

```php

<?php return StacheStack_Color::mix_colors( $hex1, $hex2, $percentage ) ?>

```
* `$hex1`: The first hex color
* `$hex2`: The second hex color
* `$percentage`: the percent of the first color to be used it the mix. default is 50 (equal mix).


### Convert a hex color to HSV

```php

<?php return StacheStack_Color::hex_to_hsv( $hex ) ?>

```
* `$hex`: The hex value that we want to convert to HSV.
* Returns HSV value of the color (Uses `self::rgb_to_hsv`).


### Convert an RGB color to HSV

```php

<?php return StacheStack_Color::rgb_to_hsv( $color ) ?>

```
* `$color`: an RGB **array**.
* Returns HSV value of the color.


### Get the brightest color from an array of hex values

```php

<?php return StacheStack_Color::brightest_color( $colors, $context ) ?>

```
* `$colors`: **array**.
* `$context`: can be `'key'` or `'value'`.

#### Example:
```php 
<?php
// Create the array of colors we are going to use:
$colors = array();
$colors[0] = '#aaaaaa';
$colors[1] = '#ffffff';
$colors[2] = '#222222';

// The below will echo '1',
// because '1' is the key of the brightest color in our array ( #ffffff ):
echo StacheStack_Color::brightest_color( $colors, 'key' );

// The below will echo '#ffffff',
// because this is the hex value of the brightest color in our array.
echo StacheStack_Color::brightest_color( $colors, 'value' );

?>
```

### Get the most saturated color from an array of hex values

```php

<?php return StacheStack_Color::most_saturated_color( $colors, $context ) ?>

```
* `$colors`: **array**.
* `$context`: can be `'key'` or `'value'`.
* For usage examples, see the `StacheStack_Color::brightest_color()` method above.


### Get the most Intense color from an array of hex values

```php

<?php return StacheStack_Color::most_intense_color( $colors, $context ) ?>

```
* `$colors`: **array**.
* `$context`: can be `'key'` or `'value'`.
* For usage examples, see the `StacheStack_Color::brightest_color()` method above.


### Get the most Brightest and dullest color from an array of hex values

```php

<?php return StacheStack_Color::brightest_dull_color( $colors, $context ) ?>

```
* `$colors`: **array**.
* `$context`: can be `'key'` or `'value'`.
* For usage examples, see the `StacheStack_Color::brightest_color()` method above.


### Get the color difference between 2 colors.

This is a very simple algorithm that works by summing up the differences between the three color components red, green and blue.
A value higher than 500 is recommended for good readability.

```php

<?php return StacheStack_Color::color_difference( $color1, $color2 ) ?>

```
* `$color1`: hex value.
* `$color2`: hex value.


### Get the brightness difference between 2 colors.

This function tries to compare the brightness of the colors.
A return value of more than 125 is recommended.
Combining it with the color_difference function above might make sense.

```php

<?php return StacheStack_Color::brightness_difference( $color1, $color2 ) ?>

```
* `$color1`: hex value.
* `$color2`: hex value.


### Get the lumosity difference between 2 colors.

Uses the luminosity to calculate the difference between the given colors.
The returned value should be bigger than 5 for best readability.

```php

<?php return StacheStack_Color::lumosity_difference( $color1, $color2 ) ?>

```
* `$color1`: hex value.
* `$color2`: hex value.

