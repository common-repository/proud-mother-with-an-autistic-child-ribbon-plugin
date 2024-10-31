<?php
/*
Plugin Name: Mothers who have Children with Autism Ribbon
Plugin URI: http://scottkappler.com/wp-plugins-and-more
Description: When activated, this plugin will put a Mothers who have Children with Autism ribbon on the top right corner of your website with the words "I'm a proud mother of an Autistic child" that links to http://www.facebook.com/pages/Single-Mothers-who-have-Children-with-Autism/258728120832823.
Author: Scott Kappler
Version: 1.0
License: GPLv2
Author URI: http://scottkappler.com/wp-plugins-and-more
*/

function render_mothers_autism_ribbon() {
	$ribbon_url = plugins_url( 'mothers-autism-ribbon.png', __FILE__ );
	echo "<a target='_blank' class='mothers-autism-ribbon' href='http://www.facebook.com/pages/Single-Mothers-who-have-Children-with-Autism/258728120832823'><img src='{$ribbon_url}' alt='Autism Speaks' style='position: fixed; top: 0; right: 0; z-index: 100000; cursor: pointer;' /></a>";
}
add_action( 'wp_footer', 'render_mothers_autism_ribbon' );