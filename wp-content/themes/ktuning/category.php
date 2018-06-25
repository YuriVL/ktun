<?php
/*
Template Name: Категория работы
Template Post Type: page
*/

get_header();
?>
    <div class="page-wrapper">

        <!-- Main Header-->
        <?php get_template_part('template-parts/header/header'); ?>

        <!-- Main Breadcrumbs-->
        <?php get_template_part('template-parts/header/header', 'breadcrumbs'); ?>

        <section class="blog-section sec-pdd-90">
            <div class="auto-container">
                <div class="outer-box">
                    <?php
                    $i = 1;
                    /* Start the Loop */
                    while (have_posts()) {
                        the_post();
                        if ($i == 1 || ($i % 3 == 0)) { ?>
                            <!--Month Block-->
                            <div class="month-block">
                            <div class="row clearfix">
                        <?php }

                        get_template_part('template-parts/page/content', 'page');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                        if ($i % 2 == 0) { ?>
                            </div>
                            </div>
                            <!--Month Block-->
                            <?php
                        }
                        $i++;
                    } // End of the loop.
                    ?>
                </div>
                <div class="btn-box text-center padd-top-20"><a href="index.html" class="theme-btn btn-style-two">Больше</a>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/footer/footer', 'site'); ?>

    </div>
    <!--End pagewrapper-->
<?php get_footer();