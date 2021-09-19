<?php
/* Köa in scripts och css */
function load_stylesheets()
{
    wp_enqueue_style('custom', get_template_directory_uri() . '/css/bootstrap.css', array(), '0.1.0', 'all');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/font-awesome.css', array(), '0.1.0', 'all');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array(), '0.1.0', 'all');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
   
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


/* Registrera menyer */
add_theme_support('menus');
register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'side-menu' => __('Side Menu'),
        'blogPage-menu' => __('Blog-page Menu'),
        'blogArchive-menu' => __('Blog-archive Menu'),
        'blogCategories-menu' => __('Blog-categories Menu'),
        'footer-right-socials' => __('Footer-right Socials-Menu'),
    )
);

// Registrera footer widget, footer right är som meny för att kunna använda ikoner från pluginet "Menu Image" i wordpress

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer Left',
        'id' => 'footer-left-widget',
        'description' => 'Left Footer widget position.',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Footer Center',
        'id' => 'footer-center-widget',
        'description' => 'Centre Footer widget position.',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

}

/* För att kunna lägga in bilder till bloginlägg */
add_theme_support('post-thumbnails');
