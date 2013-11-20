  <?php
    /*
    Plugin Name: Chapter 5 – Post Source Link
    Plugin URI: http://google.com
    Description: Book Reviews
    Version: 0.1
    Author: WestSIDe
    Author URI: http://google.com
    License: GPLv2
    */

    add_action( 'add_meta_boxes', 'ch5_psl_register_meta_box' );


    function ch5_psl_register_meta_box() {
      add_meta_box( 'ch5_psl_source_meta_box', 'Post/Page Source', 'ch5_psl_source_meta_box', 'post', 'normal');
      add_meta_box( 'ch5_psl_source_meta_box', 'Post/Page Source', 'ch5_psl_source_meta_box', 'page', 'normal');
    }

    function ch5_psl_source_meta_box( $post ) {
      // Retrieve current source name and address based on post ID
      $post_source_name = esc_html( get_post_meta( $post->ID, 'post_source_name', true ) );
      $post_source_address = esc_html( get_post_meta( $post->ID,  'post_source_address', true ) );
      ?>
      <!-- Display fields to enter source name and address -->
      <table>
        <tr>
          <td style="width: 100px">Source Name</td>
          <td>
            <input type="text" size="40"
              name="post_source_name" value="<?php echo $post_source_name; ?>" />
          </td>
        </tr>
        <tr>
          <td>Source Address</td>
          <td>
            <input type="text" size="40"
              name="post_source_address" value="<?php echo $post_source_address; ?>" />
          </td>
        </tr>
      </table>
    <?php }
    add_action( 'save_post', 'ch5_psl_save_source_data', 10, 2 );

    function ch5_psl_save_source_data( $post_id = false, $post = false ) {
        // Check post type for posts or pages
      if ( $post->post_type == 'post' ||
        $post->post_type == 'page' ) {
        // Store data in post meta table if present in post data
        if ( !empty( $_POST['post_source_name'] ) )
          update_post_meta( $post_id, 'post_source_name',
            $_POST['post_source_name'] );
        if ( !empty( $_POST['post_source_address'] ) )
          update_post_meta( $post_id, 'post_source_address',
            $_POST['post_source_address'] );
      }
    }