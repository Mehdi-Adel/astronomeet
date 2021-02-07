 <?php

global $meet_db_version;
$meet_db_version = 1.0;

function meet_install_table()
{
	global $wpdb;
	global $meet_db_version;

	$table_name_meet_install = $wpdb->prefix . 'entrants';

	$charset_collate = $wpdb->get_charset_collate();

	$sql_meet = "CREATE TABLE IF NOT EXISTS `$table_name_meet_install` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`entrant_id` bigint (20) UNSIGNED NOT NULL,
	`meet_id` bigint (20) UNSIGNED NOT NULL,
	`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` timestamp NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (entrant_id) 
	REFERENCES `wp_users` (ID),
	FOREIGN KEY (meet_id)
	REFERENCES `wp_posts` (ID)
	) $charset_collate;";

	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

	$wpdb->query($sql_meet);

	add_option('meet_db_version', $meet_db_version);

}


/*function meet_register_data()
{
	global $wpdb;

	$default_number = 1;

	$table_name = $wpdb->prefix . 'entrants';

	$wpdb->insert(
		$table_name,
		array(
			'entrant' => $default_number,
		)
	);

}*/

function remove_plugin_table()
 {
		global $wpdb;
		global $meet_db_version;

			$table_name_meet_install = $wpdb->prefix . 'entrants';
			$sql = "DROP TABLE IF EXISTS $table_name_meet_install;";
			$wpdb->query($sql);

		delete_option("$meet_db_version");

}


