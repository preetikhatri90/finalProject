<?php 

get_header();




?>

<section class="imageSection">
  <img src="<?php echo get_template_directory_uri();?>/assest/img/contact/Rectangle 48.png" class="img-fluid" alt="">   
      <div class="line"></div>
        <div class="text">
            <h2 class=""><?php echo get_theme_mod('customTheme-imageSection-heading')?></h2>

            <p>
            <?php echo get_theme_mod('customTheme-imageSection-body')?></p>

        </div>


<div class="container-fluid">
    <?php
    if(have_posts()){

        while( have_posts() )
        
        {
            the_post();
            // the_content();
            get_template_part('template-parts/content', 'contactpage');
        }

    }
    ?>






<?php get_footer(); ?>