<?php
/**
 * Displays sticky navigation *
 */
?>
<!--Logo-->
<div class="logo pull-left">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="img-responsive">
        <img src="<?php echo IMG_DIR ?>/logo-small.png" alt="<?php bloginfo( 'name' ); ?>">
    </a>
</div>

<!--Right Col-->
<div class="right-col pull-right">
    <!-- Main Menu -->
    <nav class="main-menu">
        <div class="navbar-header">
            <!-- Toggle Button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <?php wp_nav_menu( array(
            'theme_location' => 'sticky-menu',
            'menu_id'        => 'sticky-menu',
            'container'       => 'div',
            'container_class' => 'navbar-collapse collapse clearfix',
            'menu_class'      => 'navigation clearfix',
        ) ); ?>

    </nav>
    <!-- Main Menu End-->
</div>