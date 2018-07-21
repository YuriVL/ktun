<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>
    <div class="page-wrapper">

        <!-- Main Header-->
        <?php get_template_part('template-parts/header/header'); ?>

        <!-- Main Breadcrumbs-->
        <?php get_template_part('template-parts/header/header', 'breadcrumbs'); ?>
        <?php
        /* Start the Loop */
        while (have_posts()) : the_post(); ?>
            <!--Contact Section-->
            <section class="contact-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-md-8 col-sm-6 col-xs-12">
                            <?php the_content() ?>
                        </div>

                        <!--Column-->
                        <div class="column col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <h2>Контактная информация</h2>
                                <div class="contact-info">
                                    <ul>
                                        <li><span class="icon flaticon-location"></span> ул. Ровчакова, 10, Могилев, РБ
                                        </li>
                                        <li><span class="icon flaticon-mail"></span> mail@ktuning.by</li>
                                        <li><span class="icon flaticon-smartphone-call"></span> +(375) 298 48 98 74</li>
                                        <li><span class="icon flaticon-clock-3"></span> Пон - Суб: 9:00 - 18:00pm</li>
                                    </ul>
                                </div>
                                <h3>Социальные группы</h3>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a>
                                    </li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a>
                                    </li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a>
                                    </li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a>
                                    </li>
                                    <li><a href="#"><span class="fa fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        <?php endwhile; // End of the loop.
        ?>

        <!--Map Section-->
        <section class="map-section">
            <div class="map-outer">

                <!--Map Canvas-->
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6d00f98bdf928616437c22e1afe45d200834b9eff82c53092e7a8c184b53ba1f&amp;source=constructor"
                        width="100%" height="520" frameborder="0"></iframe>

            </div>
        </section>

        <?php get_template_part('template-parts/footer/footer', 'site'); ?>

    </div>
    <!--End pagewrapper-->
<?php get_footer();
