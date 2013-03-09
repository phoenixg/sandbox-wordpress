<?php
/*
Plugin Name: JW Filter
Plugin URI: net.tutplus.com
Description: Just aaa
Author: Phx
Author URI: http://www.ttt.com
Version: 1.0
*/

add_filter( 'the_title', ucwords );

add_filter( 'the_content', function( $content ) {
		return $content . ' ' . time();
	} );



