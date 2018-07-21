<?php
/**
 * Displays services
 */

$obj = get_post_type_object('services');
$servises = getServices(6, 'services');
$h2 = $obj->label ?? '';
?>

<div class="auto-container">
    <!--Section Title-->
    <div class="sec-title">
        <h2><?php echo $h2 ?></h2>
    </div>
    <div class="row clearfix">
        <?php
        for ($i = 0; $i < 6; $i++) {
            $msI = $i + 1;
            $post = $servises[$i];
            $fields = get_fields($post->ID);
            $ms = (in_array($i, [0, 3])) ? 0 : ($ms + 300);
            ?>
            <!--Service Block-->
            <div class="service-block col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeInLeft margin-top-40 animated" data-wow-delay="<?php echo $ms ?>ms" data-wow-duration="1500ms">
                    <div class="count-number">0<?php echo $msI ?></div>
                    <div class="icon-box"><span class="<?php echo $post->post_excerpt ?>"></span>
                    </div>
                    <h4><?php echo $post->post_title ?></h4>
                    <div class="text"><?php echo $post->post_content ?></div>
                    <div class="btn-box"><a href="<?php echo $fields['link']; ?>" class="theme-btn read-more">
                            Подробнее </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>