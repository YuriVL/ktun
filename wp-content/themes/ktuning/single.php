<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

    <div class="page-wrapper">

        <!-- Main Header-->
        <?php get_template_part('template-parts/header/header'); ?>

        <!-- Main Breadcrumbs-->
        <?php get_template_part('template-parts/header/header', 'breadcrumbs'); ?>

        <div class="sidebar-page-container sec-pdd-90-80">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <!--Blog Section / Details-->
                        <section class="blog-section details no-padd-bottom no-padd-top">
                            <?php while (have_posts()) : the_post();
                                get_template_part('template-parts/post/content', 'post');
                            endwhile; // End of the loop.
                            ?>
                        </section>
                        <!-- Comment Form -->
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif; ?>
                    </div>
                    <!--Content Side-->

                    <!--Sidebar-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-left-40">
                        <aside class="sidebar">
                            <!-- Recent Articles -->
                            <?php if (is_active_sidebar('side_right_category')) : ?>
                                <?php dynamic_sidebar('side_right_category'); ?>
                            <?php endif; ?>
                            <!-- Popular Posts -->
                            <?php if (is_active_sidebar('side_right_last_posts')) : ?>
                                <?php dynamic_sidebar('side_right_last_posts'); ?>
                            <?php endif; ?>
                            <!-- Popular Tags -->
                            <?php if (is_active_sidebar('side_right_tags_posts')) : ?>
                                <?php dynamic_sidebar('side_right_tags_posts'); ?>
                            <?php endif; ?>
                        </aside>
                    </div>
                    <!--Sidebar-->

                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/footer/footer', 'site'); ?>
    </div>
    <!--End pagewrapper-->
<?php get_footer();