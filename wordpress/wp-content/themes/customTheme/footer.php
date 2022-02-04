


<?php wp_footer(); ?>
<footer>
  <div class="container-fluid">
        <div class="row">
            <div class="col-sm"> 
              
            <?php 
         
          
          $footerLogo= wp_get_attachment_image_src(get_theme_mod('customTheme-footerImage-logo'))[0];
           get_post_meta($footerLogo, '_wp_attachment_image_alt', true);
          ?>
          <img src="<?php echo $footerLogo;?>" alt="">
            </div>
        </div>
            <div class="row  mt-5">
                <div class="col">
                    <ul class="list-group">
                        <h6 class="ot fw-bold">about us </h6>
                        <a href="<?php echo get_theme_mod('customTheme-footerLinks-AboutsusFirstLink') ?>"><li class=" mt-3">Lorem ipsum dolor sit amet.</li></a>
                        <a href="#"> <li class="   mt-2">Lorem, ipsum dolor.</li></a>
                        <a href="#"> <li class="   mt-2">Lorem, ipsum dolor.</li></a>
                      </ul>
                </div>
                <div class="mobilespace"></div>
                <div class="col">
                    <ul class="list-group">
                    <h6 class="fw-bold">our team </h6>
                    <a href="#"><li class="   mt-3">Lorem ipsum dolor </li></a>
                    <a href="#"> <li class="  mt-2">Lorem, ipsum dolor.</li></a>
                    <a href="#"> <li class="  mt-2">Lorem, ipsum dolor.</li></a>
                  </ul></div>
                  <div class="tabletspace"></div>
                  <div class="mobilespace"></div>
                <div class="col"><ul class="list-group">
                    <h6 class="fw-bold">who we are </h6>
                    <a href="#"><li class="mt-3">Lorem ipsum .</li></a>
                    <a href="#"> <li class="mt-2">Lorem, ipsum.</li></a>
                    <a href="#"> <li class="mt-2">Lorem, ipsum.</li></a>
                  </ul></div>
                  <div class="mobilespace"></div>
                <div class="col"><ul class="list-group">
                    <h6 class="fw-bold">resources </h6>
                    <a href="#"><li class="mt-3">Lorem lst.</li></a>
                    <a href="#"> <li class="mt-2">Lorem</li></a>
                    <a href="#"> <li class="mt-2">Lorem,lst</li></a>
                    <a href="#"> <li class="mt-2">Lorem,lst</li></a>
                  </ul></div>
                  </div>
                  <div class="mobilespace"></div>
                  <div class="row mt-3">

                  <div class="col-md-3"><ul class="list-group fw-bold"><h6>contact </h6>
                    <a href="#"><li class="mt-3">Contact form</li></a>
                    <a href="#"> <li class="mt-2">allowed@test.com</li></a></div>  
                    <div class="tabletspace-one"></div>
                    <div class="mobilespace"></div>
                    <div class="col-md-6">
                        <label for="email" class="mt-3 text-light"><i> Sign up for our newsletter:</i></label>
                        <input type="email" class="form-control mt-2 text-light" placeholder= "Email address">                       
                   
                    </div>
                    
                    <div class="col">
                      <div class="tabletspace-two"></div>
                    
                        <button type="submit" class=" btn btn-outline-light text-light">Submit <span class="icon-arrow-right2"></span></button>
                    </div>
                    <p class="mt-5 text-light" >

                    <?php echo get_theme_mod('intern-footer-copyright-frontline'); ?> <a href="#"><?php echo get_theme_mod('intern-footer-copyright-domain');?>
                </p>
                    </div>
                    </div>
</footer>
</body>
</html> 