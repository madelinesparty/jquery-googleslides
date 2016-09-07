=== jQuery googleslides ===
Contributors: brady.holt
Donate link: http://bradyholt.github.com/jquery-googleslides
Tags: jquery, slideshow, images, pictures, gallery, image, picture, photo, media
Requires at least: 2.0.2
Tested up to: 3.3.1
Stable tag: 1.3

Integrates the googleslides jQuery plugin to display your Google Photos, including Picasa and Google+ albums.

== Description ==

jquery.googleslides is a simply jQuery plugin that displays your Google Photos, including Picasa and Google+ albums.  Visit the [jquery-googleslides project site](http://bradyholt.github.com/jquery-googleslides) for more information.

== Installation ==

###Installing The Plugin###

Either use the built in plugin installation feature of WordPress, or extract all files from the ZIP file, making sure to keep the file structure intact, and then upload it to `/wp-content/plugins/`. Then just visit your admin area and activate the plugin. That's it!

== Frequently Asked Questions ==

= Usage =

Add a Shortcode to use this plugin.  For example:  
[googleslides albumid="5710317752556741025" userid="115528839112598673902"].

**The album you specify must be marked 'Public' in Google+ or Picasa!**

You can also specify any of the jquery.googleslides plugin options in the Shortcode like this:  
[googleslides albumid="5710317752556741025" userid="115528839112598673902" imgmax="200" caption="false" time="3000"]

= Determining userid and albumid =

To find your user and albumid, you should open the album directly from the Google+ or Picasa page. When the album comes up you will see the user and albumid in Url.  
Refer to the [jquery.googleslides project site](http://bradyholt.github.com/jquery-googleslides) for more information about determining the userid and albumid.

= Options =

Refer to the [jquery.googleslides project site](http://bradyholt.github.com/jquery-googleslides) for a list of all the options.  Any of the options can be specified in your Shortcode.

= Widgets =

If you want to be able to use this plugin in a widget area, you need to add the following line to your functions.php file:  
add_filter('widget_text', 'do_shortcode');

== Screenshots ==

Visit the [jquery-googleslides project site](http://bradyholt.github.com/jquery-googleslides) for screenshots / demos.

1. googleslides (default)

== Changelog ==

= 1.3 =
* Fixing bug with jumping window on slide change.

= 1.2 =
* Support 'Limited' visibility albums with authkey option.  Enhanced css.

= 1.1 =
* Initial release

== Upgrade Notice ==