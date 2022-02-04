<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/8th-b.png';
    echo '<img src="' . $imgUrl . '">';
else:
   
    $proin_pretium= get_field('proin_pretium');
    $sub=get_field('sub');
    
    
    // $content = get_field( 'content' );
    // echo "<pre>";
    // print_r ($link_learn_more);
    // echo "<pre>";
    // print_r($third_image);
    // print_r($third_image['name']);
    // print_r($third_image['url']);

    // exit;
?>

<section class="eightSection">
   <h3 class="ms-5"> 
   <?php if(isset($proin_pretium)):?>
                  <?php echo $proin_pretium; ?>
                  <?php else:?>
                    Proin pretium risus suscipit viverra mattis.
Aliquam non nunc ligula
                    <?php endif;?> 
    </h3>
   <p class="ms-5">
   <?php if(isset($sub)):?>
                  <?php echo $sub; ?>
                  <?php else:?>
                    Proin pretium risus suscipit viverra mattis.
Aliquam non nunc ligula
                    <?php endif;?> 
    </p>


    <?php if(isset($seemore['url'])):?>
                 <a href="<?php 
                  echo $seemore['url'];?>">  -->
                  
                  <button type="submit" class="btn btn-outline-dark ms-5 mt-3 text-light"> See Our Blogs <span class="icon-arrow-right2"></span></button>   <?php else:?>
                     <a href="#">  
                     <button type="submit" class="btn btn-outline-dark ms-5 mt-3 text-light"> See Our Blogs <span class="icon-arrow-right2"></span></button>  
                     <?php endif;?>
                  </a>




  </section>
  <?php endif; ?>