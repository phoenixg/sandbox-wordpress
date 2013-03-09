<?php
/**
 * @package phx
 * @version 0.1
 */
/*
Plugin Name: Phx
Plugin URI: http://domain.com
Description: 这就是一个测试的插件而已
Author: phx
Version: 0.1
Author URI: http://domain.com
*/

function hello_dolly() {
	echo "<p id=''>aaa</p>";
}

add_action( 'admin_notices', 'hello_dolly' );

