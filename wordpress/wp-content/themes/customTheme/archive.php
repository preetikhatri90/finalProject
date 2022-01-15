



<?php get_header(); ?>



  <section class="rightimageSection">
      <img src="img/blog/blog-1.png" class="img-fluid" alt="">   
      <div class="line position-absolute "></div>
      <div class="text position-absolute">
      
         <h2>Vivamus vitae finibus dolor. Suspendisse finibus ante in sapien fermentum. 

         </h2>
         
            
      </div>
      <div class="infobox ">
        <div class="date mb-4">
          November 11, 2021
        </div>
        <p>
          Morbi pellentesque justo non magna iaculis efficitur in quis magna. Vivamus consectetur placerat iaculis. Aenean in orci et libero auctor elementum non in diam. Suspendisse vel urna luctus, tristique purus a, commodo metus. Nam commodo turpis eget magna placerat, quis molestie mauris volutpat
        </p>
        <button type="submit" class="btn  mt-3 text-dark"> Read More <span class="icon-arrow-right2"></span></button>  
         
      </div>
      </section>




<?php
    if(have_posts()){

        while( have_posts() )
        
        {
            the_post();
            // the_content();
            get_template_part('template-parts/content', 'archive');
        }

    }
    ?>
<?php get_footer(); ?> -->