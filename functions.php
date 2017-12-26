<?php
/**
 * Fonction pour ajouter les Font Awesome à WordPress
 */

function add_font_awesome()
{
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'font-awesome', get_template_directory_uri().'css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'add_font_awesome' );

register_nav_menus( array(
        'Top' => 'Navigation principale',
    ) );

/* gestionnaire de liens */ 
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

 ?>

<?php add_theme_support( 'post-thumbnails' ); ?>

<?php

	$args = array(
	'width'         => 800,
	'height'        => 540,
	'default-image' => get_template_directory_uri() . '/img/facade.JPG',
	'uploads'       => true,
	);

add_theme_support( 'custom-header', $args ); 

?>
