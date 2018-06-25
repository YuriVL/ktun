<?php
$date = dateConvert($post->post_modified);
$images = acf_photo_gallery('gallery', $post->ID);
$link = get_permalink($post->ID);
?>

        <!--Default Blog Post-->
        <div class="default-blog-post col-md-6 col-sm-6 col-xs-12">
            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <figure class="image-box">
                    <a href="<?php echo $link ?>">
                        <img src="<?php echo $full_image_url = acf_photo_gallery_resize_image($images[0]['full_image_url'], 535, 300); ?>" alt="<?php the_title();?>">
                    </a>
                    <div class="date"><span class="day"><?php echo $date['day']?></span><?php echo $date['mounth_short']."-".$date['year']?></div>
                </figure>
                <div class="post-info clearfix">
                    <div class="clearfix">
                        <h3><a href="<?php echo $link ?>"><?php the_title()?></a></h3>
                        <div class="post-meta">
                            <ul class="clearfix">
                                <li><a href="#"><span class="icon fa fa-heart-o"></span> 40 отметок «Нравится»</a>
                                </li>
                                <li><a href="#"><span class="icon fa fa-comment-o"></span> 22 Комментариев</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="post-content">
                    <div class="text"><?php echo textSubstring($post->post_content, 200) ?></div>
                    <div class="btn-box"><a href="<?php echo $link ?>" class="theme-btn btn-style-one">Подробнее<span class="fa fa-long-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>


