<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/1st-b.png';
    echo '<img src="' . $imgUrl . '">';
else:
   
    $about_us= get_field('aboutus');
    $text_about_us=get_field('textaboutus');
    $how_about_us=get_field('howaboutus');
    $link_learn_more =get_field('linklearnmore');
    $image = get_field( 'image' );

    
    // $content = get_field( 'content' );
    // echo "<pre>";
    // print_r ($link_learn_more);
    // echo "<pre>";
    // print_r($third_image);
    // print_r($third_image['name']);
    // print_r($third_image['url']);

    // exit;
?>
<section class="secoundSection ">  
<div class="row">
<div class=" col-lg-7 col-md-9 col-sm-12 ms-3 align-items-center">
    <div class="container ms-5">
<h6 class="aboutus mb-2">
    

<?php if(isset($about_us)):?>
                  <?php echo $about_us; ?>
                  <?php else:?>
                    About Us 
                    <?php endif;?> 
            

<?php 
//echo get_theme_mod('custom-secoundSection-headline'); 
?>
</h6>



<p class="aboutus">
    
<?php if(isset($text_about_us)):?>
                  <?php echo $text_about_us; ?>
                  <?php else:?>
                    Integer at neque ac metus fringilla <br> dapibus et eu eros. Vivamus vitae finibus <br> dolor. Suspendisse finibus ante in sapien <br> fermentum, quis condimentum turpis <br> consequat.
                    <?php endif;?> 

</p>


<?php if(isset($link_learn_more['url'])):?>
                  <a href="<?php echo $link_learn_more['url'];?>"><button type="submit" class="aboutus btn btn-outline-dark mt-3 text-light "> Learn More <span class="icon-arrow-right2"></span></button>
                  <?php else:?>
                     <a href="abc.html"><button type="submit" class="aboutus btn btn-outline-dark mt-3 text-light ">Learn More  <span class="icon-arrow-right2"></span></button>
                    <?php endif;?>
                
                  </a>
                
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 align-items-center">
<div class="container-one p-4">
  <h6>

  <?php if(isset($how_about_us)):?>
                  <?php echo $how_about_us; ?>
                  <?php else:?>
                    How About Us ?
                      <?php endif;?> 

      
  
  
  
  
  </h6>


  <?php if(isset($image['url'])):?>
      <img src="<?php echo $image['url'];?>" id="first" class="img-fluid w-100" alt="<?php echo $image['name'];?>" >
      <?php else:?>
        <img src="<?php echo get_template_directory_uri();?>/assest/img/body/4th-b.png" class="img-fluid w-100 mt-2 "alt=""> 
 <?php endif;?>



 
</div>
</div>
</div>
</section>























 
  

 




<?php endif; ?>
