<?php
  /*
  Plugin Name: Chapter 10 – Hello World
  Plugin URI: http://google.com
  Description: Hello World
  Version: 0.1
  Author: WestSIDe
  Author URI: http://google.com
  License: GPLv2
  */

  register_activation_hook( __FILE__, 'ch10hw_set_default_options_array' );

  function ch10hw_set_default_options_array() {
    if ( false === get_option( 'ch10hw_options' ) ) {
      $new_options = array();
      $new_options['default_text'] = __( 'Hello World', 'ch10hw_hello_world' );
      add_option( 'ch10hw_options', $new_options );
    }
  }

?>
