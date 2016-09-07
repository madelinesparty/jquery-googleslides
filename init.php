<?php
/*
Plugin Name: jQuery googleslides
Plugin URI: http://wordpress.org/extend/plugins/jquery-googleslides/
Description: A jQuery plugin to display your Google Photos, including Picasa and Google+ albums. 
Version: 1.3
Author: Brady Holt
Author URI: http://www.geekytidbits.com
License: MIT
 
//Other terms and conditions
 
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
*/

function googleslides_scripts() {
   //Add the stylesheet into the header
   wp_enqueue_style(
	"jquery.googleslides", 
	WP_PLUGIN_URL."/jquery-googleslides/jquery.googleslides.css", 
	false, 
	"1.2");

   //Add the scripts in the footer
   wp_enqueue_script("jquery");
   wp_enqueue_script(
	"jquery.googleslides", 
	WP_PLUGIN_URL."/jquery-googleslides/jquery.googleslides.js", 
	array("jquery"), "1.2",0);	

   wp_enqueue_script(
        "jquery.googleslides.init",        
	WP_PLUGIN_URL."/jquery-googleslides/jquery.googleslides.init.js",
        array("jquery", "jquery.googleslides"), "1.2",1);
}
add_action( 'wp_enqueue_scripts', 'googleslides_scripts' );

function googleslides_handler($atts) {
   extract( shortcode_atts( array(
                'userid' => '115528839112598673902',
                'albumid' => '5710317752556741025',
				'authkey' => '',
                'imgmax' => '460',
                'maxresults' => '100',
                'random' => 'true',
                'caption' => 'true',
                'albumlink' => 'false',
                'time' => '5000',
                'fadespeed' => '1000',
        ), $atts ) );

   return "<div class='googleslides' uid='{$userid}' aid='{$albumid}' authkey='{$authkey}' imgmax='{$imgmax}'
        maxresults='{$maxresults}' random='{$random}' caption='{$caption}' albumlink='{$albumlink}'
        time='{$time}' fadespeed='{$fadespeed}'></div>";
}

add_shortcode("googleslides", "googleslides_handler");

?>
