<?php
/**
 * Displays top navigation
 */
?>

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
            'theme_location' => 'header-menu',
            'menu_id'        => 'header-menu',
            'container'       => 'div',
            'container_class' => 'navbar-collapse collapse clearfix',
            'menu_class'      => 'navigation clearfix',
        ) ); ?>
</nav>
<!-- Main Menu End-->
<div class="btn-outer"><a href="<?php echo get_site_url();?>/#record" class="appt-btn theme-btn">Запись на диагностику</a></div>
