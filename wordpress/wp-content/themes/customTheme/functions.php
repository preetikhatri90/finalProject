<?php



//adds dynamic title tag support 
function  customTheme_theme_support() {
    
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails'); 


}
add_action('after_setup_theme', 'customTheme_theme_support');




function customTheme_load_stylesheets()


{
   $version =wp_get_theme()->get('Version');
   wp_register_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), false, 'all');
   wp_enqueue_style('bootstrap');

    
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    wp_enqueue_style('style');
    wp_register_style('main', get_template_directory_uri() . '/main.css', array(), false, 'all');
    wp_enqueue_style('main');
   



}

add_action('wp_enqueue_scripts', 'customTheme_load_stylesheets');

function customTheme_loadjs(){

    wp_register_script('customjs', get_template_directory_uri() . '/js/bootstrap.min.js', '',1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'customTheme_loadjs');






function customTheme_Menus(){
    // add_theme_support('menus');

    $locations = array(

    'primary'=> 'Desktop primary top bar',
    'category'=>'displaycategory', 

    );
    register_nav_menus( $locations    
);
}

add_action('init', 'customTheme_Menus');


//change the order of posts/pages/cpt in the Divi Blog module

add_action('pre_get_posts', 'pa_change_blog_module_order');

function pa_change_blog_module_order($query) {
$pac = get_query_var( 'post_type' );
if ( 'post' == $pac )
{

$query->set('orderby', 'title');
$query->set('order', 'ASC');
}
}
/**
 * Add copyright customizer
 */

require get_template_directory() . '/classes/footer-copyright-customizer.php';

require get_template_directory() . '/classes/customTheme-contact.php';

require get_template_directory() . '/classes/customTheme-footer.php';



add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'head',
            'title'             => __('Head'),
            'description'       => __('A custom head block.'),
            'render_template'   => 'template-parts/blocks/hero.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'head', 'leadspace' ),
            'mode'              =>'auto',
            'example'           =>array(
            'attributes'        =>array(
                'mode'          =>'preview',
                'data'          =>[]

            ),
            )
                ));

                acf_register_block_type(array(
                    'name'              => 'body',
                    'title'             => __('body'),
                    'description'       => __('A custom body block.'),
                    'render_template'   => 'template-parts/blocks/body.php',
                    'category'          => 'formatting',
                    'icon'              => 'admin-comments',
                    'keywords'          => array( 'body', 'leadspace' ),
                    'mode'              =>'auto',
                    'example'           =>array(
                    'attributes'        =>array(
                        'mode'          =>'preview',
                        'data'          =>[]
        
                    ),
                    )
                        ));

                        acf_register_block_type(array(
                            'name'              => 'thirdSection',
                            'title'             => __('thirdSection'),
                            'description'       => __('A custom thirdSection block.'),
                            'render_template'   => 'template-parts/blocks/third.php',
                            'category'          => 'formatting',
                            'icon'              => 'admin-comments',
                            'keywords'          => array( 'thirdSection', 'leadspace' ),
                            'mode'              =>'auto',
                            'example'           =>array(
                            'attributes'        =>array(
                                'mode'          =>'preview',
                                'data'          =>[]
                
                            ),
                            )
                                ));


                                acf_register_block_type(array(
                                    'name'              => 'fourthSection',
                                    'title'             => __('fourthSection'),
                                    'description'       => __('A custom fourthSection block.'),
                                    'render_template'   => 'template-parts/blocks/fourth.php',
                                    'category'          => 'formatting',
                                    'icon'              => 'admin-comments',
                                    'keywords'          => array( 'fourthSection', 'leadspace' ),
                                    'mode'              =>'auto',
                                    'example'           =>array(
                                    'attributes'        =>array(
                                        'mode'          =>'preview',
                                        'data'          =>[]
                        
                                    ),
                                    )
                                        ));
                                        acf_register_block_type(array(
                                            'name'              => 'fifthSection',
                                            'title'             => __('fifthSection'),
                                            'description'       => __('A custom fifthSection block.'),
                                            'render_template'   => 'template-parts/blocks/fifth.php',
                                            'category'          => 'formatting',
                                            'icon'              => 'admin-comments',
                                            'keywords'          => array( 'fifthSection', 'leadspace' ),
                                            'mode'              =>'auto',
                                            'example'           =>array(
                                            'attributes'        =>array(
                                                'mode'          =>'preview',
                                                'data'          =>[]
                                
                                            ),
                                            )
                                                ));
                                                acf_register_block_type(array(
                                                    'name'              => 'sixthSection',
                                                    'title'             => __('sixthSection'),
                                                    'description'       => __('A custom sixthSection block.'),
                                                    'render_template'   => 'template-parts/blocks/sixth.php',
                                                    'category'          => 'formatting',
                                                    'icon'              => 'admin-comments',
                                                    'keywords'          => array( 'sixthSection', 'leadspace' ),
                                                    'mode'              =>'auto',
                                                    'example'           =>array(
                                                    'attributes'        =>array(
                                                        'mode'          =>'preview',
                                                        'data'          =>[]
                                        
                                                    ),
                                                    )
                                                        ));
                                                        acf_register_block_type(array(
                                                            'name'              => 'seventhSection',
                                                            'title'             => __('seventhSection'),
                                                            'description'       => __('A custom seventhSection block.'),
                                                            'render_template'   => 'template-parts/blocks/seventh.php',
                                                            'category'          => 'formatting',
                                                            'icon'              => 'admin-comments',
                                                            'keywords'          => array( 'seventhSection', 'leadspace' ),
                                                            'mode'              =>'auto',
                                                            'example'           =>array(
                                                            'attributes'        =>array(
                                                                'mode'          =>'preview',
                                                                'data'          =>[]
                                                
                                                            ),
                                                            )
                                                                ));
                                                                acf_register_block_type(array(
                                                                    'name'              => 'eighthSection',
                                                                    'title'             => __('eighthSection'),
                                                                    'description'       => __('A custom eighthSection block.'),
                                                                    'render_template'   => 'template-parts/blocks/eighth.php',
                                                                    'category'          => 'formatting',
                                                                    'icon'              => 'admin-comments',
                                                                    'keywords'          => array( 'eighthSection', 'leadspace' ),
                                                                    'mode'              =>'auto',
                                                                    'example'           =>array(
                                                                    'attributes'        =>array(
                                                                        'mode'          =>'preview',
                                                                        'data'          =>[]
                                                        
                                                                    ),
                                                                    )
                                                                        ));
                                                                        
    }

    


}





function customTheme_pagination() {

    global $wp_query;
    
    if ( $wp_query->max_num_pages <= 1 ) return; 
    
    $big = 999999999; // need an unlikely integer
    
    $pages = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'type'  => 'array',
            'show_all'=>'true',
            'total'=> 7, 
        ) );
        if( is_array( $pages ) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            echo '<div class="pagination-wrap"><ul class="pagination">';
            foreach ( $pages as $page ) {
                    echo "<li>$page</li>";
            }
           echo '</ul></div>';
            }
    }







?>










