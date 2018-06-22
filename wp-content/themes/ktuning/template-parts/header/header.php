<!-- Preloader -->
<div class="preloader"></div>

<!-- Main Header-->
<header class="main-header">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <?php get_template_part('template-parts/header/header', 'upper'); ?>
        </div>
    </div>

    <!--Header-Lower-->
    <div class="header-lower">
        <!-- Main Menu -->
        <?php if (has_nav_menu('header-menu')) : ?>
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <?php get_template_part('template-parts/navigation/navigation', 'header-menu'); ?>
                </div><!-- .wrap -->
            </div><!-- .navigation-top -->
        <?php endif; ?>
    </div>
    <!--Sticky Header-->
    <?php if (has_nav_menu('sticky-menu')) : ?>
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <?php get_template_part('template-parts/navigation/navigation', 'sticky-menu'); ?>
            </div>
        </div>
    <?php endif; ?>
    <!--End Bounce In Header-->
</header>
<!--End Main Header -->
