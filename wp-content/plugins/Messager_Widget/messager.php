<?php
error_reporting(E_ALL);
/*
Plugin Name: Messager Widget
Plugin URI: net.tutplus.com
Description: Just Messager Widget
Author: Phx
Author URI: http://www.ttt.com
Version: 1.0
*/

class Messager extends WP_Widget{
	function __construct()
	{
		$params = array(
			'description' 	=> '显示消息',
			'name' 			=> 'Messager'
		);

		parent::__construct('Messager', '', $params);
	}

	// widget 表单
	public function form($instance)
	{
		// print_r($instance);
		// $instance 就是表单里输入的内容
		extract($instance);
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title');?>">标题：</label>
			<input 
				class="widefat" 
				id="<?php echo $this->get_field_id('title');?>" 
				name="<?php echo $this->get_field_name('title');?>"
				value="<?php if( isset($title)) echo esc_attr( $title );?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('description');?>">描述：</label>
			<textarea 
				class="widefat" 
				id="<?php echo $this->get_field_id('description');?>" 
				name="<?php echo $this->get_field_name('description');?>"><?php if( isset($description)) echo esc_attr( $description );?></textarea>
		</p>
		<?php
	}


	public function widget($args, $instance)
	{
		extract($args);
		extract($instance);

		$title = apply_filters( 'widget_title', $title );
		$description = apply_filters( 'widget_description', $description );

		if (empty($title)) $title = '我的默认标题';

		echo $before_widget;
			echo $before_title . $title . $after_title;
			echo '<p>'.$description.'</p>';
		echo $after_widget;
	}



}

add_action( 'widgets_init', function(){
	register_widget('Messager');
} );









