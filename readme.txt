=== VR Easy Fancybox Shortcodes ===

Contributors: leehodson
Tags: easy fancybox, fancybox shortcodes, shortcodes, lightbox
Donate link: http://journalxtra.com/
Requires at least: 3.0
Tested up to: 4.2
Stable tag: 1.0.1
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds shortcodes for the [Easy Fancybox](http://wordpress.org/extend/plugins/easy-fancybox/) plugin to make inline popup box creation a little easier.

== Description ==

Adds shortcodes for the [Easy Fancybox](http://wordpress.org/extend/plugins/easy-fancybox/) plugin to make inline popup box creation a little easier. Easy Fancybox must be installed and activated for Easy Fancybox Shortcodes to work.

** Features **

* Two shortcodes: one for the popup content and one for the popup button.
* Use the shortcodes to create as many popup boxes as you like.
* You can specify class, width and height of the popup box.

** The Shortcodes **

* The Popup Box Content *

The first shortcode contains the content you want to display in a popup. It is:

[easyfbox][/easyfbox]

The popup box content shortcode has 4 attributes:

* box=""
* class=""
* width="" (optional)
* height="" (optional)
* unitw="" (optional. Defaults to px)
* unith="" (optional. Defaults to px)

The *box* attribute is the most important one. It gives the popup box a number. The button that opens the box must be given the same box number as the box it opens.

The *class* attribute correlates to the classes specified in Easy Fancybox for the popup box. The default class is 'fancybox-hidden' Please see the [Easy Fancybox FAQ for reference](http://wordpress.org/extend/plugins/easy-fancybox/faq/). This attribute is optional.

The *width* attribute is optional and can be used to override the automatic height set by Easy Fancybox. You can specify any number here. Use the *unitw* attribute to set the unit of measure (px, em, rem or %). Numbers are the only characters accepted.

The *height* attribute is optional and can be used to override the automatic height calculated by Easy Fancybox. You can specify any number here. Use the *unith* attribute to set the unit of measure (px, em, rem or %). Numbers are the only characters accepted. If the height attribute of the box is set as a percentage then both the page <body> and <HTML> elements must have a height defined in your theme's CSS e.g. html, body {height:100%;}

The *unitw* attribute sets the unit of measure used by the *width* attribute. Valid values are px, em, rem and %. This is an optional attribute.

The *unith* attribute sets the unit of measure used by the *height* attribute. Valid values are px, em, rem and %. This is an optional attribute.

The text, image or other content that shows in the popup box goes between the opening and closing shortcode tags.

Example usage:

[easyfbox box="1"]Hello[/easyfbox]

[easyfbox box="2" height="100" width="100"]Hello Again[/easyfbox]

* The Popup Box Trigger Button *

The trigger button shortcode opens a popup box when clicked.

The trigger button shortcode looks like:

[easypopper][/easypopper]

It has 1 attribute:

* box=""

The box attribute corresponds to the popup box it opens.

The text or image or content that needs to be clicked to open a popup box goes between the opening and closing shortcode tags.

Example usage of both easyfbox and easypopper.

Example 1

This first example opens a popup box that displays the text 'Hello' when the link 'Click Me' is clicked.

`[easyfbox box="1"]Hello[/easyfbox]

[easypopper box="1"]Click Me[/easypopper]`

Example 2

This second example opens a popup box that displays the text 'Hello Again' when the link 'Click Me This Time' is clicked.

`[easyfbox box="2" height="100" width="100"]Hello Again[/easyfbox]

[easypopper box="2"]Click Me This Time![/easypopper]`

Example 3

Embed a Vimeo video using an iFrame

`[easyfbox box="1"]<iframe src="https://player.vimeo.com/video/127958989" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>[/easyfbox]`

[easypopper box="1"]Watch This[/easypopper]

== Other Notes ==

Be sure to configure Easy FancyBox to display the content type you want to use in inline popups.

= One =

== Installation ==

1. Use the WordPress *Add New Plugins* menu otherwise...
1. Download the zip file from WordPress.org.
1. Upload the *FacebookInviter* file to */wp-content/plugins/*.
1, Extract the zip file.
1. Activate the plugin through the WordPress *plugins* page.
1. See *Appearance > Widgets* to place the *Facebook Inviter Widget* in a widget area.
1. Use the [fib] shortcode to place a Facebook friends inviter button anywhere a widget can't be used.

== Frequently Asked Questions ==

* Can I use videos in the popup box? *

You can use any inline content that Easy FancyBox allows.

* Can I use images for the trigger? *

Yes, just use <img src="link to image" /> between the trigger shortcode e.g

[easypopper box="1"]<img src="http://example.com/image.jpg" />[/easypopper]

== Contact ==

[General support](http://journalxtra.com/)
[Commercial support](http://vizred.com/)
[Donate](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=paypal@journalxtra.com&currency_code=USD&amount=&item_name=Donation%20to%20JournalXtra&return=https://journalxtra.com/thank-you/&notify_url=&cbt=Thank%20you%20for%20your%20donation,%20it%20is%20greatly%20appreciated&page_style=WPSM)

== Supported Languages ==

* English

== Changelog ==

1.0.1 - 22nd May 2015

* Enhancement: Option to set width and height unit i.e. px, rem, em or %.
* Security: Prevent direct access to executable file.
* Enhancement: Removed default width and height value. This allows Easy FancyBox to control the box size.

1.0.0

* First public release.

== Upgrade Notice ==

*

== Screenshots ==

1.