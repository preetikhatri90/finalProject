<?php get_header(); ?>  

<?php
    if(have_posts()){

        while( have_posts() )
        
        {
            the_post();
            // the_content();
            get_template_part('template-parts/content', 'archive');
        }

    }
    else{
        echo "No Post found"; 
    }
    ?>
    <?php
    the_posts_pagination();
    ?>
<?php get_footer(); ?>
</div> 