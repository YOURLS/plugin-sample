<?php
// No direct call.
if( !defined( 'YOURLS_UNINSTALL_PLUGIN' ) ) die();

/**
 * This is an optional file that will be executed when a user deactivates your plugin.
 *
 * Example of an uninstall procedure :
 *
 * - delete custom option :
 *      yourls_delete_option('joe_plugin');
 *
 * - delete custom table :
 *      $table  = 'JOE_CUSTOM_TABLE';
 *      $sql    = "DROP TABLE IF EXISTS :table";
 *      $binds  = array('table' => $table);
 *      $update = yourls_get_db()->fetchAffected($sql, $binds);
 *
 * - delete specific files,
 * - ping plugin's mothership to tell about uninstalling,
 * - etc.
 *
 */
