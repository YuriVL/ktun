<?php
/**
 * Displays header upper
 *
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
            Пон - Суб: 9:00 - 18:00pm
        </div>

        <!--Info Box-->
        <div class="upper-column info-box">
            <div class="icon-box"><span class="flaticon-location"></span>
            </div>
            ул. Ровчакова, 10
            <div class="light-text">Могилев</div>
        </div>

        <!--Info Box-->
        <div class="upper-column info-box">
            <div class="icon-box"><span class="flaticon-smartphone-call"></span>
            </div>
            +(375) 298 48 98 74
            <div class="light-text"><?php echo get_bloginfo('admin_email');?></div>
        </div>
    </div>

</div>
  