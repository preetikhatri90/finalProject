<?php
if (!empty($is_preview)) :
    /* Render screenshot for example */
    $imgUrl = get_stylesheet_directory_uri() . '/template-parts/preview/7th-b.png';
    echo '<img src="' . $imgUrl . '">';
else:
   
    $what_our= get_field('more_info');
    $subheading=get_field('subheading');
    $there_are=get_field('there_are');
    $image7 = get_field( 'image7' );
    $name=get_field('name');;

    
    // $content = get_field( 'content' );
    // echo "<pre>";
    // print_r ($link_learn_more);
    // echo "<pre>";
    // print_r($third_image);
    // print_r($third_image['name']);
    // print_r($third_image['url']);

    // exit;
?>
 <section class="seventhSection">
    <h2 class="ms-5">
    <?php if(isset($what_our)):?>
                  <?php echo $what_our; ?>
                  <?php else:?>
                    Proin pretium risus suscipit viverra mattis.
Aliquam non nunc ligula
                    <?php endif;?> 
    
    <?php 
    //echo get_theme_mod('custom-seventhSection-headline');?></h2>

    <p>

    <?php if(isset($subheading)):?>
                  <?php echo $subheading; ?>
                  <?php else:?>
                    Proin pretium risus suscipit viverra mattis.
                   non nunc ligula
                    <?php endif;?> 

      
      
      
      <?php 




    //echo get_theme_mod('custom-seventhSection-subheadline');?></p>


<?php if(isset($image7['url'])):?>
      <img src="<?php echo $image7['url'];?>" id="first" class="backgroundColour img-fluid" alt="<?php echo $image5['name'];?>" >
      <?php else:?>
        <img src="<?php echo get_template_directory_uri();?>/assest/img/body/9th-b.png" class="backgroundColour img-fluid">
     <?php endif;?>


    <img src="<?php
    // echo get_template_directory_uri();?>/assest/img/body/9th-b.png" class="backgroundColour img-fluid">
    <h4 > <span>
      
    <?php if(isset($name)):?>
                  <?php echo $name; ?>
                  <?php else:?>
                    Proin pretium risus suscipit viverra mattis.
Aliquam non nunc ligula
                    <?php endif;?> 
      
      
      
      
      
      <?php 
    //echo get_theme_mod('custom-seventhSection-name');?></span> </h4>
    <span class="icon-LinkedIn"></span>
    <span class="icon-Github"></span>
    <span class="icon-Twitter"></span>
    <span class="icon-Facebook"></span>
    <p class="mt-3">

    <?php if(isset($there_are)):?>
                  <?php echo $there_are; ?>
                  <?php else:?>
                    Proin pretium risus suscipit viverra mattis.
Aliquam non nunc ligula
                    <?php endif;?> 

    <?php 
    //echo get_theme_mod('custom-seventhSection-body');?>
     </p>

  </section>
  
  <?php endif; ?>