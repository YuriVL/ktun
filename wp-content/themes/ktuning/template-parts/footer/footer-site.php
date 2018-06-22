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
                                    <a href="index.html"><img src="<?php echo IMG_DIR ?>/logo.png" alt="">
                                    </a>
                                </div>
                                <div class="widget-content">
                                    <div class="text"> Только качественный ремонт авто по доступным ценам.</div>
                                    <ul class="contact-info">
                                        <li><span class="icon flaticon-location"></span> ул. Ровчакова, 10,
                                            Могилев,
                                            РБ
                                        </li>
                                        <li><span class="icon flaticon-mail"></span> mail@ktuning.by</li>
                                        <li><span class="icon flaticon-smartphone-call"></span> 8(029) 637-11-05
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
                            <div class="footer-widget posts-widget">
                                <h2>Recent Posts</h2>
                                <div class="widget-content">
                                    <!--Post-->
                                    <div class="post">
                                        <figure class="post-thumb">
                                            <a href="#"><img
                                                    src="<?php echo IMG_DIR ?>/resource/post-thumb-1.jpg"
                                                    alt="">
                                            </a>
                                        </figure>
                                        <h4><a href="#">Новость 1</a></h4>
                                        <div class="time"><span class="fa fa-calendar"></span> Jun 12,2016</div>
                                    </div>
                                    <!--Post-->
                                    <div class="post">
                                        <figure class="post-thumb">
                                            <a href="#"><img
                                                    src="<?php echo IMG_DIR ?>/resource/post-thumb-2.jpg"
                                                    alt="">
                                            </a>
                                        </figure>
                                        <h4><a href="#">Новость 2</a></h4>
                                        <div class="time"><span class="fa fa-calendar"></span> Jun 14,2016</div>
                                    </div>
                                    <!--Post-->
                                    <div class="post">
                                        <figure class="post-thumb">
                                            <a href="#"><img
                                                    src="<?php echo IMG_DIR ?>/resource/post-thumb-3.jpg"
                                                    alt="">
                                            </a>
                                        </figure>
                                        <h4><a href="#">Новость 3</a></h4>
                                        <div class="time"><span class="fa fa-calendar"></span> Jun 17,2016</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget subscribe-widget">
                                <h2>SUBSCRIBE</h2>
                                <div class="widget-content">

                                    <div class="newsletter-form">
                                        <form method="post" action="contact.html">
                                            <div class="form-group">
                                                <input type="email" name="email" value=""
                                                       placeholder="Enter your Email" required>
                                                <button type="submit" class="theme-btn"><span
                                                        class="fa fa-paper-plane-o"></span>
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="text">Get latest news and updates</div>

                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="icon fa fa-facebook-f"></span> Facebook</a>
                                            </li>
                                            <li><a href="#"><span class="icon fa fa-twitter"></span> Twitter</a>
                                            </li>
                                            <li><a href="#"><span class="icon fa fa-google-plus"></span> Goole
                                                    plus</a>
                                            </li>
                                            <li><a href="#"><span class="icon fa fa-linkedin"></span>
                                                    Linkedin</a>
                                            </li>
                                            <li><a href="#"><span class="icon fa fa-skype"></span> skype</a>
                                            </li>
                                            <li><a href="#"><span class="icon fa fa-whatsapp"></span> viber</a>
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
            <div class="text">Copyright &copy; Ktuning.by 2018</div>
        </div>
    </div>

</footer>
