<?php 

/**
 * 
 * Template Name: functions.php
 * Description: Add features to wordpress theme.
 * 
 */


 // add customizer file
 require_once('templates/helpers/customizer.php');


 function fn_theme_scripts(){

    /* include style files */
    // adding font awesome icons file
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/vendor/css/all.min.css');
    wp_enqueue_style('fontawesome-script', get_template_directory_uri().'/vendor/js/all.min.js');

    // adding bootstrap4 file
    wp_enqueue_style('bootstrap4', get_template_directory_uri().'/assets/css/bootstrap.min.css');

    // @media query responsive css file
    wp_enqueue_style('media-responsive', get_template_directory_uri().'/assets/css/_media.css');

    // custom stylesheet
    wp_enqueue_style('custom-style', get_stylesheet_uri());

    // custom stylesheet
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/vendor/owl-carousel/css/owl.carousel.min.css');
    wp_enqueue_style('owl-carousel-2', get_template_directory_uri().'/vendor/owl-carousel/css/owl.theme.default.min.css');


    /* include scripts files */
    // adding jquery file
    wp_enqueue_script('jquery_file', get_template_directory_uri() .'/assets/js/jquery.3.4.1.js');

    // adding bootstrap4 file
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() .'/assets/js/bootstrap.min.js');

    // adding isotope file
    wp_enqueue_script('isotope-script', get_template_directory_uri() .'/vendor/isotope/isotope.min.js');

    // adding magnific file
    wp_enqueue_script('magnific-script', get_template_directory_uri() .'/vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js');

    // adding owl-carousel file
    wp_enqueue_script('owl-carousel-script', get_template_directory_uri() .'/vendor/owl-carousel/js/owl.carousel.min.js');

    // adding bootstrap4 file
    wp_enqueue_script('main-file', get_template_directory_uri() .'/assets/js/main.js');
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

 function add_link_atts($atts){
     $atts['class'] = 'nav-item nav-link';
     return $atts;
 }

 add_filter('nav_menu_link_attributes','add_link_atts');

?>