<?php

register_nav_menus( array('primary' => 'Primary Menu') );
register_sidebar( array('name' => 'Sidebar') );

add_theme_support( 'automatic-feed-links' );

function my_init_method() {
  if(!is_admin()) {
    wp_enqueue_script( 'jquery' );
    wp_register_style( 'global', get_bloginfo('template_directory') . '/css/global.css');
    wp_enqueue_style( 'global' );
  }
}
add_action('init', 'my_init_method');

function be_metabox_show_on_slug( $display, $meta_box ) {

    if( 'slug' !== $meta_box['show_on']['key'] )
        return $display;

    // Get the current ID
    if( isset( $_GET['post'] ) ) $post_id = $_GET['post'];
    elseif( isset( $_POST['post_ID'] ) ) $post_id = $_POST['post_ID'];
    if( !( isset( $post_id ) || is_page() ) ) return false;

    $slug = get_post($post_id)->post_name;

    // If value isn't an array, turn it into one
    $meta_box['show_on']['value'] = !is_array( $meta_box['show_on']['value'] ) ? array( $meta_box['show_on']['value'] ) : $meta_box['show_on']['value'];

    // See if there's a match
    return in_array( $slug, $meta_box['show_on']['value']);
}
add_filter( 'cmb_show_on', 'be_metabox_show_on_slug', 10, 2 );

include("example-functions.php");

?>
