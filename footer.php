</main>
    <!--  ======================= End Main Area ================================ -->

    <footer class="footer-area">
        <div class="container">
            <div class="">
                <div class="site-logo text-center py-4">
                <?php 
                        if(function_exists('the_custom_logo')){
                            the_custom_logo();
                        }
                        else{
                            bloginfo('name');
                        }
                    ?>
                </div>
                <div class="social text-center">
                    <h5 class="text-uppercase">Follow me</h5>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="copyrights text-center">
                    <p class="para">
                        This template is made by
                        <a href="https://www.mdrubel.info" target="_blank"><span style="color: var(--primary-color);">Md. Rubel Rana</span></a> | Copyright ©2020 All rights reserved.
                    </p>
                </div>
            </div>
        </div>
        
    </footer>


    <?php wp_footer();?>
</body>

</html>