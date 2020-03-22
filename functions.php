<?php

function blogviajes_styles() {

    wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );

    wp_enqueue_style( 'bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css");
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css' );

    wp_enqueue_style('raleway', "https://fonts.googleapis.com/css?family=Raleway:900");

    wp_enqueue_style( 'baskersville',"https://fonts.googleapis.com/css?family=Libre+Baskerville:700");

    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script('jquery');

    wp_enqueue_script( 'bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js", array('jquery'), '3.3.6', true );
}
add_action('wp_enqueue_scripts', 'blogviajes_styles' );

// Navegacion
register_nav_menus( array(
    'menu_principal' => __('Menu Principal', 'blogViajes'),
    'sociales_menu' => __('Menu Redes Sociales', 'blogViajes')
) );

// Widget
function blogviajes_widgets() {
  register_sidebar(array(
    'name' => __('Footer Widgets'),
    'id' => 'footer_widget',
    'description' => 'Widgets para el Footer',
    'before_widget' => '<div id="%1$s" class="widget col-sm-6 %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );


  register_sidebar(array(
    'name' => __('Sidebar Widgets'),
    'id' => 'sidebar_widgets',
    'description' => 'Widgets para el Sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
}
add_action('widgets_init', 'blogviajes_widgets');

// Imagen Destacada
add_theme_support('post-thumbnails');

add_image_size( 'entradas', 750, 490, true);
