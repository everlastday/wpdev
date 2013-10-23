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

  add_action( 'admin_menu', 'ch3hmi_hide_menu_item' );

  function ch3hmi_hide_menu_item() {
    //remove_menu_page( 'edit-comments.php' );

    remove_submenu_page( 'options-general.php',
    'options-permalink.php' );

  }