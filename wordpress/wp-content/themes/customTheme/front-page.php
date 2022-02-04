<?php 
get_header(); ?>
<?php
  while( have_posts() )
        
        {
            the_post();
            the_content();
            }
         
?>

<!-- <div class="container-fluid">
<section class="firstSection">
<div class="imageClass">
    <div class="row align-items-center p-2">
        <div class="col-lg-4 col-md-4 mt-3">
          
        <?php 
         
          
         //$firstImage= wp_get_attachment_image_src(get_theme_mod('homeCustomTheme-firstSection-image1'))[0];
          //get_post_meta($firstImage, '_wp_attachment_image_alt', true);
         ?>
         <img src="<?php 
         //echo $firstImage;?>" id="first" class="img-fluid" alt="">
        </div>
        
        <div class="col-lg-8 col-md-6 mt-3 secound">
          <img src="<?php
          // echo get_template_directory_uri();?>/assest/img/body/2nd-b.png" id="secound" class="img-fluid" alt="">
        </div>
       
      </div>
</div>

<?php
// if(get_theme_mod('custom-SecoundPara-display')== "Yes"){ ?>
     <div class="secoundPara">

      <div class="row  p-4">
        <div class="col-lg-8 col-md-8 mt-1  align-items-center">
            <div class="container border-top border-primary border-5">
              <div class="line">
              </div> -->
             <!-- <h4 > 
              <?php
              // echo get_theme_mod('custom-SecoundPara-headline'); ?></h4> 
               <p>
               <?php
               // echo get_theme_mod('custom-SecoundPara-body'); ?>
               </p>
                <a href="Contact.html"><button type="submit" class="btn text-dark">Contact us <span class="icon-arrow-right2"></span></button>
                </a>  </div>
        </div>
        <div class="col-lg-2 ms-5 mt-1 ">
            <img src="
            <?php
            // echo wp_get_attachment_url(get_theme_mod('custom-SecoundPara-image'));?>" id="ThirdImage" class="img-fluid ms-5 ThirdImage" alt="" >
         </div>
  </div>  -->
  <?php
//}
  ?>
<!-- </div>

</section> --> 

<!-- <section class="secoundSection ">  
<div class="row">
<div class=" col-lg-7 col-md-9 col-sm-12 ms-3 align-items-center">
    <div class="container ms-5">
<h6 class="aboutus mb-5"><?php 
//echo get_theme_mod('custom-secoundSection-headline'); ?></h6>
<p class="aboutus"><?php 
//echo get_theme_mod('custom-secoundSection-body'); ?></p>
<button type="submit" class="aboutus btn btn-outline-dark mt-3 text-light">Learn More <span class="icon-arrow-right2"></span></button>
                 
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 align-items-center">
<div class="container-one p-4">
  <h6>How About Us ?</h6>
  <img src="<?php 
  //echo get_template_directory_uri();?>/assest/img/body/4th-b.png" class="img-fluid w-100 mt-2 "alt=""> 

</div>
</div>
</div>
</section> -->

<!-- <section class="thirdSection">  
<div class="row ">
  <div class="col-lg-7 col-md-8">
      <div class="container">
  <img src="<?php 
  // echo get_template_directory_uri();?>/assest/img/body/5th-b.png" class="img-fluid w-100" alt="">                 
</div>
</div>
<div class="col-lg-5 col-md-4">
  <div class="container__one">
    <h6><?php 
    // echo get_theme_mod('custom-thirdSection-headline'); ?></h6>
    <h4><?php
    //  echo get_theme_mod('custom-thirdSection-subheadline'); ?></h4>
      <p>
      <?php 
      // echo get_the_date() ?></p>
        <p>
        <?php
        //  echo get_theme_mod('custom-thirdSection-body'); ?>
     </p>          
      <button type="submit" class="btn mt-3 text-dark"> More Article <span class="icon-arrow-right2"></span></button>  
</div>
</div>
</div> -->
<!-- </section> -->

<!-- <section class="fourthSection"> 
   <div class="row ">
    <div class="col-md-4 ms-3">
     
  <h6 class="heading ms-5 mb-5"><?php 
  //echo get_theme_mod('custom-fourthSection-headline'); ?> </h6>
    </div>
  </div> 
  <!-- <div class="line"></div> -->
         
  <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"> -->
    <!-- <div class="carousel-indicators "> -->
      <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-dark topmargin " aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class=" bg-dark  topmargin" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class=" bg-dark topmargin " aria-label="Slide 3"></button>
  
    
    
