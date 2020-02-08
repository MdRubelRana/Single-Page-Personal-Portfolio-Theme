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


    /* Add Experience Setting */
    // add a customizer setting
    // include new version
    $wp_customizer -> add_section('experience_brand', array(
        'title' => _('Experience Settings'),
        'priority' => 80
    ));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('experience_brand_image_01', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'experience_brand_image_01', array(
        'label' => _('Brand Image 1'),
        'description' => 'Change brand image 1',
        'section' => 'experience_brand'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('experience_brand_image_02', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'experience_brand_image_02', array(
        'label' => _('Brand Image 2'),
        'description' => 'Change brand image 2',
        'section' => 'experience_brand'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('experience_brand_image_03', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'experience_brand_image_03', array(
        'label' => _('Brand Image 3'),
        'description' => 'Change brand image 3',
        'section' => 'experience_brand'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('experience_brand_image_04', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'experience_brand_image_04', array(
        'label' => _('Brand Image 4'),
        'description' => 'Change brand image 4',
        'section' => 'experience_brand'
    )));


    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('experience_brand_image_05', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'experience_brand_image_05', array(
        'label' => _('Brand Image 5'),
        'description' => 'Change brand image 5',
        'section' => 'experience_brand'
    )));


    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('experience_brand_image_06', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'experience_brand_image_06', array(
        'label' => _('Brand Image 6'),
        'description' => 'Change brand image 6',
        'section' => 'experience_brand'
    )));


    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('experience_brand_image_07', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'experience_brand_image_07', array(
        'label' => _('Brand Image 7'),
        'description' => 'Change brand image 7',
        'section' => 'experience_brand'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('experience_brand_image_08', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'experience_brand_image_08', array(
        'label' => _('Brand Image 8'),
        'description' => 'Change brand image 8',
        'section' => 'experience_brand'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('experience_brand_image_09', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'experience_brand_image_09', array(
        'label' => _('Brand Image 9'),
        'description' => 'Change brand image 9',
        'section' => 'experience_brand'
    )));

    // adding header text
    $wp_customizer -> add_setting('experience_text_01', array(
        'capability' => 'edit_theme_options',
        'default' => '10'
    ));

    // adding text control
    $wp_customizer -> add_control('experience_text_01', array(
        'label' => _('Text 1'),
        'description' => 'Change text 1',
        'section' => 'experience_brand',
        'settings' => 'experience_text_01'
    ));

    // adding header text
    $wp_customizer -> add_setting('experience_text_02', array(
        'capability' => 'edit_theme_options',
        'default' => 'Years'
    ));

    // adding text control
    $wp_customizer -> add_control('experience_text_02', array(
        'label' => _('Text 2'),
        'description' => 'Change text 2',
        'section' => 'experience_brand',
        'settings' => 'experience_text_02'
    ));

    // adding header text
    $wp_customizer -> add_setting('experience_text_03', array(
        'capability' => 'edit_theme_options',
        'default' => 'Working'
    ));

    // adding text control
    $wp_customizer -> add_control('experience_text_03', array(
        'label' => _('Text 3'),
        'description' => 'Change text 3',
        'section' => 'experience_brand',
        'settings' => 'experience_text_03'
    ));

    // adding header text
    $wp_customizer -> add_setting('experience_text_04', array(
        'capability' => 'edit_theme_options',
        'default' => 'Experience'
    ));

    // adding text control
    $wp_customizer -> add_control('experience_text_04', array(
        'label' => _('Text 4'),
        'description' => 'Change text 4',
        'section' => 'experience_brand',
        'settings' => 'experience_text_04'
    ));


    /* Add Services Setting */
    // add a customizer setting
    // include new version
    $wp_customizer -> add_section('services_offers', array(
        'title' => _('Services'),
        'priority' => 80
    ));

    // adding header text
    $wp_customizer -> add_setting('services_offers_header', array(
        'capability' => 'edit_theme_options',
        'default' => 'SERVICES OFFERS'
    ));

    // adding text control
    $wp_customizer -> add_control('services_offers_header', array(
        'label' => _('Service Header'),
        'description' => 'Change header text',
        'section' => 'services_offers',
        'settings' => 'services_offers_header'
    ));


    // adding header text
    $wp_customizer -> add_setting('services_offers_sub_header', array(
        'capability' => 'edit_theme_options',
        'default' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour'
    ));

    // adding text control
    $wp_customizer -> add_control('services_offers_sub_header', array(
        'label' => _('Service Header Description'),
        'description' => 'Change header description text ',
        'section' => 'services_offers',
        'settings' => 'services_offers_sub_header'
    ));



    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('services_offers_image_01', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'services_offers_image_01', array(
        'label' => _('Image 1'),
        'description' => 'Change image 1',
        'section' => 'services_offers'
    )));

    // adding header text
    $wp_customizer -> add_setting('services_offers_titile_01', array(
        'capability' => 'edit_theme_options',
        'default' => 'WP DEVELOPER'
    ));

    // adding text control
    $wp_customizer -> add_control('services_offers_titile_01', array(
        'label' => _('Service Title 1'),
        'description' => 'Change title text 1',
        'section' => 'services_offers',
        'settings' => 'services_offers_titile_01'
    ));

    // adding header text
    $wp_customizer -> add_setting('services_offers_desc_01', array(
        'capability' => 'edit_theme_options',
        'default' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
    ));

    // adding text control
    $wp_customizer -> add_control('services_offers_desc_01', array(
        'label' => _('Description 1'),
        'description' => 'Change description text 1',
        'section' => 'services_offers',
        'settings' => 'services_offers_desc_01'
    ));


    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('services_offers_image_02', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'services_offers_image_02', array(
        'label' => _('Image 2'),
        'description' => 'Change image 2',
        'section' => 'services_offers'
    )));

    // adding header text
    $wp_customizer -> add_setting('services_offers_titile_02', array(
        'capability' => 'edit_theme_options',
        'default' => 'UX/UI DESING'
    ));

    // adding text control
    $wp_customizer -> add_control('services_offers_titile_02', array(
        'label' => _('Service Title 2'),
        'description' => 'Change title text 2',
        'section' => 'services_offers',
        'settings' => 'services_offers_titile_02'
    ));

    // adding header text
    $wp_customizer -> add_setting('services_offers_desc_02', array(
        'capability' => 'edit_theme_options',
        'default' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
    ));

    // adding text control
    $wp_customizer -> add_control('services_offers_desc_02', array(
        'label' => _('Description 2'),
        'description' => 'Change description text 2',
        'section' => 'services_offers',
        'settings' => 'services_offers_desc_02'
    ));



    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('services_offers_image_03', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'services_offers_image_03', array(
        'label' => _('Image 3'),
        'description' => 'Change image 3',
        'section' => 'services_offers'
    )));

    // adding header text
    $wp_customizer -> add_setting('services_offers_titile_03', array(
        'capability' => 'edit_theme_options',
        'default' => 'WEB DESIGN'
    ));

    // adding text control
    $wp_customizer -> add_control('services_offers_titile_03', array(
        'label' => _('Service Title 3'),
        'description' => 'Change title text 3',
        'section' => 'services_offers',
        'settings' => 'services_offers_titile_03'
    ));

    // adding header text
    $wp_customizer -> add_setting('services_offers_desc_03', array(
        'capability' => 'edit_theme_options',
        'default' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
    ));

    // adding text control
    $wp_customizer -> add_control('services_offers_desc_03', array(
        'label' => _('Description 3'),
        'description' => 'Change description text 3',
        'section' => 'services_offers',
        'settings' => 'services_offers_desc_03'
    ));



    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('services_offers_image_04', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'services_offers_image_04', array(
        'label' => _('Image 4'),
        'description' => 'Change image 4',
        'section' => 'services_offers'
    )));

    // adding header text
    $wp_customizer -> add_setting('services_offers_titile_04', array(
        'capability' => 'edit_theme_options',
        'default' => 'SEO OPTIMIZE'
    ));

    // adding text control
    $wp_customizer -> add_control('services_offers_titile_04', array(
        'label' => _('Service Title 4'),
        'description' => 'Change title text 4',
        'section' => 'services_offers',
        'settings' => 'services_offers_titile_04'
    ));

    // adding header text
    $wp_customizer -> add_setting('services_offers_desc_04', array(
        'capability' => 'edit_theme_options',
        'default' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
    ));

    // adding text control
    $wp_customizer -> add_control('services_offers_desc_04', array(
        'label' => _('Description 4'),
        'description' => 'Change description text 4',
        'section' => 'services_offers',
        'settings' => 'services_offers_desc_04'
    ));



    /* Add Recently Done Project Setting */
    // add a customizer setting
    // include new version
    $wp_customizer -> add_section('recent_project', array(
        'title' => _('Project Showcase Settings'),
        'priority' => 80
    ));

    // adding header text
    $wp_customizer -> add_setting('recent_project_header_01', array(
        'capability' => 'edit_theme_options',
        'default' => 'RECENTLY DONE PROJECT'
    ));

    // adding text control
    $wp_customizer -> add_control('recent_project_header_01', array(
        'label' => _('Section Header 1'),
        'description' => 'Change header text 1',
        'section' => 'recent_project',
        'settings' => 'recent_project_header_01'
    ));


    // adding header text
    $wp_customizer -> add_setting('recent_project_header_02', array(
        'capability' => 'edit_theme_options',
        'default' => 'QUALITY WORK'
    ));

    // adding text control
    $wp_customizer -> add_control('recent_project_header_02', array(
        'label' => _('Section Header 2'),
        'description' => 'Change header text 2',
        'section' => 'recent_project',
        'settings' => 'recent_project_header_02'
    ));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('recent_project_showcase_01', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'recent_project_showcase_01', array(
        'label' => _('Image 1'),
        'description' => 'Change image 1',
        'section' => 'recent_project'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('recent_project_showcase_02', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'recent_project_showcase_02', array(
        'label' => _('Image 2'),
        'description' => 'Change image 2',
        'section' => 'recent_project'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('recent_project_showcase_03', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'recent_project_showcase_03', array(
        'label' => _('Image 3'),
        'description' => 'Change image 3',
        'section' => 'recent_project'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('recent_project_showcase_03', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'recent_project_showcase_03', array(
        'label' => _('Image 3'),
        'description' => 'Change image 3',
        'section' => 'recent_project'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('recent_project_showcase_04', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'recent_project_showcase_04', array(
        'label' => _('Image 4'),
        'description' => 'Change image 4',
        'section' => 'recent_project'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('recent_project_showcase_05', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'recent_project_showcase_05', array(
        'label' => _('Image 5'),
        'description' => 'Change image 5',
        'section' => 'recent_project'
    )));


    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('recent_project_showcase_06', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'recent_project_showcase_06', array(
        'label' => _('Image 6'),
        'description' => 'Change image 6',
        'section' => 'recent_project'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('recent_project_showcase_07', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'recent_project_showcase_07', array(
        'label' => _('Image 7'),
        'description' => 'Change image 7',
        'section' => 'recent_project'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('recent_project_showcase_08', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'recent_project_showcase_08', array(
        'label' => _('Image 8'),
        'description' => 'Change image 8',
        'section' => 'recent_project'
    )));

    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('recent_project_showcase_09', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'recent_project_showcase_09', array(
        'label' => _('Image 9'),
        'description' => 'Change image 9',
        'section' => 'recent_project'
    )));





    /* Add Client Area Setting */
    // add a customizer setting
    // include new version
    $wp_customizer -> add_section('testimonials', array(
        'title' => _('Testimonials Settings'),
        'priority' => 80
    ));

    // adding header text
    $wp_customizer -> add_setting('testimonials_header', array(
        'capability' => 'edit_theme_options',
        'default' => 'CLIENT SAY ABOUT ME'
    ));

    // adding text control
    $wp_customizer -> add_control('testimonials_header', array(
        'label' => _('Testimonials Header'),
        'description' => 'Change header text',
        'section' => 'testimonials',
        'settings' => 'testimonials_header'
    ));


    // adding header text
    $wp_customizer -> add_setting('testimonials_header_sub_header', array(
        'capability' => 'edit_theme_options',
        'default' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour'
    ));

    // adding text control
    $wp_customizer -> add_control('testimonials_header_sub_header', array(
        'label' => _('Header Description'),
        'description' => 'Change header description text ',
        'section' => 'testimonials',
        'settings' => 'testimonials_header_sub_header'
    ));



    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('testimonials_client_image_01', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'testimonials_client_image_01', array(
        'label' => _('Image 1'),
        'description' => 'Change client image 1',
        'section' => 'testimonials'
    )));

    // adding header text
    $wp_customizer -> add_setting('testimonials_client_name_01', array(
        'capability' => 'edit_theme_options',
        'default' => 'MAC HILL'
    ));

    // adding text control
    $wp_customizer -> add_control('testimonials_client_name_01', array(
        'label' => _('Client Name 1'),
        'description' => 'Change client name 1',
        'section' => 'testimonials',
        'settings' => 'testimonials_client_name_01'
    ));


    // adding header text
    $wp_customizer -> add_setting('testimonials_client_desc_01', array(
        'capability' => 'edit_theme_options',
        'default' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour'
    ));

    // adding text control
    $wp_customizer -> add_control('testimonials_client_desc_01', array(
        'label' => _('Description 1'),
        'description' => 'Change client description 1',
        'section' => 'testimonials',
        'settings' => 'testimonials_client_desc_01'
    ));


    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('testimonials_client_image_02', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'testimonials_client_image_02', array(
        'label' => _('Image 2'),
        'description' => 'Change client image 2',
        'section' => 'testimonials'
    )));

    // adding header text
    $wp_customizer -> add_setting('testimonials_client_name_02', array(
        'capability' => 'edit_theme_options',
        'default' => 'JOHN MARTIN'
    ));

    // adding text control
    $wp_customizer -> add_control('testimonials_client_name_02', array(
        'label' => _('Client Name 2'),
        'description' => 'Change client name 2',
        'section' => 'testimonials',
        'settings' => 'testimonials_client_name_02'
    ));


    // adding header text
    $wp_customizer -> add_setting('testimonials_client_desc_02', array(
        'capability' => 'edit_theme_options',
        'default' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour'
    ));

    // adding text control
    $wp_customizer -> add_control('testimonials_client_desc_02', array(
        'label' => _('Description 2'),
        'description' => 'Change client description 2',
        'section' => 'testimonials',
        'settings' => 'testimonials_client_desc_02'
    ));



    /* Add Email Settings */
    // add a customizer setting
    // include new version
    $wp_customizer -> add_section('subscribe', array(
        'title' => _('Subscribe Settings'),
        'priority' => 80
    ));


    // allow us to add capability to the customizer setting
    $wp_customizer -> add_setting('subscribe_background_image', array(
        'capability' => 'edit_theme_options'
    ));

    // add control in the customizer setiings
    $wp_customizer -> add_control(new WP_Customize_Image_Control($wp_customizer, 'subscribe_background_image', array(
        'label' => _('Header Background Image'),
        'description' => 'Change background image',
        'section' => 'subscribe'
    )));


// adding header text
$wp_customizer -> add_setting('subscribe_header', array(
    'capability' => 'edit_theme_options',
    'default' => 'GET UPDATE FROM ANYWHERE'
));

// adding text control
$wp_customizer -> add_control('subscribe_header', array(
    'label' => _('Header Text'),
    'description' => 'Change header text',
    'section' => 'subscribe',
    'settings' => 'subscribe_header'
));


// adding header text
$wp_customizer -> add_setting('subscribe_sub_header', array(
    'capability' => 'edit_theme_options',
    'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, consequuntur.'
));

// adding text control
$wp_customizer -> add_control('subscribe_sub_header', array(
    'label' => _('Description'),
    'description' => 'Change description text',
    'section' => 'subscribe',
    'settings' => 'subscribe_sub_header'
));

    

 }

 add_action('customize_register','fn_customizer_settings');



?>