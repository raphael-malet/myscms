<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edutechstar
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <?php  wp_head() ; ?>
  </head>
  <body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'edutechstar' ); ?></a>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

    <!-- Start menu -->
    <section id="mu-menu">
    <nav class="main-navbar navbar navbar-expand-lg navbar-light">
      <div class="container">
        <div class="navbar-header">          
              <?php 
                    	$custom_logo_id = get_theme_mod( 'custom_logo' );
                    	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    	if ( has_custom_logo() ) { ?>
                    		<!-- Brand -->
                        	<?php the_custom_logo(); ?>	
		                <?php	
		                } 
		                if (display_header_text()==true){ ?>
                            <div>
	                        <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
	                            <span class="site-title"><?php bloginfo('name'); ?></span>
	                        </a>
	                        <p><span class="site-description"><?php  bloginfo('description'); ?></span></p></div>
                    	<?php 
                    	}
		                ?>       
        </div>
        <div class="collapse navbar-collapse my-lg-0" id="navbarNav">
                        <?php
                        wp_nav_menu( 
                            array(
                                'theme_location' => 'primary',
                                'container'  => '',
                                'menu_class' => 'navbar-nav navbar__nav  nav justify-content-end menuon',
                                'menu_id'        => 'primary-menu',
                            ) 
                        );
                        ?>
                    </div>                             
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
    <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); 
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      if ( has_custom_logo() ) { 
      ?>
          <div class="mobile-menu" data-type="logo" data-link="<?php echo esc_attr( home_url('/') ); ?>" data-logo="<?php echo esc_attr( $logo[0] ); ?>"> </div>
      <?php } else{ ?>
          <div class="mobile-menu" data-type="text" data-link="<?php echo esc_attr( home_url('/') ); ?>" data-logo="<?php bloginfo( 'name' ); ?>"> </div>
      <?php } ?>
  </section>
  <!-- End menu -->    