<?php
/*
Plugin Name: Tiniest WP GET
Plugin URI: https://github.com/techjewel/tiniest-wp-get
Description: This is a tiniest plugin to show and hide contents based on url's GET Parameter
Author: Shahjahan Jewel
Version: 0.01
Author URI: http://hellojewel.net/
*/


// sample usage [url_get get="a" value="download"]Here is your Download Link[/url_get]
function my_custom_url_function($atts, $content = null) {
   extract(shortcode_atts(array(
      'get' => '',
      'value' => ''
   ), $atts));

   $url_value = $_GET[$get];

   if($url_value == $value)
   {
   		return do_shortcode($content);
   }
}
add_shortcode('url_get', 'my_custom_url_function');











