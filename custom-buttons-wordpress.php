<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              #
 * @since             1.0.0
 * @package           Custom_Buttons_Wordpress
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Buttons Wordpress
 * Plugin URI:        #
 * Description:       Custom Button for Wordpress - support for custom buttons. Use [vs-btn] shortcode.
 * Version:           1.0.0
 * Author:            Vishwajith Weerasinghe
 * Author URI:        #
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       custom-buttons-wordpress
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CUSTOM_BUTTONS_WORDPRESS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-custom-buttons-wordpress-activator.php
 */
function activate_custom_buttons_wordpress() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-buttons-wordpress-activator.php';
	Custom_Buttons_Wordpress_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-custom-buttons-wordpress-deactivator.php
 */
function deactivate_custom_buttons_wordpress() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-buttons-wordpress-deactivator.php';
	Custom_Buttons_Wordpress_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_custom_buttons_wordpress' );
register_deactivation_hook( __FILE__, 'deactivate_custom_buttons_wordpress' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-custom-buttons-wordpress.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_custom_buttons_wordpress() {

	$plugin = new Custom_Buttons_Wordpress();
	$plugin->run();

}
run_custom_buttons_wordpress();
