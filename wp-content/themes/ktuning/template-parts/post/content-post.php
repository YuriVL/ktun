<?php
/**
 * Displays post content
 */

$date = dateConvert($post->post_modified);
$images = acf_photo_gallery('gallery', $post->ID);
$link = get_permalink($post->ID);
?>

<!--Default Blog Post-->
<div class="default-blog-post">
    <div class="inner-box">
        <figure id="slider" class="image-box flexslider">
            <div class="date"><span class="day"><?php echo $date['day']?></span><?php echo $date['mounth_short']."-".$date['year']?></div>
            <ul class="slides">
                <?php foreach ($images as $image){
                    $full_image_url = acf_photo_gallery_resize_image($image['full_image_url'], 960, 720);
                    ?>
                    <li>
                        <?php if( !empty($full_image_url) ){ ?>
                        <a href="<?php echo $link; ?>">
                            <img src="<?php echo $full_image_url?>" alt="<?php echo $image['caption']?>">
                        </a>
                        <?php }?>
                    </li>
                <?php }?>
            </ul>
        </figure>
        <div id="carousel" class="flexslider">
            <ul class="slides">
                <?php foreach ($images as $image){
                    $full_image_thumb = acf_photo_gallery_resize_image($image['thumbnail_image_url'], 150, 110);
                    ?>
                    <li>
                        <a href="<?php echo $link; ?>">
                            <img src="<?php echo $full_image_thumb ?>" alt="<?php echo $image['caption']?>">
                        </a>
                    </li>
                <?php }?>
            </ul>
        </div>

        <div class="post-info clearfix">
            <div class="clearfix">
                <h3><a href="<?php echo $link; ?>"><?php the_title(); ?></a></h3>
                <div class="post-meta">
                    <ul class="clearfix">
                        <li>
                            <span class="icon fa fa-eye"></span>
                            <?php pvc_post_views($post->Id);?> Просмотров
                        </li>
                        <li>
                            <span class="icon fa fa-comment-o"></span>
                            <?php echo $post->comment_count?>  Комментария
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="post-content">
            <div class="text">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>