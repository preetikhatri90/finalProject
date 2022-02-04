<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/Rectangle 48.png';
    echo '<img src="' . $imgUrl . '">';
else:
    $imgcontent = get_field( 'image_side_by_side_' );
    $first_image = isset( $imgcontent['firstimage'] ) ? $imgcontent['firstimage'] : '';
    $second_image = isset( $imgcontent['secoundimage'] ) ? $imgcontent['secoundimage'] : '';
    $third_image= get_field('thirdimage');
    $link =get_field('contact_us');
    $header = get_field( 'header' );
    $content = get_field( 'content' );
    
    // echo "<pre>";
    // print_r($third_image);
    // print_r($third_image['name']);
    // print_r($third_image['url']);

    // exit;
?>



<section class="firstSection">
      <div class="imageClass">
          <div class="row align-items-center p-2">
              <div class="col-lg-4 col-md-4 mt-3">
            
                <?php if(isset($first_image['url'])):?>
      <img src="<?php echo $first_image['url'];?>" id="first" class="img-fluid w-100" alt="<?php echo $first_image['name'];?>" >
      <?php else:?>
      <img src="<?php echo get_template_directory_uri();?>/assest/img/body/1st-b.png"  id="first" class="img-fluid w-100" alt="" >
      <?php endif;?>
              </div>
              <div class="col-lg-8 col-md-6 mt-3 secound">
              <?php if(isset($second_image['url'])):?>
      <img src="<?php echo $second_image['url'];?>" id="secound" class="img-fluid" alt="<?php echo $second_image['name'];?>" >
      <?php else:?>
      <img src="<?php echo get_template_directory_uri();?>/assest/img/body/2nd-b.png"  id="secound" class="img-fluid" alt="" >
      <?php endif;?>

              </div>
            
            </div>
      </div>

      <div class="secoundPara">

    <div class="row  p-4">
      <div class="col-lg-7 col-md-8 mt-1 align-items-center">
          <div class="container border-top border-primary border-5">
          
          <h4 > 
          <?php if(isset($header)):?>
                  <?php echo $header; ?>
                  <?php else:?>
                    Look deep into nature, 
                      and then you<br class="Displaynone"> will understand everything better</h2> 
                      <?php endif;?> 
            
            </h4> 

            <p>
            <?php if(isset($content)):?>
                  <?php echo $content; ?>
                  <?php else:?>
                    Contrary to popular belief, Lorem Ipsum is not <br class="Displaynone"> simply random text. It has roots in 
                        a piece of <br class="Displaynone"> classical Latin literature from 45 BC, making it over <br class="Displaynone"> 2000 years old</p>
                </p>   <?php endif;?>


            <?php if(isset($link)):?>
                  <a href="<?php echo $link;?>"><button type="submit" class="btn text-dark "> Contact us<span class="icon-arrow-right2"></span></button>
                  
                  <?php else:?>
                    <a href=""><button type="submit" class="btn text-dark ">Contact us <span class="icon-arrow-right2"></span></button>
                    <?php endif;?>
                
                  </a>
            
            
            
            
            
            </div>
      </div>
      <div class="col-lg-2 ms-5 mt-1 ">

      <?php if(isset($third_image['url'])):?>
                <img src="<?php echo $third_image['url'];?>" id="ThirdImage"class="img-fluid ms-5 ThirdImage"  alt="<?php echo $third_image['name'];?>" >
              <?php else:?>
              <img src="<?php echo get_template_directory_uri();?>/assest/img/body/3rd-b.png"  id="ThirdImage"class="img-fluid w-75 ms-5 ThirdImage" alt="" >
              <?php endif;?>  
    </div>
    </div> 
</section>




<?php endif; ?>


