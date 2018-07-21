<?php
/**
 * Displays parallax section
 */
$obj = get_post_type_object( 'parallax' );
$parallax = getServices(1, 'parallax');
foreach ($parallax as $item) {
    $fields = get_fields($item->ID);
    $slideImage = get_the_post_thumbnail_url($item->ID, 'main-slider-thumb');
?>
<section class="parallax-content-section" style="background-image:url(<?php echo $slideImage ?>);">
    <div class="auto-container">
        <h2 class="wow tada" data-wow-delay="0ms" data-wow-duration="1500ms"><?php echo $item->post_title?>
            <strong><?php echo $item->post_content?></strong></h2>
        <a href="<?php echo $fields['link']; ?>" class="theme-btn btn-style-two">Подробнее</a>
    </div>
</section>
<?php } ?>