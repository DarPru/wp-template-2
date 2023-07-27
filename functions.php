<?php 
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
register_nav_menus( array(
  'header' => 'Header menu',
  'footer' => 'Footer menu'
) );



add_filter('show_admin_bar', '__return_false');
add_filter('wp_generate_tag_cloud', 'myprefix_tag_cloud',10,1);

function myprefix_tag_cloud($tag_string){
  return preg_replace('/style=("|\')(.*?)("|\')/','',$tag_string);
}

add_theme_support('post-thumbnails');
set_post_thumbnail_size(500, 300);

function mytheme_customize_register( $wp_customize ) {

$wp_customize->add_setting(
   
    'theme_footer_mail',
   
    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(

    'theme_footer_mail',
 
    array(
        'type' => 'text',
        'label' => "Footer email",
        'section' => 'title_tagline',
        'settings' => 'theme_footer_mail'
    )
);
}
add_action( 'customize_register', 'mytheme_customize_register' );
add_filter( 'category_link', function($a){
    return str_replace( 'category/', '', $a );
}, 99 );
// add_filter( 'term_link', function($termlink){ return str_replace('/tag/', '/', $termlink); }, 10, 1 );

add_filter('single_template', 'my_single_template');
 
function my_single_template($single) {
 global $wp_query, $post;
 foreach((array)get_the_category() as $cat) {
 if(file_exists(get_template_directory() . '/single-' . $cat->slug . '.php')) {
 return get_template_directory() . '/single-' . $cat->slug . '.php';
 } elseif(file_exists('/single-' . $cat->term_id . '.php')) {
 return get_template_directory() . '/single-' . $cat->term_id . '.php';
 }
 }
 return $single;
}

add_shortcode( 'btn', 'btn_shortcode' );

function btn_shortcode( $atts ){
  $atts = shortcode_atts( [
    'link' => '',
    'text' => '',
    
  ], $atts );
   return '<a href="'. $atts['link'] .'" class="reg_btn">'. $atts['text'] .'</a>';
}
