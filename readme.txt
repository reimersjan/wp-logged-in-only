=== Logged-in-only ===
Contributors: janreim, drivingralle
Tags: authentication, login, user, simple, REST API
Requires at least: 3.0.1
Requires PHP: 5.3
Tested up to: 6.6
Stable tag: 2.1.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A Plugin to lock down the whole site to prevent public access.

== Description ==

Only logged-in users can view the frontend, backend or content of the REST API if this plugin is activated. The password reset process on wp-login keeps on working.

* No options/settings
* No by-pass

== Compatibility ==
* WooCommerce

== Usage as MU-Plugin ==
This plugin is very simple and can also be used as a must-use plugin. That way no admin of a website can deactivate the plugin, making sure the requirement of just authenticated  users is ensured.
! No automatic updates are made for mu plugins

== Installation ==

1. Upload `wp-logged-in-only` folder to the `wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Your site is locked down to the public.

== Changelog ==

= 2.1.3 - 2024-09-04 =
* Tested up to WordPress 6.6.

= 2.1.2 - 2024-05-02 =
* Reduce tag count to comply with repo rules

= 2.1.1 - 2024-05-02 =
* Tested up to WordPress 6.5

= 2.1.0 - 2019-11-06 =
* Make password reset link on login work if WooCommerce is installed
* Tested up to WordPress 5.3

= 2.0.0 - 2017-11-28 =
* Also lock down the REST API

= 1.0.3 - 2017-11-17 =
* Plugin contributor @Drivingralle continues the development as new lead
* Tested for WordPress 4.9

= 1.0.2 =
* Codestyling by drivingralle

= 1.0.1 =
* initial commit
