<?php
/**
 * Displays header upper
 */
?>

<div class="clearfix">

    <div class="pull-left logo-outer">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo IMG_DIR ?>/logo.png" alt="<?php bloginfo( 'name' ); ?>">
            </a>
        </div>
    </div>

    <div class="pull-right upper-right clearfix">

        <!--Info Box-->
        <div class="upper-column info-box">
            <div class="icon-box"><span class="flaticon-clock"></span>
            </div>
            <?php echo get_theme_mod('work_time'); ?>
        </div>

        <!--Info Box-->
        <div class="upper-column info-box">
            <div class="icon-box"><span class="flaticon-location"></span>
            </div>
            <?php echo get_theme_mod('address'); ?>
        </div>

        <!--Info Box-->
        <div class="upper-column info-box">
            <div class="icon-box"><span class="flaticon-smartphone-call"></span>
            </div>
            <?php echo get_theme_mod('phone'); ?>
            <div class="light-text"> <?php echo get_theme_mod('mail'); ?></div>
        </div>
    </div>

</div>
  