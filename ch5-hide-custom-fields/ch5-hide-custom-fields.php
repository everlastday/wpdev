<?php
  /*
  Plugin Name: Chapter 5 – Hide Custom Fields
  Plugin URI: http://google.com
  Description: Chapter 5 – Hide Custom Fields
  Version: 0.1
  Author: WestSIDe
  Author URI: http://google.com
  License: GPLv2
  */


  add_action( 'add_meta_boxes', 'ch5_hcf_remove_custom_fields_metabox' );

  function ch5_hcf_remove_custom_fields_metabox() {
    remove_meta_box( 'postcustom', 'post', 'normal' );
    remove_meta_box( 'postcustom', 'page', 'normal' );
  }