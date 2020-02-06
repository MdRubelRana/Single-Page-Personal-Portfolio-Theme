<?php 

/**
 * 
 * Template Name: functions.php
 * Description: Add features to wordpress theme.
 * 
 */


 function fn_theme_scripts(){

    /* include style files */
    // adding font awesome icons file
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/vendor/css/all.min.css');

    // adding bootstrap4 file
    wp_enqueue_style('bootstrap4', get_template_directory_uri().'/assets/css/bootstrap.min.css');

    // custom stylesheet
    wp_enqueue_style('custom-style', get_stylesheet_uri());


    // @media query responsive css file
    wp_enqueue_style('media_responsive', get_template_directory_uri().'/assests/css/_media.css');
 }

 add_action('wp_enqueue_scripts','fn_theme_scripts');

 /* adding new features to wordpress theme */
 // register title, logo and thumbnails
 function fn_theme_supports(){
     add_theme_support('title-tag');
     add_theme_support('post-thumbnails');
    //  add_theme_support('html5', array('search-form'));
     add_theme_support('custom-logo');
 }

 add_action('after_setup_theme','fn_theme_supports');


 // register navigation menu
 function fn_nav_menu(){
     register_nav_menus(array(
         'primary-menu' => _('Primary Menu'),
         'footer-menu' => _('Footer Menu')
     ));
 }

 add_action('init','fn_nav_menu');

?>