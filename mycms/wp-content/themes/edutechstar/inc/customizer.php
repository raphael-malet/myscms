<?php 
/**
 * Alturas Theme Customizer
 *
 * @package Alturas
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function edutechstar_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'edutechstar_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'edutechstar_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'edutechstar_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function edutechstar_customize_partial_blogname() {
	bloginfo( 'name' );
}
/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function edutechstar_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function edutechstar_customize_preview_js() {
	wp_enqueue_script( 'edutechstar-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '', true );
}
add_action( 'customize_preview_init', 'edutechstar_customize_preview_js' );


/***
    *** Register Customizer Add Panel Function Code start Here
***/
function edutechstar_Customizer_Add_Panel_Function( $wp_customize ) {
	// Create Custom Panel for Home Page.
       $wp_customize->add_panel('edutechstar_Panel_Function' ,array(
              'theme_support' => '',
              'title'  => __('Edutechstar Theme Options','edutechstar') ,
              'priority' => 1,
       ));    
}
     add_action( 'customize_register', 'edutechstar_Customizer_Add_Panel_Function' );

/***
    *** Register Customizer Home Banner Section Code start Here
***/
class edutechstar_Banner_Customizer {

       public static function edutechstar__Banner_Section( $wp_customize ) {
 		// Add Home Banner Section Add Section for home page.
               $wp_customize->add_section( 'edutechstar_For_Home_Page_Banner_Section' , array(
			'title'    => __(' Home Banner Section ','edutechstar'),
			'panel'    => 'edutechstar_Panel_Function',
			'priority' => 1,
		) );

		//  ============================================================
	    //       Home Page Banner Section Title          
	    //  ============================================================
           $wp_customize->add_setting( 'edutechstar_Banner_Section_Title_Name', array(
              'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
              
      ) );

      // Add Banner Title Add control
      $wp_customize->add_control( new WP_Customize_Control(
          $wp_customize,
             'edutechstar_Home_Banner_Section_Title',
                 array(
                     'label'    => __( ' Banner Title ','edutechstar' ),
                     'section'  => 'edutechstar_For_Home_Page_Banner_Section',
                     'settings' => 'edutechstar_Banner_Section_Title_Name',
                     'type'     => 'text',
                     'priority' => 4,
                 )
          )
      );
              //  ============================================================
	    //       Home Page Banner Section Content        
	    //  ============================================================
           $wp_customize->add_setting( 'edutechstar_Banner_Section_Content', array(
              'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
              
       ) );

       // Add Banner Content Add control
       $wp_customize->add_control( new WP_Customize_Control(
           $wp_customize,
              'edutechstar_Home_Banner_Section_Content',
                  array(
                      'label'    => __( ' Banner Content ','edutechstar' ),
                      'section'  => 'edutechstar_For_Home_Page_Banner_Section',
                      'settings' => 'edutechstar_Banner_Section_Content',
                      'type'     => 'textarea',
                      'priority' => 3,
                  )
           )
       );
		//  ============================================================
	    //       Home Page Banner Section Button Text         
	    //  ============================================================
           $wp_customize->add_setting( 'edutechstar_Banner_Section_Button_Text', array(
              'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
              
      ) );

      // Button Text Add control
      $wp_customize->add_control( new WP_Customize_Control(
          $wp_customize,
             'edutechstar_Home_Banner_Section_Button_Text',
                 array(
                     'label'    => __( ' Button Text ','edutechstar' ),
                     'section'  => 'edutechstar_For_Home_Page_Banner_Section',
                     'settings' => 'edutechstar_Banner_Section_Button_Text',
                     'type'     => 'text',
                     'priority' => 4,
                 )
          )
      );
		//  ============================================================
	    //       Home Page Banner Section Button Url Path          
	    //  ============================================================
           $wp_customize->add_setting( 'edutechstar_Banner_Btn_URl_Path', array(
              'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
              
      ) );

      // Add Button Url Path Add control
      $wp_customize->add_control( new WP_Customize_Control(
          $wp_customize,
             'edutechstar_Custom_Button_URl_Path',
                 array(
                     'label'    => __( ' Button Url ','edutechstar' ),
                     'section'  => 'edutechstar_For_Home_Page_Banner_Section',
                     'settings' => 'edutechstar_Banner_Btn_URl_Path',
                     'type'     => 'text',
                     'priority' => 5,
                 )
          )
      );

		//  ============================================================
	    //       Home Page Banner Section Image Upload         
	    //  ============================================================
	    $wp_customize->add_setting( 'edutechstar_Banner_Section_Image_Upload', array( 'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
	    )); 
	        	   
	    $wp_customize->add_control( new WP_Customize_Image_Control( 
	    	$wp_customize, 'edutechstar_Home_Banner_Section_Image_Upload_Id', array(
	        'label'    => ' Banner Image ',
	        'priority' => 1,
	        'section'  => 'edutechstar_For_Home_Page_Banner_Section',
	        'settings' => 'edutechstar_Banner_Section_Image_Upload',
	        'button_labels' => array(
	                    // All These labels are optional
	                    'select' => __( 'Select Image','edutechstar' ),
	                    'remove' => __( 'Remove Image','edutechstar' ),
	                    'change' => __( 'Change Image','edutechstar' )
	                    )
	    )));



	    // Sanitize Text Function For Home Banner
           function Home_Banner_Section_Sanitize_Text_Function( $text ) {
              return sanitize_text_field( $text );
          }

       }
}
add_action( 'customize_register', array('edutechstar_Banner_Customizer', 'edutechstar__Banner_Section') );


