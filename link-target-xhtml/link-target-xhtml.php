<?php
/*
Plugin Name: Link target XHTML
Description: Rewrite target=_blank in links.
Version: 1.0
Author: Martin Scharm
 */

function ext_styles ()
{
	echo "<script type=\"text/javascript\" src=\"".WP_PLUGIN_URL."/linktarget/s.js\" ></script>";
}

function extlinks ($content)
{
	return preg_replace ('/<a([^>]*)target="_blank"/i', '<a${1}rel="external"', $content);
}

add_action('wp_head', 'ext_styles');
add_filter('the_content', 'extlinks'); 

?>
