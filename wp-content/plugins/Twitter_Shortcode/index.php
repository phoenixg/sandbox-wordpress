<?php
/*
Plugin Name: Twitter Shower
Plugin URI: net.tutplus.com
Description: Just aaa
Author: Phx
Author URI: http://www.ttt.com
Version: 1.0
*/

// [twitter username="test"]
add_shortcode( 'twitter', function($attributes){
	if (!isset($attributes['username'])) $attributes['username'] = 'phoenixg';
	return '<a href="http://twitter.com/'.$attributes['username'].'">
		Follow me on Twitter!
	</a>';
} );
