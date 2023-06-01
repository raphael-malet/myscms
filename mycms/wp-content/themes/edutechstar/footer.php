<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edutechstar
 */
?>

  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
          <?php if( is_active_sidebar( 'footer-widget-area-1') ) { ?>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
              <?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
              </div>
            </div>
            <?php } if( is_active_sidebar( 'footer-widget-area-2') ) { ?>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
              <?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
              </div>
            </div>
            <?php } if( is_active_sidebar( 'footer-widget-area-3') ) { ?>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
              <?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
              </div>
            </div>
            <?php } if( is_active_sidebar( 'footer-widget-area-4') ) { ?>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
              <?php dynamic_sidebar( 'footer-widget-area-4' ); ?>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
        <p><?php esc_html_e('&copy; 2022. All Rights Reserved','edutechstar'); ?></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
<?php wp_footer(); ?>
  </body>
</html>