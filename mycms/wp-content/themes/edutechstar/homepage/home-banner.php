<main class="main-div home-slider">
   <div class="slider-bg">
      <div class="hero-slider-content">
         <div class="container">
            <div class="row">                
               <div class="col-lg-6 col-md-12 col-sm-12">
                   <div class="hero__content p-relative z-index-1">
                     <h3 class="hero__title"><?php echo esc_html(get_theme_mod("edutechstar_Banner_Section_Title_Name" , "We Will Help You To Learn"));?></h3>
                        <p ><?php echo esc_html(get_theme_mod("edutechstar_Banner_Section_Content" ," Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolor.Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem."));?></p>
                          <a href="<?php echo esc_html(get_theme_mod("edutechstar_Banner_Btn_URl_Path" , "#"));?>" class="button-86">  <?php  echo esc_html(get_theme_mod("edutechstar_Banner_Section_Button_Text" ,"Learn More"));?></a>
                            </div>
                             </div>
                           <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="banner-img">
                     <img src="<?php if (get_theme_mod( "edutechstar_Banner_Section_Image_Upload" )) { echo esc_url(get_theme_mod( "edutechstar_Banner_Section_Image_Upload" )); } else{ echo esc_url(get_template_directory_uri(). '/assets/img/banner.png'); } ?>" alt="img" >
                  </div>
               </div>                                                          
         </div>
      </div>
   </div>
</main>