<?php
// Register custom menus
if ( function_exists( 'register_nav_menus' ) )
{
    register_nav_menus(
        array(
            'custom-menu'=>__('Custom menu'),
        )
    );
}

function custom_menu(){
    echo '<ul>';
    wp_list_pages('title_li=&');
    echo '</ul>';
}

function wptuts_styles_with_the_lot()
{
    wp_register_style( 'custom-style', get_template_directory_uri() . '/styles/style.css');
    wp_enqueue_style( 'custom-style' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot' );



function masonry()
{
    wp_register_script('masonry', get_template_directory_uri() . '/js/jquery.masonry.min.js', array('jquery'), true);
//    var_dump(get_template_directory_uri() . '/js/jquery.masonry.min.js');
    wp_enqueue_script('masonry');
}
add_action( 'wp_enqueue_scripts', 'masonry' );



add_theme_support( 'post-thumbnails' );

if ( function_exists('register_sidebar') ) {

    register_sidebar(array(
        'name' => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'before_title' => '<h3 class="sidebar-header">',
        'after_title' => '</h3><div class="text">',
        'after_widget' => '</div></div>'
    ));

}
