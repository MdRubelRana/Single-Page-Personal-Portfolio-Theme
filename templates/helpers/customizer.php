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
        'description' => 'Change background image',
        'section' => 'header'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('header_image', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'header_image', array(
        'label' => _('Header Image'),
        'description' => 'Change personal image',
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


    /* Add About Us Setting */
    // add a customizer setting
    // include new version
    $wp_customizer -> add_section('body', array(
        'title' => _('About Us'),
        'priority' => 80
    ));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('about_us_image', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'about_us_image', array(
        'label' => _('About Image'),
        'description' => 'Change image',
        'section' => 'body'
    )));

    // adding header text
    $wp_customizer -> add_setting('about_us_text_field_01', array(
        'capability' => 'edit_theme_options',
        'default' => 'Let Me'
    ));

    // adding text control
    $wp_customizer -> add_control('about_us_text_control_01', array(
        'label' => _('Text 1'),
        'description' => 'Change text',
        'section' => 'body',
        'settings' => 'about_us_text_field_01'
    ));

    // adding header text
    $wp_customizer -> add_setting('about_us_text_field_02', array(
        'capability' => 'edit_theme_options',
        'default' => 'Introduce'
    ));

    // adding text control
    $wp_customizer -> add_control('about_us_text_control_02', array(
        'label' => _('Text 2'),
        'description' => 'Change text',
        'section' => 'body',
        'settings' => 'about_us_text_field_02'
    ));

    // adding header text
    $wp_customizer -> add_setting('about_us_text_field_03', array(
        'capability' => 'edit_theme_options',
        'default' => 'Myself'
    ));

    // adding text control
    $wp_customizer -> add_control('about_us_text_control_03', array(
        'label' => _('Text 3'),
        'description' => 'Change text',
        'section' => 'body',
        'settings' => 'about_us_text_field_03'
    ));

    // adding header text
    $wp_customizer -> add_setting('about_us_text_field_04', array(
        'capability' => 'edit_theme_options',
        'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error rerum iure obcaecati vel possimus officia maiores perferendis ut! Quos, perspiciatis.'
    ));

    // adding text control
    $wp_customizer -> add_control('about_us_text_control_04', array(
        'label' => _('Paragraph 1'),
        'description' => 'Change paragraph text',
        'section' => 'body',
        'settings' => 'about_us_text_field_04'
    ));

    // adding header text
    $wp_customizer -> add_setting('about_us_text_field_05', array(
        'capability' => 'edit_theme_options',
        'default' => 'It is a long established fact that a reader will be distracted by the readable content
        of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
        more-or-less normal distribution of letters, as opposed to using Content here, content
        here'
    ));

    // adding text control
    $wp_customizer -> add_control('about_us_text_control_05', array(
        'label' => _('Paragraph 2'),
        'description' => 'Change paragraph text',
        'section' => 'body',
        'settings' => 'about_us_text_field_05'
    ));

 }

 add_action('customize_register','fn_customizer_settings');



?>