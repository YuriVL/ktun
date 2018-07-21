<?php
/**
 * Displays testimonial section
 */
$obj = get_post_type_object( 'testimonial' );
$parallax = getServices(1, 'testimonial');
foreach ($parallax as $item) {
    $slideImage = get_the_post_thumbnail_url($item->ID, 'main-testimonial-thumb');
?>

<section class="testimonial-style-one" style="background-image:url(<?php echo $slideImage ?>);">
    <div class="auto-container">
        <div class="row">
            <div class="col-md-12">
                <div class="parallax-text-block pull-right">
                    <div class="sec-title"><h2><?php echo $item->post_title?></h2></div>
                    <?php echo $item->post_content?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>