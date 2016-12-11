# weblayouts-wp-theme
Wordpress theme of weblayouts.ca with full documentation


# Resources loading
This section describes how resources are loaded by the theme:

## Stylesheet resources
* Critical stylesheet : That absolutely needs to load before the rest of the page. Contains light styles just to give a decent shape to the whole layout. Included at the end of the "<head> with a <style>@import '<?php ... /style-critical.css'; </style>"