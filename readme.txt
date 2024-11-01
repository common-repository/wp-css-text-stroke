=== WP CSS Text Stroke ===
Contributors: JulienC
Donate link: http://blog.mapmyglobe.com/
Tags: Formatting, text stroke
Requires at least: 2.0
Tested up to: 2.3
Stable tag: trunk

This plugin enables you to apply a text stroke to any piece of text on your template.

== Description ==

Text Stroke is the cool, nice-looking effect where black text characters are displayed on a white surrounding to increase readability on a non-uniform coloured background. For example text on Google Maps is displayed that way.

This plugin contains a piece of javascript code that's called on window load and that enables you to get text stroking on any piece of text on your web page's template. The trick is to repeat the text element 9 times in white color in the background, each instance being slightly moved from the original text position.

Detailed description is at http://blog.mapmyglobe.com/css-text-stroke/

== Installation ==

1. Upload plugin to your `/wp-content/plugins/` directory
1. Edit css-text-stroke.php to apply the `processTextStroke()` function to the desired CSS selector (the piece of text that you want to stroke)
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Is it SEO-friendly? =

As far as I know, it is. Because Google doesn't apply onload() javascripts to pages when crawling them. 

== Screenshots ==

1. Example
