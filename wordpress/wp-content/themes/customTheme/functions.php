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










function post_type_init(){
    $labels = array(
        'name' => _x('types', 'taxonomy general name'),
        'singular_name' => _x('type', 'taxonomy singular name'),
        'add_new' => __('Add type'),
        'add_new_item' => __('Add New type'),
        'edit_item' => __('Edit type'),
        'new_item' => __('New type'),
        'all_items' => __('All type'),
        'view_item' => __('View type'),
        'search_items' => __('Search type'),
        'not_found' => __('No type found'),
        'not_found_in_trash' => __('No type on trash'),
        'parent_item_colon' => '',
        'menu_name' => __('News')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'types'),
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'rewrite' => array( 'slug' => 'news' ),
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' )
    );
    $labels = array(
        'name' => __('types'),
        'singular_name' => __('type'),
        'search_items' => __('Search'),
        'popular_items' => __('More Used'),
        'all_items' => __('All type'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Add new'),
        'update_item' => __('Update'),
        'add_new_item' => __('Add new type'),
        'new_item_name' => __('New')
    );
    register_taxonomy('types', array('news'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'singular_label' => 'type_category',
		'all_items' => 'types',
		'query_var' => true,
        'show_admin_column' => true,
		'rewrite' => array('slug' => 'types'))
    );
    register_post_type('news', $args);
    // flush_rewrite_rules();
}
add_action('init', 'post_type_init');
 


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

