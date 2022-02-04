<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/6th-b.png';
    echo '<img src="' . $imgUrl . '">';
else:
   
    $more_info= get_field('more_info');
    $subheading=get_field('subheading');
    $body=get_field('body');
    $learnmore =get_field('learnmore');
    $image6 = get_field( 'image6' );

    
    // $content = get_field( 'content' );
    // echo "<pre>";
    // print_r ($link_learn_more);
    // echo "<pre>";
    // print_r($third_image);
    // print_r($third_image['name']);
    // print_r($third_image['url']);

    // exit;
?>

 <section class="sixthSection">  
  <div class="row ">





                <div class="col-lg-7 col-md-5">
                    <div class="container">

                        <?php if(isset($image6['url'])):?>
                            <img src="<?php echo $image6['url'];?>" id="first" class="img-fluid " alt="<?php echo $image6['name'];?>" >
                            <?php else:?>
                              <img src="<?php echo get_template_directory_uri();?>/assest/img/body/6th-b.png" class="img-fluid" alt="">  
                          <?php endif;?>


                          



                    </div>
                            </div>
                   
                 
              <div class="col-lg-4 col-md-7 mt-5 ">
                <div class="container__one">
                  <h6> 
                    
                  
                  
                  <?php if(isset($more_info)):?>
                                    <?php echo $more_info; ?>
                                    <?php else:?>
                                      Proin pretium risus suscipit viverra mattis.
                                      Aliquam non nunc ligula
                                      <?php endif;?> 
                
    
                      </h6>
                        <h4>  
                            
                          <?php if(isset($subheading)):?>
                                      <?php echo $subheading; ?>
                                                  <?php else:?>
                                                    Proin pretium risus suscipit viverra mattis.
                                Aliquam non nunc ligula
                                                    <?php endif;?>  
                        
                        </h4>
                            <p>
                            <?php echo get_the_date() ?></p>
                              <p>
                              <?php if(isset($body)):?>
                                      <?php echo $body; ?>
                                                  <?php else:?>
                                                    Proin pretium risus suscipit viverra mattis.
                                Aliquam non nunc ligula
                                                    <?php endif;?> 

                              
                                  </p>     
                                  
                                  <?php if(isset($learnmore['url'])):?>
                                    <a href="<?php 
                                      echo $learnmore['url'];?>">
                                      
                                      <button type="submit" class="btn  mt-3 text-dark"> Learn More <span class="icon-arrow-right2"></span></button>  
                                <?php else:?>
                                        <a href="#">   <button type="submit" class="btn  mt-3 text-dark"> Learn More <span class="icon-arrow-right2"></span></button>  

                                        <?php endif;?>
                                      </a>


       </div>
  </div>
 
  </section> 
  <?php endif; ?>