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
                    if (have_posts()) :
                    $i = 1;
                    /* Start the Loop */
                    while (have_posts()) : the_post();
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
                    endwhile; // End of the loop.

                    global $wp_query;
                    if ($wp_query->max_num_pages > 1) : ?>
                    <script>
                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                    </script>
                    <div class="btn-box text-center padd-top-20"><a id="true_loadmore" href="#" class="theme-btn btn-style-two">Больше</a>
                        <?php
                        endif;
                        else :
                            get_template_part('template-parts/post/content', 'none');
                        endif;

                        ?>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/footer/footer', 'site'); ?>

    </div>
    <!--End pagewrapper-->
<?php get_footer();