<?php
/*
Plugin Name: Logged-in-only
Plugin URI: https://github.com/reimersjan/wp-logged-in-only
Description: Lock down the whole WordPress site to prevent public access. Only logged-in users can view the site or the content of the REST API if this plugin is activated.
Author: Drivingralle
Version: 2.1.3
Author URI: https://www.drivingralle.de
License: GPLv2
*/

/**
 *  Make the frontend private
 */
function logged_in_only_frontend() {
	if ( ! is_user_logged_in() ) {
		auth_redirect();
	}
}
add_action( 'template_redirect', 'logged_in_only_frontend' );

/**
 * Make the REST API private
 */
function logged_in_only_rest_api( $result ) {

	if ( ! empty( $result ) ) {
		return $result;
	}

	if ( ! is_user_logged_in() ) {
		return new WP_Error( 'rest_not_logged_in', 'API Requests are only supported for authenticated requests.', array( 'status' => 401, ) );
	}

	return $result;
}
add_filter( 'rest_authentication_errors', 'logged_in_only_rest_api' );

/**
 * Remove the filter by WooCommerce to point users to the my-account page to reset password.
 */
function logged_in_only_remove_woocommerce_password_reset_link_change() {
	remove_filter( 'lostpassword_url', 'wc_lostpassword_url', 10, 1 );
}
add_action( 'plugins_loaded', 'logged_in_only_remove_woocommerce_password_reset_link_change' );
