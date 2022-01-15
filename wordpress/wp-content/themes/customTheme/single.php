<?php 

get_header();

?>


<div class="container-fluid">
    <?php
    if(have_posts()){

        while( have_posts() )
        
        {
            the_post();
            // the_content();
            get_template_part('template-parts/content', 'article');
        }

    }
    ?>
 <section class="latestpost">
   <p class="firstpara mb-5">  Related Blogs</p>
  
  
  
  
  
   <div class="row"> 
     
                                       <?php 
                                     $args= array(
                                        'category__in'=>wp_get_post_categories($post->ID), 
                                        'numberpost'=>3, 
                                      );
                                    $relatedpost =get_posts($args);
                                      if($relatedpost){
                                         setup_postdata($post);
                                          
                                          ?>  <?php
                                          foreach($relatedpost as $post){
                                            //  the_post();                                          
                                             get_template_part('template-parts/content', 'relatedposts');  
                                             echo "</div> ";                                                         
                                                            ?>                        
                                     <?php    
                                   }  }
                                     ?>
    </div>  
                                    
          
          
                                         


                                       
                                          </section> 


  <?php
 wp_reset_postdata();
   ?>



    </div>
 

 
<?php get_footer(); ?>