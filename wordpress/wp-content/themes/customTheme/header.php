
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
    
  <header>
       
       <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end">
         <div class="container-fluid">
           <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="navbar-toggler-icon"></span>
               
           </button>
           

             <a href="#" class="navbar-brand justify-content-start"> 
               <?php

               if(function_exists('the_custom_logo')){
                 $custom_logo_id = get_theme_mod('custom_logo');
                 $logo = wp_get_attachment_image_src( $custom_logo_id);
               }
               ?>
                <img src="<?php echo $logo[0] ?>" class="rounded float-left-size" alt="logo image"></a>
             <div class="info">
                             <button>Join US Now </button>
                           </div>
             <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                
                 <div class="navbar-nav text-dark text-decoration-none ">                   
                     
                     <?php
                     wp_nav_menu([
                       'menu' => 'primary',
                       'menu_class' =>'nav',
                'theme_location' => 'primary', 
                 'container'=>false
                

                ]); ?>
                </div>
         </div>
     </nav>
   
   </header>