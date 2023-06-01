<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Edutechstar
 */

get_header();
?>
<section class="page-404">
   <div class="content-404">
      <div class="container">
         <div class="row">
            <div class="page-404-content">
            <h2><?php esc_html_e('OOPS ','edutechstar');?><i class="fa fa-frown-o" aria-hidden="true"></i></h2>
            <h1><?php esc_html_e('404','edutechstar'); ?></h1>
            <h3><?php esc_html_e('Page Not Found !','edutechstar'); ?></h3>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-arrow-left"></i><?php  echo esc_html(get_theme_mod( "edutechstar_Setting_For_error_Page_Section_Button_Label"," Back To Home" )); ?></a>
         </div>
      </div>
   </div>
</section>