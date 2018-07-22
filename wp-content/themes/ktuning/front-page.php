<?php
/**
 * The front page template file
 */

get_header(); ?>

    <div class="page-wrapper">

        <!-- Main Header-->
        <?php get_template_part('template-parts/header/header'); ?>

        <!--Main Slider-->
        <section class="main-slider">
            <?php get_template_part('template-parts/front/content', 'slider'); ?>
        </section>

        <!--Featured Services-->
        <section class="featured-services sec-pdd-80">
            <?php get_template_part('template-parts/front/content', 'featured'); ?>
        </section>

        <!--Services Style Two-->
        <section class="services-style-two sec-pdd-bot-70">
            <?php get_template_part('template-parts/front/content', 'services'); ?>
        </section>

        <!--Parallax Content Section-->
        <?php get_template_part('template-parts/front/content', 'parallax'); ?>

        <!--About-->
        <section class="about-style-two sec-pdd-90-80">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Image Column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <figure class="featured-image"><img class="width-1"
                                                                    src="<?php echo IMG_DIR ?>/resource/featured-image-27.jpg"
                                                                    alt="">
                                </figure>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img class="width-1" src="<?php echo IMG_DIR ?>/resource/featured-image-28.jpg" alt="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img class="width-1 itm-mgn-top-30-499"
                                     src="<?php echo IMG_DIR ?>/resource/featured-image-29.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <?php get_template_part('template-parts/front/content', 'faq'); ?>
                </div>
            </div>
        </section>

        <!--Gallery Section / Style Two-->
        <?php if (is_active_sidebar('gallery-section')) : ?>
            <?php dynamic_sidebar('gallery-section'); ?>
        <?php endif; ?>

        <!--Find Advisor-->
        <section class="find-service sec-pdd-90-80">
            <div class="auto-container">
                <div class="content-outer">
                    <!--Image-->
                    <figure class="floated-image wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                            src="<?php echo IMG_DIR ?>/resource/advisor-image-1.jpg" alt="">
                    </figure>

                    <div class="row clearfix">
                        <div class="col-lg-7 co-md-8 col-sm-6 col-xs-12 pull-right">
                            <div id="record" class="form-outer">

                                <div class="sec-title">
                                    <h2>запись на диагностику</h2>
                                </div>

                                <div class="default-form">
                                    <?php echo do_shortcode("[contact-form-7 id=\"229\" title=\"Форма на главной странице\"]"); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--News Section-->
        <section class="news-section sec-pdd-bot-70">
            <?php if (is_active_sidebar('main_posts')) : ?>
                <?php dynamic_sidebar('main_posts'); ?>
            <?php endif; ?>
        </section>


        <!--Testimonials Style One-->
        <?php get_template_part('template-parts/front/content', 'testimonial'); ?>

        <?php get_template_part('template-parts/footer/footer', 'site'); ?>

    </div>

<?php get_footer();

