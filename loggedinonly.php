<?php
/*
Plugin Name: Logged-in-only
Plugin URI: http://www.janreimers.net
Description: Lock down the whole site to prevent public access. Only logged-in users can view the site if this plugin is activated.
Author: Jan Reimers
Version: 1.0
Author URI: http://www.janreimers.net
License: GPL2
*/

function logged_in_only() {
    if ( !is_user_logged_in() ) {
        auth_redirect();
    }
}
add_action ('template_redirect', 'logged_in_only');
?>
