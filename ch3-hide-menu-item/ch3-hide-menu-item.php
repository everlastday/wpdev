<?php
  /*
  Plugin Name: Chapter 3 – Hide Menu Item
  Plugin URI:
  Description: Multi-Level menu
  Version: 1.0
  Author: WestSIDe
  Author URI: http://yandex.ru
  License: GPLv2
  */



  if ( is_admin() ) {
    require plugin_dir_path( __FILE__ ) . 'ch3-hide-menu-item-admin-functions.php';
  }