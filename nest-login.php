<?php
/*
Plugin Name: Nest Login
Plugin URI: https://github.com/bigwing/nest-login/
Description: Simple styles for your WordPress login screen.
Author: Ronald Huereca, Roary Tubbs
Version: 1.0.0
Requires at least: 4.4
Author URI: https://bigwing.com
Contributors: ronalfy, roary86
Text Domain: nest-login
Domain Path: /languages
*/
class Nest_Login {
	public function __construct() {
		
	}
	public function init() {
		add_action( 'login_enqueue_scripts', array( $this, 'load_css' ) );
	}
	public function load_css() {
		wp_enqueue_style( 'nest-login', plugins_url( 'login.css', __FILE__ ) );
	}
}
add_action( 'plugins_loaded', function() {
	$login = new Nest_Login();
	$login->init();
} );