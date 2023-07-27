<!-- Footer -->
<footer class="footer">
    <div class="footer_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 order-lg-1 order-3">
                    <div class="footer_image d-flex flex-column align-items-lg-start align-items-center justify-content-end">
                        <div><img class="last_pic" src="<?php echo get_template_directory_uri(); ?>/img/footer.png" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-2 order-1">
                    <div class="footer_contact_info">
                        <div class="footer_logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Футбол матч онлайн"></a></div>
                        <div class="footer_contact_list">
                            <ul>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>E-mail</div>
                                    <a href="mailto:<?php echo get_option('theme_footer_mail'); ?>">
                                        <?php echo get_option('theme_footer_mail'); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_bar_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
                        <nav class="footer_nav ml-md-auto order-md-2 order-1">
                            <?php
                                $args = array('theme_location' => 'footer', 'container'=> 'ul', 'menu_class' => 'd-flex flex-row align-items-start justify-content-start flex-wrap', 'menu_id' => 'footer-menu');
                                wp_nav_menu($args);
                                ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<?php   wp_footer() ?>
</div>
</body>

</html>