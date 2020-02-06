<?php 
/**
 * 
 * Theme Name: Wordpress Customizer Settings
 * 
 */

 // WP_Customize_Control

 function fn_customizer_settings($wp_customizer){

    // add a customizer setting
    // include new version
    $wp_customizer -> add_section('header', array(
        'title' => _('Header Settings'),
        'priority' => 70
    ));


    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('header_background_image', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'header_background_image', array(
        'label' => _('Header Background Image'),
        'section' => 'header'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('header_image', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'header_image', array(
        'label' => _('Header Image'),
        'section' => 'header'
    )));

    // adding header text
    $wp_customizer -> add_setting('header_text_field_01', array(
        'capability' => 'edit_theme_options',
        'default' => 'Hey'
    ));

    // adding text control
    $wp_customizer -> add_control('header_text_control_01', array(
        'label' => _('Greeting'),
        'description' => 'Change greeting text',
        'section' => 'header',
        'settings' => 'header_text_field_01'
    ));

    // adding header text
    $wp_customizer -> add_setting('header_text_field_02', array(
        'capability' => 'edit_theme_options',
        'default' => 'I am Jack'
    ));

    // adding text control
    $wp_customizer -> add_control('header_text_control_02', array(
        'label' => _('Your Name'),
        'description' => 'Change your name',
        'section' => 'header',
        'settings' => 'header_text_field_02'
    ));

    // adding header text
    $wp_customizer -> add_setting('header_text_field_03', array(
        'capability' => 'edit_theme_options',
        'default' => 'Wordpress Developer'
    ));

    // adding text control
    $wp_customizer -> add_control('header_text_control_03', array(
        'label' => _('Profession'),
        'description' => 'Change text',
        'section' => 'header',
        'settings' => 'header_text_field_03'
    ));

 }

 add_action('customize_register','fn_customizer_settings');



?>