<?php
/**
 * TEMPLATE TO ENQUEUE SCRIPTS IN THEME
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package finaltheme
 * @version 1.0
 */


function final_upload_theme_script(){

//FINAL THEME SCRIPTS
wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), array(),'1.0.0',false );

//FINAL BOOTSTRAP SCRIPTS
wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/inc/vendor/css/bootstrap.min.css', array(), true);
wp_enqueue_script('bootstrap',get_template_directory_uri().'/inc/vendor/js/bootstrap.min.js',array('jquery'),true);

//FINAL THEME JS
wp_enqueue_script('final',get_template_directory_uri().'/js/final.js',array('jquery'),true);



}

add_action( 'wp_enqueue_scripts', 'final_upload_theme_script'  );
