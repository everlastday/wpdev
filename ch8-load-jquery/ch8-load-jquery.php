  <?php
    /*
    Plugin Name: Chapter 8 – Load jQuery
    Plugin URI: http://google.com
    Description: Load jQuery
    Version: 0.1
    Author: WestSIDe
    Author URI: http://google.com
    License: GPLv2
    */


    add_action( 'wp_enqueue_scripts', 'ch8lj_front_facing_pages' );

    function ch8lj_front_facing_pages() {
      wp_enqueue_script( 'jquery' );
    }



  ?>