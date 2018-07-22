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

        <div class="sidebar-page-container sec-pdd-90">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Sidebar-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <aside class="sidebar about-sidebar">

                            <!-- Tabbed Links -->
                            <?php if (is_active_sidebar('side_right_category')) : ?>
                                <?php dynamic_sidebar('side_right_category'); ?>
                            <?php endif; ?>

                            <!-- Tabbed Links -->
                            <div class="sidebar-widget contact-info">
                                <div class="sidebar-title">
                                    <h3><?php echo get_bloginfo('name') ?> - <?php echo get_the_title() ?></h3>
                                </div>
                                <ul>
                                    <li>
                                        <span class="icon flaticon-location"></span> <?php echo strip_tags(get_theme_mod('address')); ?>
                                    </li>
                                    <li><span class="icon flaticon-mail"></span><?php echo get_theme_mod('mail'); ?>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-smartphone-call"></span><?php echo get_theme_mod('phone'); ?>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-clock-3"></span><?php echo get_theme_mod('work_time'); ?>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <!--Sidebar-->

                    <!--Content Side-->
                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <section class="content-section about-content">
                            <!--Default Video Box-->
                            <div class="normal-title">
                                <h3><?php the_title(); ?></h3>
                            </div>
                            <div class="text-block">
                                <?php
                                $content = apply_filters('the_content', $post->post_content);
                                echo $content;
                                ?>
                            </div>
                            <?php if ($pagename != 'contacts') { ?>
                                <!--Two Column-->
                                <div class="two-column">
                                    <?php get_template_part('template-parts/page/content', 'two-column'); ?>
                                </div>
                            <?php } ?>
                        </section>
                    </div>
                    <?php if ($pagename == 'contacts') { ?>
                        <!--Map Section-->
                        <section class="map-section">
                            <div class="map-outer">

                                <!--Map Canvas-->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6d00f98bdf928616437c22e1afe45d200834b9eff82c53092e7a8c184b53ba1f&amp;source=constructor"
                                        width="100%" height="520" frameborder="0"></iframe>

                            </div>
                        </section>
                    <?php } ?>
                    <!--Content Side-->
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/footer/footer', 'site'); ?>
    </div>
    <!--End pagewrapper-->

<?php get_footer();