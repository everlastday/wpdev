<?php
  /*
  Plugin Name: Chapter 9 – Book Review Dashboard Widget
  Plugin URI: http://google.com
  Description: Book Review Dashboard Widget
  Version: 0.1
  Author: WestSIDe
  Author URI: http://google.com
  License: GPLv2
  */

  add_action( 'wp_dashboard_setup', 'ch9brdw_add_dashboard_widget' );

  function ch9brdw_add_dashboard_widget() {
    wp_add_dashboard_widget( 'book_reviews_dashboard_widget', 'Book Reviews', 'ch9brdw_dashboard_widget' );
  }

  function ch9brdw_dashboard_widget() {
    $book_review_count = wp_count_posts( 'book_reviews' );
    ?>
    <a href="<?php echo add_query_arg( array( 'post_status' => 'publish', 'post_type' => 'book_reviews' ),
      admin_url( 'edit.php' ) ); ?>">
      <strong>
        <?php echo $book_review_count->publish; ?>
      </strong> Published
    </a>
    <br />
    <a href="<?php echo add_query_arg( array(
        'post_status' => 'draft',
        'post_type' => 'book_reviews' ),
      admin_url( 'edit.php' ) ); ?>">
      <strong>
        <?php echo $book_review_count->draft; ?>
      </strong> Draft
    </a>
  <?php }

?>
