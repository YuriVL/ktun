<?php
/**
 * Displays header breadcrumbs
 */
?>
<section class="page-title" style="background-image:url(<?php echo IMG_DIR ?>/background/page-title-1.jpg);">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title -->
            <div class="title-column col-md-6 col-sm-12 col-xs-12">
                <h1><?php echo wp_get_document_title(); ?></h1>
            </div>
            <!--Bread Crumb -->
            <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                <ul class="bread-crumb clearfix">
                    <?php the_breadcrumb() ?>
                </ul>
            </div>
        </div>
    </div>
</section>