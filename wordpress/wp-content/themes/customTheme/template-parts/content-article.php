
 
<div class="firstSec mb-5">
    <section class="imgSection">
    <?php 
       
       echo get_the_post_thumbnail();
        ?>
        <div class="line"></div>
        <div class="text mb-5">
     
           <h4 class="mb-5"><?php the_excerpt(); ?></h4>
              
    </section>

       <section class="textblock mt-5">
            <div class="textblock-one">
              <div class="lineone"></div>
              <?php
         the_content();
               ?>
                </div>


</section> 


 
 



</section>




