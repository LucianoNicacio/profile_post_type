<?php
function my_theme_enqueue_styles() {
//Enqueue Parent stylesheet
$parent_style = 'parent-style'; 

wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( $parent_style ),
    wp_get_theme()->get('Version')
);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Profile Post Type
function profile_post_type() {
    register_post_type( 'profile', array(
        'Rewrite' => array('slug' => 'profiles'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-id-alt',
        'supports' => array('title'),
        'labels' => array(
            'name' => 'Profiles',
            'add_new_item' => 'New Profile',
            'edit_item' => 'Edit Profile',
            'all_items' => 'All Profiles',
            'singular_name' => 'Profile'
        ),
    ));
}
add_action('init', 'profile_post_type');