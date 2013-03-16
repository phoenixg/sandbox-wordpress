<?php
/*
Plugin Name: JW Options
Plugin URI: net.tutplus.com
Description: Just aaa
Author: Phx
Author URI: http://www.ttt.com
Version: 1.0
*/

// 选项：http://localhost/sandbox-wordpress/wp-admin/options.php

class JW_Options {
	public $options;

	public function __construct()
	{
		delete_option( 'jw_plugin_options' );
		$this->options = get_option('jw_plugin_options');
		$this->register_settings_and_fields();
	}

	public function add_menu_page()
	{
		add_options_page( '主题选项', '主题选项', 'administrator', __FILE__, array('JW_Options','display_options_page'));
	}

	public function display_options_page()
	{
		?>
		<div class="wrap">
			<?php screen_icon();?>
			<h2>我的主题选项</h2>
			<form method="post" action="options.php" enctype="multipart/form-data">
				<?php settings_fields('jw_plugin_options');?>
				<?php do_settings_sections(__FILE__);?>

				<p class="submit">
					<input name="submit" type="submit" class="button-primary" value="Save Settings" />
				</p>
			</form>
		</div>
		<?php
	}

	public function register_settings_and_fields()
	{
		register_setting('jw_plugin_options', 'jw_plugin_options', array($this, 'jw_validate_settings')); // 3rd pram = optional cb
		add_settings_section( 'jw_main_section', 'Main Settings', array($this, 'jw_main_section_cb'), __FILE__ ); // id, title of section, cb, ...
		add_settings_field( 'jw_banner_heading', 'Banner Heading:', array($this, 'jw_banner_heading_setting'), __FILE__, 'jw_main_section' );
		add_settings_field( 'jw_logo', 'Your Logo:', array($this, 'jw_logo_setting'), __FILE__, 'jw_main_section' );

	}

	public function jw_main_section_cb()
	{
		// optional

	}

	public function jw_validate_settings($plugin_options)
	{	
		// Is the file an images?
		if(!empty($_FILES['jw_logo_upload']['tmp_name'])){
			$override = array('test_form' => false);
			$file = wp_handle_upload( $_FILES['jw_logo_upload'], $override );
			$plugin_options['jw_logo'] = $file['url'];
		} else {
			$plugin_options['jw_logo'] = $this->options['jw_logo'];
		}
		return $plugin_options;
	}


	/**
	 * Inputs
	 */
	// Banner Heading
	public function jw_banner_heading_setting()
	{

		echo "<input name='jw_plugin_options[jw_banner_heading]' type='text' value='{$this->options['jw_banner_heading']}' />";
	}
	// Logo 
	public function jw_logo_setting()
	{
		echo '<input name="jw_logo_upload" type="file" /><br /><br />';
		if (isset($this->options['jw_logo'])) {
			echo "<img src='{$this->options['jw_logo']}' alt='' />";
		}
	}
}

add_action('admin_menu',function(){
	JW_Options::add_menu_page();
});


add_action('admin_init', function(){
	new JW_Options();
});




