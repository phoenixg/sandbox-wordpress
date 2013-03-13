<?php
/*
Plugin Name: JW Options
Plugin URI: net.tutplus.com
Description: Just aaa
Author: Phx
Author URI: http://www.ttt.com
Version: 1.0
*/
add_action('admin_menu',function(){
	add_options_page( '主题选项', '主题选项', 'administrator', __FILE__, function(){
		?>
		<h2>Hello</h2>
		<?php
	} );
});







