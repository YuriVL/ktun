<?php
/**
 * Displays featured section
 */


$obj = get_post_type_object( 'featured-services' );
$features = getServices(4, 'featured-services');
$h2 = $obj->label ?? '';
$i = 1;
?>

<div class="auto-container">
    <div class="sec-title">
        <h2><?php echo $h2 ?></h2>
    </div>
    <!--Box Container-->
    <div class="container-box anim-5-all">
        <?php
        foreach ($features as $feature) {
            $class = ($i == 3 || $i == 4) ? 'content-left' : '';
            $image = get_the_post_thumbnail_url($feature->ID, 'main-feature-thumb');
            ?>
            <div class="col-lg-6 col-sm-6 single-what-we-do clearfix <?php echo $class ?>">
                <div class="img-wrap ">
                    <img src="<?php echo $image ?>" alt="">
                    <div class="overlay">
                        <div class="link">
                            <a href="#" class="fa fa-link"></a>
                        </div>
                    </div>
                </div>
                <div class="content padding-800">
                    <h3><?php echo $feature->post_title ?></h3>
                    <p><?php echo $feature->post_content ?></p>
                    <a class="theme-btn read-more" href="#">Подробнее </span></a>
                </div>
            </div>
            <?php
            $i++;
        }
        ?>
        <div class="clearfix"></div>
    </div>
    <!--Box Container End-->
</div>