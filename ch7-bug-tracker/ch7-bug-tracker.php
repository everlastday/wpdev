<?php
/*
Plugin Name: Chapter 7 – Bug Tracker
Plugin URI: http://google.com
Description: Bug Tracker
Version: 0.1
Author: WestSIDe
Author URI: http://google.com
License: GPLv2
*/

  register_activation_hook( __FILE__, 'ch7bt_activation' );

  function ch7bt_activation() {

    // Get access to global database access class
    global $wpdb;

    // Create table on main blog in network mode or single blog
    ch7bt_create_table( $wpdb->get_blog_prefix() );
  }