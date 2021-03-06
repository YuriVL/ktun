<?php
/**
 * Displays featured section
 */


$obj = get_post_type_object( 'featured-services' );
$features = getServices(4, 'featured-services');
$h2 = $obj->label ?? '';
$i = 1;
$post_about = get_post(7);
$link = esc_url( apply_filters( 'the_permalink', get_permalink( $post_about ), $post_about ));
?>

<div class="auto-container">
    <div class="sec-title">
        <h1><?php echo $h2 ?></h1>
    </div>
    <!--Box Container-->
    <div class="container-box anim-5-all">
        <?php
        foreach ($features as $feature) {
            $class = ($i == 3 || $i == 4) ? 'content-left' : '';
            $image = get_the_post_thumbnail_url($feature->ID, 'main-feature-thumb');
            $alt = $feature->post_content . ' ' . $h2;
            ?>
            <div class="col-lg-6 col-sm-6 single-what-we-do clearfix <?php echo $class ?>">
                <div class="img-wrap ">
                    <img src="<?php echo $image ?>" alt="<?php echo $alt;?>">
                    <div class="overlay">
                        <div class="link">
                            <a href="<?php echo $link;?>" class="fa fa-link"></a>
                        </div>
                    </div>
                </div>
                <div class="content padding-800">
                    <h3><?php echo $feature->post_title ?></h3>
                    <p><?php echo $feature->post_content ?></p>
                    <a class="theme-btn read-more" href="<?php echo $link;?>">Подробнее</a>
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