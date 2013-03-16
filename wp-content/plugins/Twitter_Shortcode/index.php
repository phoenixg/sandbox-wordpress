<?php
/*
Plugin Name: Twitter Shower
Plugin URI: net.tutplus.com
Description: Just aaa
Author: Phx
Author URI: http://www.ttt.com
Version: 1.0
*/

// [twitter1 username="test"]
add_shortcode( 'twitter1', function($attributes){
	if (!isset($attributes['username'])) $attributes['username'] = 'phoenixg';
	return '<a href="http://twitter.com/'.$attributes['username'].'">
		Follow me on Twitter!
	</a>';
} );


// [twitter2 username="test"] Follow me! [/twitter2]
/*
add_shortcode( 'twitter2', function($attributes, $content){
	if (!isset($attributes['username'])) $attributes['username'] = 'phoenixg';
	return '<a href="http://twitter.com/'.$attributes['username'].'">'.
		$content.'</a>';
} );
*/
add_shortcode( 'twitter2', function($attributes, $content){
	// 设置属性的默认值
	$attributes =  shortcode_atts( 
						array(
							'username' => 'phoenixg',
							'content' => !empty($content) ? $content : 'Follow me!'
						),$attributes
					);

	extract($attributes);

	return "<a href='http://twitter.com/{$username}'>{$content}</a>";
} );