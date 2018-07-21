<!--Main Footer-->
<footer class="main-footer">

    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <img src="<?php echo IMG_DIR ?>/logo.png" alt="<?php bloginfo( 'name' ); ?>">
                                    </a>
                                </div>
                                <div class="widget-content">
                                    <div class="text"><?php echo get_theme_mod('footer_social'); ?></div>
                                    <ul class="contact-info">
                                        <li>
                                            <span class="icon flaticon-location"></span>
                                            <?php echo get_theme_mod('address'); ?>
                                        </li>
                                        <li>
                                            <span class="icon flaticon-mail"></span>
                                            <?php echo get_theme_mod('mail'); ?>
                                        </li>
                                        <li>
                                            <span class="icon flaticon-smartphone-call"></span>
                                            <?php echo get_theme_mod('phone'); ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <?php if (has_nav_menu('footer-menu')) : ?>
                                <?php get_template_part('template-parts/navigation/navigation', 'footer-menu'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <?php if (is_active_sidebar('footer_posts')) : ?>
                                <?php dynamic_sidebar('footer_posts'); ?>
                            <?php endif; ?>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget subscribe-widget">
                                <h2>Мы в социальных сетях</h2>
                                <div class="widget-content">
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="<?php echo get_theme_mod('footer_facebook'); ?>" target="_blank"><span class="icon fa fa-facebook-f"></span> Facebook</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod('footer_instagram'); ?>" target="_blank"><span class="icon fa fa-instagram"></span> Instagram</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod('footer_viber'); ?>"><span class="icon fa fa-whatsapp"></span> Viber</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod('footer_skype'); ?>"><span class="icon fa fa-skype"></span> Skype</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod('footer_vkontakte');?> target="_blank"><span class="icon icon fa fa-vk"></span> Vkontakte</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod('footer_ok'); ?>" target="_blank"><span class="icon fa fa-odnoklassniki"></span>Ok</a>                                            </li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="text"><?php echo get_theme_mod('copyright').' '.date('Y'); ?></div>
        </div>
    </div>

</footer>
