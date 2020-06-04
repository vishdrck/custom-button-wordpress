<?php

/**
 * Fired during plugin activation
 *
 * @link       #
 * @since      1.0.0
 *
 * @package    Custom_Buttons_Wordpress
 * @subpackage Custom_Buttons_Wordpress/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Custom_Buttons_Wordpress
 * @subpackage Custom_Buttons_Wordpress/includes
 * @author     Vishwajith Weerasinghe <vish.drck@gmail.com>
 */
class VS_Custom_Buttons_Wordpress_Activator
{

	/**
	 * 
	 * Fired during plugin activation.
	 *
	 * Run initial functions during plugin activation.
	 *
	 * @since    1.0.0
	 */
	public static function activate()
	{
		ob_start();
		global $wpdb;
		$plugin_db_version = '1.0';
		$table_name = $wpdb->prefix . "vs_custom_buttons";
		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE $table_name (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			default_link varchar(255) DEFAULT '#' NOT NULL,
			default_style varchar(255) DEFAULT 'primary' NOT NULL,
			UNIQUE KEY id (id)
		) $charset_collate;";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
		// add_option('vs_custom_buttons_db_version', $plugin_db_version);
		trigger_error(ob_get_contents(), E_USER_ERROR);
	}

	/**
	 * Fired during plugin activation.
	 *
	 * Creating custom database table for the plugin. Only fires when plugin activation.
	 *
	 * @since    1.0.0
	 */
	static function create_database()
	{
	}
}
