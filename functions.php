<?php

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

function ecolo_register_assets() {
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js',['popper','jquery'],false,true);
    wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js',[],false,true);
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://code.jquery.com/jquery-3.5.1.slim.min.js',[],false,true);
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/scss/dist/custom.css');
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'ecolo_register_assets');
add_action( 'after_setup_theme', 'register_navwalker' );