/***
    *** Register Customizer Home Blog Section Code start Here
***/
class edutechstar_Blog_Customizer {

    public static function edutechstar__Blog_Section( $wp_customize ) {
      // Add Home Banner Section Add Section for home page.
            $wp_customize->add_section( 'edutechstar_For_Home_Page_Blog_Section' , array(
         'title'    => __('Blog Section ','edutechstar'),
         'panel'    => 'edutechstar_Panel_Function',
         'priority' => 1,
     ) );

     //  ============================================================
     //       Home Page Banner Section Title          
     //  ============================================================
        $wp_customize->add_setting( 'edutechstar_blog_Section_Title_Name', array(
           'sanitize_callback' => 'Home_Blog_Section_Sanitize_Text_Function',
           
   ) );

   // Add Banner Title Add control
   $wp_customize->add_control( new WP_Customize_Control(
       $wp_customize,
          'edutechstar_Home_Blog_Section_Title',
              array(
                  'label'    => __( ' Blog Title ','edutechstar' ),
                  'section'  => 'edutechstar_For_Home_Page_Blog_Section',
                  'settings' => 'edutechstar_blog_Section_Title_Name',
                  'type'     => 'text',
                  'priority' => 4,
              )
       )
   );
           //  ============================================================
     //       Home Page Banner Section Content        
     //  ============================================================
        $wp_customize->add_setting( 'edutechstar_blog_Section_Subtitle', array(
           'sanitize_callback' => 'Home_Blog_Section_Sanitize_Text_Function',
           
    ) );

    // Add Banner Content Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
           'edutechstar_Home_Blog_Section_Content',
               array(
                   'label'    => __( ' Blog Subtitle ','edutechstar' ),
                   'section'  => 'edutechstar_For_Home_Page_Blog_Section',
                   'settings' => 'edutechstar_blog_Section_Subtitle',
                   'type'     => 'textarea',
                   'priority' => 3,
               )
        )
    );
     //  ============================================================
     //       Home Page Banner Section Button Text         
     //  ============================================================
        $wp_customize->add_setting( 'edutechstar_Banner_Section_Button_Text', array(
           'sanitize_callback' => 'Home_Blog_Section_Sanitize_Text_Function',
           
   ) );

   // Button Text Add control
   $wp_customize->add_control( new WP_Customize_Control(
       $wp_customize,
          'edutechstar_Home_Banner_Section_Button_Text',
              array(
                  'label'    => __( ' Button Text ','edutechstar' ),
                  'section'  => 'edutechstar_For_Home_Page_Banner_Section',
                  'settings' => 'edutechstar_Banner_Section_Button_Text',
                  'type'     => 'text',
                  'priority' => 4,
              )
       )
   );
     //  ============================================================
     //       Home Page Banner Section Button Url Path          
     //  ============================================================
        $wp_customize->add_setting( 'edutechstar_Banner_Btn_URl_Path', array(
           'sanitize_callback' => 'Home_Blog_Section_Sanitize_Text_Function',
           
   ) );

   // Add Button Url Path Add control
   $wp_customize->add_control( new WP_Customize_Control(
       $wp_customize,
          'edutechstar_Custom_Button_URl_Path',
              array(
                  'label'    => __( ' Button Url ','edutechstar' ),
                  'section'  => 'edutechstar_For_Home_Page_Banner_Section',
                  'settings' => 'edutechstar_Banner_Btn_URl_Path',
                  'type'     => 'text',
                  'priority' => 5,
              )
       )
   );

     //  ============================================================
     //       Home Page Banner Section Image Upload         
     //  ============================================================
     $wp_customize->add_setting( 'edutechstar_Banner_Section_Image_Upload', array( 'sanitize_callback' => 'Home_Blog_Section_Sanitize_Text_Function',
     )); 
                
     $wp_customize->add_control( new WP_Customize_Image_Control( 
         $wp_customize, 'edutechstar_Home_Banner_Section_Image_Upload_Id', array(
         'label'    => ' Banner Image ',
         'priority' => 1,
         'section'  => 'edutechstar_For_Home_Page_Banner_Section',
         'settings' => 'edutechstar_Banner_Section_Image_Upload',
         'button_labels' => array(
                     // All These labels are optional
                     'select' => __( 'Select Image','edutechstar' ),
                     'remove' => __( 'Remove Image','edutechstar' ),
                     'change' => __( 'Change Image','edutechstar' )
                     )
     )));

     // Sanitize Text Function For Home Banner
        function Home_Blog_Section_Sanitize_Text_Function( $text ) {
           return sanitize_text_field( $text );
       }
    }
}
add_action( 'customize_register', array('edutechstar_Blog_Customizer', 'edutechstar__Blog_Section') );