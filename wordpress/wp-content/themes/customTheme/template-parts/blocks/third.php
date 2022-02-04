<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/3rd-b.png';
    echo '<img src="' . $imgUrl . '">';
else:
    $image3=get_field('image3');
    $more_article=get_field('morearticle')    ;
    $thing_to_remember=get_field('thingtoremember');
    $to_people=get_field('topeople');
    $lorem_text=get_field('loremtext');
    ?>

    <section class="thirdSection">  
<div class="row ">
  <div class="col-lg-7 col-md-8">
      <div class="container">



      <?php if(isset($image3['url'])):?>
      <img src="<?php echo $image3['url'];?>" id="first" class="img-fluid w-100"  class="img-fluid w-100" alt="<?php echo $image3['name'];?>" >
      <?php else:?>
        <img src="<?php echo get_template_directory_uri();?>/assest/img/body/5th-b.png" class="img-fluid w-100" alt="">                 
<?php endif;?>

 </div>
</div>
<div class="col-lg-5 col-md-4">
  <div class="container__one">
    <h6>
        
    
    
    <?php if(isset($thing_to_remember)):?>
                  <?php echo $thing_to_remember; ?>
                  <?php else:?>
                    Integer at neque ac metus fringilla <br> dapibus et eu eros. Vivamus vitae finibus <br> dolor. Suspendisse finibus ante in sapien <br> fermentum, quis condimentum turpis <br> consequat.
                    <?php endif;?> 



</h6>
    <h4>
    <?php if(isset($to_people)):?>
                  <?php echo $to_people; ?>
                  <?php else:?>
                    Integer at neque ac metus fringilla <br> dapibus et eu eros. Vivamus vitae finibus <br> dolor. Suspendisse finibus ante in sapien <br> fermentum, quis condimentum turpis <br> consequat.
                    <?php endif;?> 

    </h4>
      <p>
      <?php echo get_the_date() ?></p>
        <p>
        <?php if(isset($lorem_text)):?>
                  <?php echo $lorem_text; ?>
                  <?php else:?>
                    Integer at neque ac metus fringilla <br> dapibus et eu eros. Vivamus vitae finibus <br> dolor. Suspendisse finibus ante in sapien <br> fermentum, quis condimentum turpis <br> consequat.
                    <?php endif;?> 

     </p>          

     <?php if(isset($more_article['url'])):?>
                  <a href="<?php echo $more_article['url'];?>"><button type="submit" class="btn mt-3 text-dark">  More Article <span class="icon-arrow-right2"></span></button>
                  <?php else:?>
                     <a href="abc.html"><button type="submit" class="btn mt-3 text-dark ">More Article  <span class="icon-arrow-right2"></span></button>
                    <?php endif;?>
                
                  </a>

</div>
</div>
</div>
</section>

<?php endif; ?>