<?php 

get_header();




?>

<section class="imageSection">
  <img src="<?php echo get_template_directory_uri();?>/assest/img/contact/Rectangle 48.png" class="img-fluid" alt="">   
      <div class="line"></div>
        <div class="text">
            <h1 class="">Contact us</h1>
            <p>
                Ut posuere ullamcorper euismod. Donec a justo pulvinar diam dictum lobortis vulputate non nisi. Vestibulum pellentesque eget lorem ultrices lobortis.
            </p>

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