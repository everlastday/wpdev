<?php
  /*
  Plugin Name: Chapter 2 – YouTube Embed
  Plugin URI: http://google.com
  Description: YouTube Embed
  Version: 0.2
  Author: WestSIDe
  Author URI: http://google.com
  License: GPLv2
  */


  add_shortcode( 'youtubevid', 'ch2ye_youtube_embed_shortcode' );

  function ch2ye_youtube_embed_shortcode ( $atts ) {
    extract( shortcode_atts(
      array(
      'id' => ''
      ), $atts ) );
    $output = '<iframe width="560" height="315"
src="http://www.youtube.com/embed/' . $id . '"
frameborder="0" allowfullscreen></iframe>';

    return $output;
  }

?>