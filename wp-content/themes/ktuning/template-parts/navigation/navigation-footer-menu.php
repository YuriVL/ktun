<?php
/**
 * Displays footer navigation
 */
?>

<div class="footer-widget links-widget">
    <h2>УСЛУГИ</h2>
    <div class="widget-content">
        <?php wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'menu_id'        => 'footer-menu',
            'container'       => false,
            'menu_class'      => 'list',
        ) ); ?>
    </div>
</div>