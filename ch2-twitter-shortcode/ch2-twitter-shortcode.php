<?php
  /*
  Plugin Name: ch2-twitter-shortcode
  Plugin URI: http://google.com
  Description: Learn about shortcodes
  Version: 0.1
  Author: WestSIDe
  Author URI: http://google.com
  License: GPLv2
  */


  add_shortcode( 'tf', 'ch2ts_twitter_feed_shortcode' );

  function ch2ts_twitter_feed_shortcode( $atts ) {
    $output = '<a href="http://twitter.com/ylefebvre">Twitter Feed</a>';
    return $output;
  }