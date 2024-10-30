<?php
/*
Plugin Name: CleanAdmin
Plugin URI: http://www.skimbu.it/projects/cleanadmin
Description: Many webdesigners uses WordPress, the Wordpress Admin Design isn't really nice and it's stressing! This theme clean up all admin design and makes your posts more relaxed.
Version: 0.2.0
Author: Alberto Ziveri-Skimbu.it
Author URI: http://www.skimbu.it
License: GPL2
*/

//Thanks to an anonymous user for the script :)
if (is_admin()) {
	wp_register_style('clean-admin', WP_PLUGIN_URL . '/cleanadmin/cleanadmin.css', array('wp-admin','thickbox','global','colors'), '0.2');
	wp_enqueue_style( 'clean-admin');
}
?>