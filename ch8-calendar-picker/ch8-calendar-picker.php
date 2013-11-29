  <?php
    /*
    Plugin Name: Chapter 8 – Calendar Picker.
    Plugin URI: http://google.com
    Description: Calendar Picker.
    Version: 0.1
    Author: WestSIDe
    Author URI: http://google.com
    License: GPLv2
    */
    add_action( 'admin_enqueue_scripts', 'ch8cp_admin_scripts' );


    function ch8cp_admin_scripts() {
      wp_enqueue_script( 'jquery' );
      wp_enqueue_script( 'jquery-ui-core' );
      wp_enqueue_script( 'jquery-ui-datepicker' );
      wp_enqueue_style( 'datepickercss', plugins_url( 'css/ui-lightness/jquery-ui-1.10.3.custom.css', __FILE__ ), array(), '1.10.3' );
      wp_enqueue_script( 'tiptipjs', plugins_url( 'tiptip/jquery.tipTip.js', __FILE__ ), array(), '1.3' );
      wp_enqueue_style( 'tiptip', plugins_url('tiptip/tipTip.css', __FILE__ ), array(), '1.3' );
    }

    add_action( 'add_meta_boxes', 'ch8cp_register_meta_box' );


    function ch8cp_register_meta_box() {
      add_meta_box( 'ch8cp_datepicker_box', 'Assign Date', 'ch8cp_date_meta_box', 'post', 'normal');
    }

    function ch8cp_date_meta_box( $post ) { ?>
      <input type="text" class="ch8cp_tooltip" id="ch8cp_date" name="ch8cp_date" title="Пожалуйста введите дату" />
      <!-- JavaScript function to display calendar button -->
      <!-- and associate date selection with field -->
      <script type='text/javascript'>
        jQuery( document ).ready( function() {
          jQuery( '#ch8cp_date' ).datepicker( { minDate: '+0',
            dateFormat: 'yy-mm-dd', showOn: 'both',
            constrainInput: true} );
            jQuery( '.ch8cp_tooltip' ).each( function() {
                jQuery( this ).tipTip();
              }
            );
        } );
      </script>
    <?php }