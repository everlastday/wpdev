  <?php
    /*
    Plugin Name: Chapter 2 – Object-Oriented – Private Item Text
    Plugin URI: http://google.com
    Description: Private Item Text
    Version: 0.3
    Author: WestSIDe
    Author URI: http://google.com
    License: GPLv2
    */

    class CH2_OO_Private_Item_Text {
      function __construct() {
        add_shortcode( 'private', array($this,'ch2pit_private_shortcode') );
        add_action( 'wp_enqueue_scripts', array($this, 'ch2pit_queue_stylesheet') );
      }

      function ch2pit_private_shortcode( $atts, $content = null ) {
        if ( is_user_logged_in() )
          return '<div class="private">' . $content . '</div>';
        else
          return '';
      }

      function ch2pit_queue_stylesheet() {
        wp_enqueue_style( 'privateshortcodestyle',
          plugins_url( 'stylesheet.css', __FILE__ ) );
      }
    }

    $my_ch2_oo_private_item_text = new CH2_OO_Private_Item_Text();


  ?>
