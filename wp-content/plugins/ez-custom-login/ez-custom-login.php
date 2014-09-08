<?php
/**
 * Plugin Name: EZ Custom Login
 * Plugin URI: http://www.simplesites4u.com
 * Description: Create stylish login and registration pages in seconds.
 * Version: 1.01
 * Author: Danny Jones
 * Author URI: http://www.simplesites4u.com
 *
 */

/* Set up the plugin. */
add_action( 'plugins_loaded', 'ez_custom_login_setup' );

function ez_custom_login_setup() {

	define( 'CUSTOM_LOGIN', 'ez-custom-login' );
	define( 'CUSTOM_LOGIN_SETTINGS', 'ez_custom_login_settings' );
	define( 'EZ_CUSTOM_LOGIN_DIR', plugin_dir_path( __FILE__ ) );
	define( 'CUSTOM_LOGIN_URL', plugin_dir_url( __FILE__ ) );
	define( 'CUSTOM_LOGIN_CSS', CUSTOM_LOGIN_URL . 'inc/css/' );
	define( 'CUSTOM_LOGIN_JS', CUSTOM_LOGIN_URL . 'inc/js/' );

	if ( is_admin() ) {
		require_once( EZ_CUSTOM_LOGIN_DIR . '/admin/admin.php' );
	}
	
	/* Filters */
	add_filter( 'login_headerurl', 'ez_custom_login_url' );
	add_filter( 'login_headertitle', 'ez_custom_login_title' );
	
	/* Load the login head */
	add_action( 'login_head', 'ez_custom_login' );
	add_action( 'login_head', 'ez_custom_login_html' );
	do_action( 'ez_custom_login_loaded' );
}

/* Custom Functions */
function ez_custom_login_url() {
	return get_bloginfo( 'siteurl' );
}

function ez_custom_login_title() {
	return get_bloginfo( 'description' );
}

function ez_custom_login_get_setting( $option = '' ) {
	global $ez_custom_login;
	if ( !$option )
		return false;
	if ( !isset( $ez_custom_login->settings ) )
		$ez_custom_login->settings = get_option( 'ez_custom_login_settings' );
	return $ez_custom_login->settings[$option];
}

/* WordPress 3.x check */
if ( !function_exists( 'is_version' ) ) {
	function is_version( $version = '3.0' ) {
		global $wp_version;		
		if ( version_compare( $wp_version, $version, '<' ) ) {
			return false;
		}
		return true;
	}
}

/* Add Styles */
function ez_custom_login() {
	global $ez_custom_login; $data = get_option('ez_login_options');	
	echo '<meta name="generator" content="EZ Custom Login" />' . "\n";	
	wp_print_scripts( array( 'jquery' ) ); 
	wp_register_style( 'ez-custom-login', CUSTOM_LOGIN_CSS . 'ez-custom-login.css.php', false, 1.0, 'screen' );	
	if ( $data['activate'] != false ) {		
		wp_print_styles( 'ez-custom-login' );		
	} 
}

/* Custom JS and CSS */
function ez_custom_login_html() {
	global $ez_custom_login; $data = get_option('ez_login_options'); ?>
<script type='text/javascript'>
//<![CDATA[
jQuery(document).ready(
	function($) {
	}
);
//]]>
</script>
<style type='text/css'>
<?php echo $data['custom_css']; ?>
</style>
<?php } ?>