<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/4th-b.png';
    echo '<img src="' . $imgUrl . '">';
else:
    $image4=get_field('image4');
    $our_team=get_field('ourteam');
    $sallyal_bana=get_field('sallyalbana');
    $body_it=get_field('bodyit');
    $read_more=get_field('readmore');?>
    <section class="fourthSection"> 
   <div class="row ">
    <div class="col-md-4 ms-3">
     
  <h6 class="heading ms-5 mb-5">
      
  <?php if(isset($our_team)):?>
                  <?php echo $our_team; ?>
                  <?php else:?>
                   Our team 
                      <?php endif;?> 

      



    </div>
  </div> 
  <!-- <div class="line"></div> -->
         
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators ">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-dark topmargin " aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class=" bg-dark  topmargin" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class=" bg-dark topmargin " aria-label="Slide 3"></button>
  
    
    
</div>
    <div class="carousel-inner">
      <div class="carousel-item active " aria-label="Slide 1">
        <div class="row border-top border-primary border-5">               
          <div class="col-lg-6 col-md-5"> 
              
          
          <?php if(isset($image4['url'])):?>
              <img src="<?php echo $image4['url'];?>" id="first" class="d-block img-fluid" alt="<?php echo $image4['name'];?>" >
      <?php else:?>
              <img src="<?php echo get_template_directory_uri();?>/assest/img/body/7th-b.png" class=" d-block img-fluid " alt="">  
           
        <?php endif;?>



            </div>   
            <div class="col-lg-6 col-md-7 ">
              
                    <h3 class="text ">
                    <?php if(isset($sallyal_bana)):?>
                  <?php echo $sallyal_bana; ?>
                  <?php else:?>
                    Sally Albana - Site Engineer
                    <?php endif;?> 
                    
                   
                
                
                </h3>
                              
                    
                    <p class="text__space">
                    <?php if(isset($body_it)):?>
                  <?php echo $body_it; ?>
                  <?php else:?>
                    It is not so much for its beauty that the forest makes a claim upon men’s hearts, as for that subtle something, that quality of air that emanation from old trees, that so wonderfully changes and renews a weary spirit
                    <?php endif;?> 
                    
                              <br> 


                              <?php if(isset($read_more['url'])):?>
                  <a href="<?php echo $read_more['url'];?>"><button type="submit" class="btn  mt-3 text-dark"> Read More <span class="icon-arrow-right2"></span></button></a>
                  <?php else:?>
                     <a href="abc.html"><button type="submit" class="btn  mt-3 text-dark">Read More  <span class="icon-arrow-right2"></span></button>
                    <?php endif;?>
                    </a>

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
  </div>

</section>
<?php endif; ?>