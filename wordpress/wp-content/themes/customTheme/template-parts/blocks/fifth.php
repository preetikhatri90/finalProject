<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/5th-b.png';
    echo '<img src="' . $imgUrl . '">';
else:
   
    $blogs= get_field('blogs');
    $proin_pretium=get_field('proin_pretium');
    $there_are=get_field('there_are');
    $if_you =get_field('if_you');
    $learnmore = get_field( 'learnmore' );
    $image5 = get_field( 'image5' );

    
    // $content = get_field( 'content' );
    // echo "<pre>";
    // print_r ($link_learn_more);
    // echo "<pre>";
    // print_r($third_image);
    // print_r($third_image['name']);
    // print_r($third_image['url']);

    // exit;
?>



<section class="fifthSection"> 
  
  <div class="row">
    <div class="col-md-4 ms-3">
     
  <h6 class=" blogs ms-5 mb-3"> 
    
  
  
  <?php if(isset($blogs)):?>
                  <?php echo $blogs; ?>
                  <?php else:?>
                    Blog 
                    <?php endif;?> 
            





</h6>
  <h6 class="whoweare"> Who we are</h6>
  </div>
  </div>
  
  <div class="row ">
    <div class="col-md-4 mt-5 pictureone ">
          <?php if(isset($image5['url'])):?>
            <img src="<?php echo $image5['url'];?>" id="first" class="img-fluid w-100 h-100 ms-3 " alt="<?php echo $image5['name'];?>" >
            <?php else:?>
              <img src="<?php echo get_template_directory_uri();?>/assest/img/body/6th-b.png" class="img-fluid w-100 h-100 ms-3 " alt="">  
          <?php endif;?>


     </div>
    <div class="col-md-6 ms-5 mt-3">

      <h6 class="whoweareone">
        
      
      <?php echo get_theme_mod('custom-fifthSection-subheadlineone'); ?> 
    
    
    
    
    </h6>
      <h4>
        
      <?php if(isset($proin_pretium)):?>
                  <?php echo $proin_pretium; ?>
                  <?php else:?>
                    Proin pretium risus suscipit viverra mattis.
                    Aliquam non nunc ligula
                    <?php endif;?> 
            
    </h4>

         <p>
         <?php if(isset($there_are)):?>
                  <?php echo $there_are; ?>
                  <?php else:?>
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in
                    some form, by injected humour, or randomised words
                    which don't look even slightly believable.
                     <?php endif;?> 
                            
          
          </p>
            <small> 
                    
            <?php if(isset($if_you)):?>
                  <?php echo $if_you; ?>
                  <?php else:?>
                    If you are going to use a passage of Lorem Ipsum, you need to be sure
                      there isn't anything embarrassing hidden in the middle of text. All the
                      Lorem Ipsum generators on the Internet tend to repeat predefined
                      chunks as necessary, making this the first true generator on the Internet.
                    <?php endif;?> 
            
             </small>
  </div>
  <div class="col-md-4 mt-5 ">

        <?php if(isset($image5['url'])):?>
            <img src="<?php echo $image5['url'];?>" id="first" class="img-fluid ms-3 " alt="<?php echo $image5['name'];?>" >
            <?php else:?>
              <img src="<?php echo get_template_directory_uri();?>/assest/img/body/6th-b.png" class="img-fluid w-100 h-100 ms-3 picture" alt="">  
          <?php endif;?>
     </div>
 
  </div>

  <?php if(isset($learnmore['url'])):?>
                 <a href="<?php 
                  echo $learnmore['url'];?>">
                  
                  <button type="submit" class="btn btn-outline-dark ms-5 mb-5 text-light">Learn More <span class="icon-arrow-right2"></span></button>
                  <?php else:?>
                     <a href="#">  <button type="submit" class="btn btn-outline-dark ms-5 mb-5 text-light">Learn More <span class="icon-arrow-right2"></span></button>
                     
                     <?php endif;?>
                  </a>
</section>
<?php endif; ?>