</div>
    <div class="carousel-inner">
      <div class="carousel-item active " aria-label="Slide 1">
        <div class="row border-top border-primary border-5">               
          <div class="col-lg-6 col-md-5">                
            <img src="<?php 
            //echo get_template_directory_uri();?>/assest/img/body/7th-b.png" class=" d-block img-fluid " alt="">  
            </div>   
            <div class="col-lg-6 col-md-7 ">
              
                    <h3 class="text "><?php 
                    //echo get_theme_mod('custom-fourthSection-subheadline'); ?></h3>
                              <p class="text__space">
                              <?php 
                              //echo get_theme_mod('custom-fourthSection-body'); ?>
                      <br> 
                        <button type="submit" class="btn  mt-3 text-dark"> Read More <span class="icon-arrow-right2"></span></button>  
                </p>
          </div>

        </div>
      </div>
     </div>
    <button class="carousel-control-prev top" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="icon-Left rounded-circle display-6 bg-light text-dark mt-5" aria-hidden="true"></span>
      
    </button>
    <button class="carousel-control-next top" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="icon-arrow-right2 display-6 rounded-circle bg-light text-dark mt-5" aria-hidden="true"></span>
    </button>
  </div> -->

<!-- </section> -->
 
<!-- <section class="fifthSection"> 
  <div class="row">
    <div class="col-md-4 ms-3">
     
  <h6 class=" blogs ms-5 mb-3"> <?php echo get_theme_mod('custom-fifthSection-headline'); ?> </h6>
  <h6 class="whoweare"> Who we are</h6>
  </div>
  </div>
  
  <div class="row ">
    <div class="col-md-4 mt-5 pictureone ">
      <img src="<?php echo get_template_directory_uri();?>/assest/img/body/6th-b.png" class="img-fluid w-100 h-100 ms-3 " alt="">  
    </div>
    <div class="col-md-6 ms-5 mt-3">
      <h6 class="whoweareone"> <?php echo get_theme_mod('custom-fifthSection-subheadlineone'); ?> </h6>
      <h4><?php echo get_theme_mod('custom-fifthSection-subheadlinetwo'); ?> </h4>

         <p><?php echo get_theme_mod('custom-fifthSection-body'); ?> </p>
            <small> 
            <?php echo get_theme_mod('custom-fifthSection-small'); ?> 
             </small>
  </div>
  <div class="col-md-4 mt-5 ">
    <img src="<?php echo get_template_directory_uri();?>/assest/img/body/6th-b.png" class="img-fluid w-100 h-100 ms-3 picture" alt="">  
  </div>
 
  </div>

  <button type="submit" class="btn btn-outline-dark ms-5 mb-5 text-light">Learn More <span class="icon-arrow-right2"></span></button>


</section> -->

<!-- <section class="sixthSection">  
  <div class="row ">
    <div class="col-lg-7 col-md-5">
        <div class="container">
    <img src="<?php echo get_template_directory_uri();?>/assest/img/body/8th-b.png" class="img-fluid" alt="">                 
  </div>
  </div>
  <div class="col-lg-4 col-md-7 mt-5 ">
    <div class="container__one">
      <h6> <?php echo get_theme_mod('custom-sixthSection-headline');?></h6>
      <h4>   <?php echo get_theme_mod('custom-sixthSection-subheadline');?>   </h4>
        <p>
        <?php echo get_the_date() ?></p>
          <p>
            <?php echo get_theme_mod('custom-sixthSection-body') ?>
               </p>          
        <button type="submit" class="btn  mt-3 text-dark"> Learn More <span class="icon-arrow-right2"></span></button>  
</div>
  </div>
  </div>
  </section> -->

  <!-- <section class="seventhSection">
    <h2 class="ms-5">
      
    
    <?php 
    //echo get_theme_mod('custom-seventhSection-headline');?></h2>

    <p><?php 
    //echo get_theme_mod('custom-seventhSection-subheadline');?></p>
    <img src="<?php
    // echo get_template_directory_uri();?>/assest/img/body/9th-b.png" class="backgroundColour img-fluid">
    <h4 > <span><?php 
    //echo get_theme_mod('custom-seventhSection-name');?></span> </h4>
    <span class="icon-LinkedIn"></span>
    <span class="icon-Github"></span>
    <span class="icon-Twitter"></span>
    <span class="icon-Facebook"></span>
    <p class="mt-3">
    <?php 
    //echo get_theme_mod('custom-seventhSection-body');?>
     </p>

  </section> -->
  

  <!-- <section class="eightSection">
   <h3 class="ms-5"> <?php echo get_theme_mod('custom-eightSection-headline')?></h3>
   <p class="ms-5"><?php echo get_theme_mod('custom-eightSection-subheadline')?></p>
   <button type="submit" class="btn btn-outline-dark ms-5 mt-3 text-light"> See Our Blogs <span class="icon-arrow-right2"></span></button>  

  </section> -->

  
</div>

</div>
<?php get_footer(); ?>