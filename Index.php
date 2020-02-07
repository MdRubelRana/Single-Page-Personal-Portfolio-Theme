<?php 
    get_header();
?>


        <!--  ======================= Start Banner Area =======================  -->
        <section class="site-banner" style="background: url('<?php echo esc_url(get_theme_mod('header_background_image'));?>') no-repeat 0% 50%;">
            <div class="container" >
                <div class="row">
                    <div class="col-lg-6 col-md-12 site-title">
                        <!-- <h3 class="title-text">Hey</h3> -->
                        <?php if(get_theme_mod('header_text_field_01')):?>
                        <h3 class="title-text text-capitalize"><?php echo get_theme_mod('header_text_field_01');?></h3>
                        <?php endif;?>

                        <!-- <h1 class="title-text text-uppercase">I am Rubel</h1> -->
                        <?php if(get_theme_mod('header_text_field_02')):?>
                        <h1 class="title-text text-uppercase"><?php echo get_theme_mod('header_text_field_02');?></h1>
                        <?php endif;?>
                      

                        <!-- <h4 class="title-text text-uppercase">Wordpress Developer</h4> -->
                        <?php if(get_theme_mod('header_text_field_03')):?>
                        <h4 class="title-text text-capitalize"><?php echo get_theme_mod('header_text_field_03');?></h4>
                        <?php endif;?>
                      
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <button type="button" class="btn button primary-button mr-4 text-uppercase">hire
                                    me</button>
                                <button type="button" class="btn button secondary-button text-uppercase">Get cv</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <!-- <img src="./img/banner/banner-image.png" alt="banner-img" class="img-fluid"> -->
                        <?php if(get_theme_mod('header_image')):?>
                        <img src="<?php echo esc_url(get_theme_mod('header_image'));?>" alt="banner-img" class="img-fluid">
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </section>
        <!--  ======================= End Banner Area =======================  -->

        <!--  ========================= About Area ==========================  -->

        <section class="about-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <!-- <img src="./img/about-us.png" alt="About us" class="img-fluid"> -->
                            <?php if(get_theme_mod('about_us_image')):?>
                            <img src="<?php echo esc_url(get_theme_mod('about_us_image'));?>" alt="About us" class="img-fluid">
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                        <h2 class="text-uppercase pt-5">
                            <span>
                                <?php if(get_theme_mod('about_us_text_field_01')):?>
                                <?php echo get_theme_mod('about_us_text_field_01');?>
                                <?php endif;?>
                            </span>
                            <span>
                                <?php if(get_theme_mod('about_us_text_field_02')):?>
                                <?php echo get_theme_mod('about_us_text_field_02');?>
                                <?php endif;?>
                            </span>
                            <span>
                                <?php if(get_theme_mod('about_us_text_field_03')):?>
                                <?php echo get_theme_mod('about_us_text_field_03');?>
                                <?php endif;?>
                            </span>
                        </h2>
                        <div class="paragraph py-4 w-75">
                            <p class="para">
                                <?php if(get_theme_mod('about_us_text_field_04')):?>
                                <?php echo get_theme_mod('about_us_text_field_04');?>
                                <?php endif;?>
                            </p>
                            <p class="para">
                                <?php if(get_theme_mod('about_us_text_field_04')):?>
                                <?php echo get_theme_mod('about_us_text_field_04');?>
                                <?php endif;?>
                            </p>
                        </div>
                        <button type="button" class="btn button primary-button text-uppercase">Download cv</button>
                    </div>
                </div>
            </div>
        </section>

        <!--  ========================= End About Area ==========================  -->

        <!--  ======================== Brand Area ==============================  -->

        <section class="brand-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="first-row row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <!-- <img src="./img/brands/logo1.png" alt="Brand-1 "> -->
                                    <?php if(get_theme_mod('experience_brand_image_01')):?>
                                    <img src="<?php echo esc_url(get_theme_mod('experience_brand_image_01'));?>" alt="Brand-1 ">
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <!-- <img src="./img/brands/logo2.png" alt="Brand-2 "> -->
                                    <?php if(get_theme_mod('experience_brand_image_02')):?>
                                    <img src="<?php echo esc_url(get_theme_mod('experience_brand_image_02'));?>" alt="Brand-2 ">
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <!-- <img src="./img/brands/logo3.png" alt="Brand-3 "> -->
                                    <?php if(get_theme_mod('experience_brand_image_03')):?>
                                    <img src="<?php echo esc_url(get_theme_mod('experience_brand_image_03'));?>" alt="Brand-3 ">
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <!-- <img src="./img/brands/logo4.png" alt="Brand-4"> -->
                                    <?php if(get_theme_mod('experience_brand_image_04')):?>
                                    <img src="<?php echo esc_url(get_theme_mod('experience_brand_image_04'));?>" alt="Brand-4 ">
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <!-- <img src="./img/brands/logo5.png" alt="Brand-5 "> -->
                                    <?php if(get_theme_mod('experience_brand_image_05')):?>
                                    <img src="<?php echo esc_url(get_theme_mod('experience_brand_image_05'));?>" alt="Brand-5 ">
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <!-- <img src="./img/brands/logo6.png" alt="Brand-6"> -->
                                    <?php if(get_theme_mod('experience_brand_image_06')):?>
                                    <img src="<?php echo esc_url(get_theme_mod('experience_brand_image_06'));?>" alt="Brand-6 ">
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <!-- <img src="./img/brands/logo7.png" alt="Brand-7 "> -->
                                    <?php if(get_theme_mod('experience_brand_image_07')):?>
                                    <img src="<?php echo esc_url(get_theme_mod('experience_brand_image_07'));?>" alt="Brand-7 ">
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <!-- <img src="./img/brands/logo8.png" alt="Brand-8 "> -->
                                    <?php if(get_theme_mod('experience_brand_image_08')):?>
                                    <img src="<?php echo esc_url(get_theme_mod('experience_brand_image_08'));?>" alt="Brand-8 ">
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <!-- <img src="./img/brands/logo9.png" alt="Brand-9"> -->
                                    <?php if(get_theme_mod('experience_brand_image_09')):?>
                                    <img src="<?php echo esc_url(get_theme_mod('experience_brand_image_09'));?>" alt="Brand-9 ">
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="experience-area">
                            <div class="d-flex flex-row years-area">
                                <h2 class="p-3 years">
                                    <?php if(get_theme_mod('experience_text_01')):?>
                                    <?php echo get_theme_mod('experience_text_01');?>
                                    <?php endif;?>
                                </h2>
                                <h2 class="text-capitalize">
                                    <span>
                                        <?php if(get_theme_mod('experience_text_02')):?>
                                        <?php echo get_theme_mod('experience_text_02');?>
                                        <?php endif;?>
                                    </span>
                                    <span>
                                        <?php if(get_theme_mod('experience_text_03')):?>
                                        <?php echo get_theme_mod('experience_text_03');?>
                                        <?php endif;?>
                                    </span>
                                    <span>
                                        <?php if(get_theme_mod('experience_text_04')):?>
                                        <?php echo get_theme_mod('experience_text_04');?>
                                        <?php endif;?>
                                    </span>
                                </h2>
                            </div>
                            <div class="d-flex flex-row flex-wrap call-area">
                                <span><i class="fa-phone-alt fa-3x px-3"></i></span>
                                <div class="call-now">
                                    <a href="#" class="text-uppercase h4 font-roboto">Call Now</a>
                                    <span class="font-roboto py-2">(+91)-800-555-4986</span>
                                </div>
                            </div>
                            <div class="bg-panel"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ======================== End Brand Area ==============================  -->

        <!--  ====================== Start Services Area =============================  -->

        <section class="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center services-title">
                        <h1 class="text-uppercase title-text">
                            <?php if(get_theme_mod('services_offers_header')):?>
                            <?php echo get_theme_mod('services_offers_header');?>
                            <?php endif;?>
                        </h1>
                        <p class="para">
                            <?php if(get_theme_mod('services_offers_sub_header')):?>
                            <?php echo get_theme_mod('services_offers_sub_header');?>
                            <?php endif;?>
                        </p>
                    </div>
                </div>
                <div class="container services-list">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <!-- <img src="./img/services/s1.png" alt="Services-1"> -->
                                    <?php if(get_theme_mod('services_offers_image_01')):?>
                                    <img src="<?php echo esc_url(get_theme_mod('services_offers_image_01'));?>" alt="Services-1">
                                    <?php endif;?>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">
                                        <?php if(get_theme_mod('services_offers_titile_01')):?>
                                        <?php echo get_theme_mod('services_offers_titile_01');?>
                                        <?php endif;?>
                                    </h5>
                                    <p class="card-text text-secondary">
                                        <?php if(get_theme_mod('services_offers_desc_01')):?>
                                        <?php echo get_theme_mod('services_offers_desc_01');?>
                                        <?php endif;?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <!-- <img src="./img/services/s2.png" alt="Services-2"> -->
                                    <?php if(get_theme_mod('services_offers_image_02')):?>
                                    <img src="<?php echo esc_url(get_theme_mod('services_offers_image_02'));?>" alt="Services-2">
                                    <?php endif;?>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">
                                        <?php if(get_theme_mod('services_offers_titile_02')):?>
                                        <?php echo get_theme_mod('services_offers_titile_02');?>
                                        <?php endif;?>
                                    </h5>
                                    <p class="card-text text-secondary">
                                        <?php if(get_theme_mod('services_offers_desc_02')):?>
                                        <?php echo get_theme_mod('services_offers_desc_02');?>
                                        <?php endif;?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <!-- <img src="./img/services/s3.png" alt="Services-3"> -->
                                    <?php if(get_theme_mod('services_offers_image_03')):?>
                                    <img src="<?php echo esc_url(get_theme_mod('services_offers_image_03'));?>" alt="Services-3">
                                    <?php endif;?>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">
                                        <?php if(get_theme_mod('services_offers_titile_03')):?>
                                        <?php echo get_theme_mod('services_offers_titile_03');?>
                                        <?php endif;?>
                                    </h5>
                                    <p class="card-text text-secondary">
                                        <?php if(get_theme_mod('services_offers_desc_03')):?>
                                        <?php echo get_theme_mod('services_offers_desc_03');?>
                                        <?php endif;?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <!-- <img src="./img/services/s4.png" alt="Services-4"> -->
                                    <?php if(get_theme_mod('services_offers_image_04')):?>
                                    <img src="<?php echo esc_url(get_theme_mod('services_offers_image_04'));?>" alt="Services-4">
                                    <?php endif;?>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">
                                        <?php if(get_theme_mod('services_offers_titile_04')):?>
                                        <?php echo get_theme_mod('services_offers_titile_04');?>
                                        <?php endif;?>
                                    </h5>
                                    <p class="card-text text-secondary">
                                        <?php if(get_theme_mod('services_offers_desc_04')):?>
                                        <?php echo get_theme_mod('services_offers_desc_04');?>
                                        <?php endif;?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ====================== End Services Area =============================  -->

        <!--  ======================= Project Area =============================  -->

        <section class="project-area">
            <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1">Recently Done Project</h1>
                    <h1 class="text-uppercase title-h1">Quality Work</h1>
                </div>

                <div class="button-group">
                    <button type="button" class="active" id="btn1" data-filter="*">All</button>
                    <button type="button" data-filter=".popular">Popular</button>
                    <button type="button" data-filter=".latest">Latest</button>
                    <button type="button" data-filter=".following">Following</button>
                    <button type="button" data-filter=".upcoming">Upcoming</button>
                </div>

                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p1.jpg">
                                    <img src="./img/portfolio/p1.jpg" alt="portfolio-1" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Minimul Desing</h4>
                                <span class="text-secondary">Latest, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p2.jpg">
                                    <img src="./img/portfolio/p2.jpg" alt="portfolio-2" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Paint Wall</h4>
                                <span class="text-secondary">Popular, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p3.jpg">
                                    <img src="./img/portfolio/p3.jpg" alt="portfolio-3" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Female light</h4>
                                <span class="text-secondary">Popular, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                                    <img src="./img/portfolio/p4.jpg" alt="portfolio-4" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Fourth Air</h4>
                                <span class="text-secondary">Upcoming, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p5.jpg">
                                    <img src="./img/portfolio/p5.jpg" alt="portfolio-5" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Muliple fown</h4>
                                <span class="text-secondary">Upcoming, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p6.jpg">
                                    <img src="./img/portfolio/p6.jpg" alt="portfolio-6" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Together sign</h4>
                                <span class="text-secondary">Following, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p7.jpg">
                                    <img src="./img/portfolio/p7.jpg" alt="portfolio-7" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Green Heaven</h4>
                                <span class="text-secondary">Following, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p8.jpg">
                                    <img src="./img/portfolio/p8.jpg" alt="portfolio-8" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Fly Male</h4>
                                <span class="text-secondary">Following, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p9.jpg">
                                    <img src="./img/portfolio/p9.jpg" alt="portfolio-9" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Camera Lens</h4>
                                <span class="text-secondary">Upcoming, Portfolio</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ======================= End Project Area =============================  -->

        <!--  ======================== About Me Area ==============================  -->

        <section class="about-area">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="about-title">
                            <h1 class="text-uppercase title-h1">Client Say about me</h1>
                            <p class="para">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, deleniti
                                recusandae. Esse incidunt rem repellendus ab voluptates maxime? Nemo, numquam!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container carousel py-lg-5">
                <div class="owl-carousel owl-theme">
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">John Martin</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Mac Hill</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">John Martin</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Mac Hill</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">John Martin</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Mac Hill</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!--  ======================== End About Me Area ==============================  -->

        <!--  ========================== Subscribe me Area ============================  -->
        <section class="subscribe-us-area">
            <div class="container subscribe">
                <div class="row">
                    <div class="col-lg-12 text-center subscribe-title">
                        <h4 class="text-uppercase">Get Update From anywhere</h4>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
                            consequuntur.</p>
                    </div>
                </div>
                <div class="d-sm-flex justify-content-center">
                    <form class="w-50">
                        <div class="row d-flex flex-row flex-wrap">
                            <div class="col input-textbox">
                                <input type="text" id="txtemail" class="form-control" placeholder="Email">
                            </div>
                            <div class="col">
                                <div class="btn-submit">
                                    <button type="submit" class="btn btn-success float-right">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--  ========================== End Subscribe me Area ============================  -->


    <?php 
        get_footer();
    ?>