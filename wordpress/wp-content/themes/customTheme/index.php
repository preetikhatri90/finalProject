<?php get_header(); ?>
<div class="container-fluid">
                  <section class="rightimageSection">
                    <img src="<?php echo get_template_directory_uri();?>/assest/img/blog/blog-1.png" class="img-fluid" alt="">   
                    <div class="line position-absolute "></div>
                    <div class="text position-absolute">
                    
                      <h3><?php echo get_theme_mod('customTheme-Blog-heading'); ?></h3>
                          
                    </div>
                    <div class="infobox ">
                      <div class="date mb-4">
                      <?php
                      the_date(); ?>
                      </div>
                      <p>
                      <?php echo get_theme_mod('customTheme-Blog-body'); ?>
                       </p>
                      <button type="submit" class="btn  mt-3 text-dark"> Read More <span class="icon-arrow-right2"></span></button>  
                      
                    </div>
              </section>


                    <section class="blogsnotes">
                      <div class="heading mb-5">
                        MORE BLOG NOTES
                                              </div>
                                              <div class="category">
                                              <div class="cat">Category:</div> 
                                              <div class="tade">Category:</div>
                                            

                                          <?php
                                              wp_nav_menu([
                                    'menu' => 'displaycategory',
                                    'menu_class' =>'nav',                
                              'container'=>false
                              

                              ]); ?>
                                 
                       
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                    <form action="" class="">
                                <div class=" search">
                                    <?php
                      get_search_form();

                                    ?>
           
                                    </div>
                                    </form>
                                </div>

                                <div class="col-lg-6 col-md-6">
            <div class="btn-group ms-5 mt-5 mb-3">
                            
              <button type="button" class="btn dlin latest" data-bs-toggle="dropdown" aria-expanded="false">
               LATEST <span class="icon-down-toogle-arrow ms-1"></span>
              </button> 
              

              <ul class=" one dropdown-menu ">

                <!-- <li><hr class="dropdown-divider"></li> -->
                <li><a class="  dropdown-item  fw-bold" href="#">ALPHABETICAL ORDER</a></li>
    
                <li><hr class=" dropdown-divider"></li>
                <li><a class="  dropdown-item fw-bold" href="#">FEATURED</a></li>
    
                <li><hr class="  dropdown-divider"></li>
                <li><a class=" dropdown-item  fw-bold" href="#">LATEST</a></li>
    
  
                    <li><hr class="  dropdown-divider"></li>
                <li><a class="  dropdown-item fw-bold" href="#">OLDEST</a></li>
              </ul>
            
             

            </div>
            
          </div>

 <div class="row justify-content-around"> 
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

  </div> 
  </section> 


  <section class="paginationFooter  mt-3 ">
        <nav class="navigation">
          <ul class="pagination">
            <li class="page-item mt-1">
            

<div>
<?php

    // echo paginate_links(
      
    //   array(
    //     'total'=> 7, 
    //     'type' => 'none',
    //     'show_all'=>'true',
    //     )
    //   );
    customTheme_pagination();
  
    
       ?>

      
      </div>
      <?php
   
    ?>
    </li> 
    </ul>

</section>


<section class="eightSection">
   <h3 class="ms-5"> <?php echo get_theme_mod('custom-eightSection-headline')?></h3>
   <p class="ms-5"><?php echo get_theme_mod('custom-eightSection-subheadline')?></p>
   <button type="submit" class="btn btn-outline-dark ms-5 mt-3 text-light"> See Our Blogs <span class="icon-arrow-right2"></span></button>  

  </section>


<?php get_footer(); ?>
