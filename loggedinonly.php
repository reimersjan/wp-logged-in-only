<?php
/*
Plugin Name: Logged-in-only
Plugin URI: https://github.com/reimersjan/wp-logged-in-only
Description: Lock down the whole site to prevent public access. Only logged-in users can view the site if this plugin is activated.
Author: Jan Reimers
Version: 1.0.2
Author URI: http://www.jan.rs
License: GPLv2
*/

function logged_in_only() {
	if ( ! is_user_logged_in() ) {
		auth_redirect();
	}
}
add_action( 'template_redirect', 'logged_in_only' );

/*
 * Reset the password reset url to wp default
 */
function logged_in_only_password_reset_url_reset() {
	// Unset the password reset url filter from WooCommerce	
	remove_filter( 'lostpassword_url', 'wc_lostpassword_url', 10 );
}
add_action( 'plugins_loaded', 'logged_in_only_password_reset_url_reset' );
