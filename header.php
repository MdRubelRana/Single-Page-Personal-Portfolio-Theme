<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head();?>


</head>

<body style="background: url('<?php echo esc_url(get_theme_mod('body_background_image'));?>') no-repeat;">


    <!--  ======================= Start Header Area ============================== -->

    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <?php 
                        if(function_exists('the_custom_logo')){
                            the_custom_logo();
                        }
                        else{
                            bloginfo('name');
                        }
                    ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <?php 
                        if(has_nav_menu('primary-menu')){
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'container' => '',
                                'items_wrap' => '<ul class="navbar-nav nav-item">%3$s</ul>'
                            ));
                        }
                    ?>
                </div>
            </nav>
        </div>
    </header>

    <!--  ======================= End Header Area ============================== -->

    <!--  ======================= Start Main Area ================================ -->
    <main class="site-main">