<?php
  /*
  Plugin Name: Chapter 3 – Individual Options
  Plugin URI: http://google.com
  Description: Private Item Text
  Version: 0.3
  Author: WestSIDe
  Author URI: http://google.com
  License: GPLv2
  */


  register_activation_hook( __FILE__, 'ch3io_set_default_options' );


  function ch3io_set_default_options() {
    if ( get_option( 'ch3io_version' ) === false ) {
      add_option( 'ch3io_ga_account_name', 'UA-000000-0' );
      add_option( 'ch3io_track_outgoing_links', 'false' );
      add_option( 'ch3io_version', '1.0' );
    } elseif ( get_option( 'ch3io_version' ) < 1.1 ) {
      add_option( 'ch3io_track_outgoing_links', 'false' );
      update_option( 'ch3io_version', '1.1' );
    }
  }

  // register_deactivation_hook - при деактивації спрацьовує функція

?>