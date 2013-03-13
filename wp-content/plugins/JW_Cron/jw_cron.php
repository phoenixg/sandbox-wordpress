<?php
/*
Plugin Name: JW Cron
Plugin URI: net.tutplus.com
Description: Just aaa
Author: Phx
Author URI: http://www.ttt.com
Version: 1.0
*/

/* 这个好像不能用！ */

add_action( 'init', function(){
	$time = wp_next_scheduled('jw_cron_hook');
	wp_unschedule_event($time, 'jw_cron_hook');

	if (!wp_next_scheduled( 'jw_cron_hook' )) {
		wp_schedule_event(time(), 'two-minutes', 'jw_cron_hook');
	}
} );

add_action( 'jw_cron_hook', function(){
	$str = time();
	wp_mail('test@test.com', '邮件主题', "邮件内容，发送时间：$str");
} );

add_filter('cron_schedules', function($schedules){
	$schedules['two-minutes'] = array(
		'interval' => 120, 
		'display'  => '每两分钟'
	);
	return $schedules;
});




