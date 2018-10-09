<?php
/**
 * Displays main slider
 */ ?>
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <?php
            $sliders = getServices(3, 'main-slider');
            foreach ($sliders as $key=>$slide) {
                $fields = get_fields($slide->ID);
                $slideImage = get_the_post_thumbnail_url($slide->ID, 'main-slider-thumb');
                ?>
                <li data-transition="slidingoverlayleft" data-slotamount="1" data-masterspeed="1000"
                    data-thumb="<?php echo $slideImage ?>" data-saveperformance="off"
                    data-title="Awesome Title Here">
                    <img src="<?php echo $slideImage ?>" alt="" data-bgposition="center top"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat">

                    <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="30"
                         data-y="center"
                         data-voffset="-30" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                         data-splitin="none" data-splitout="none" data-elementdelay="0.01"
                         data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
						<?php if($key == 0){ ?>
                        <h1><?php echo $slide->post_title ?> 
							<?php echo $slide->post_excerpt ?> </h1>
						<?php } else { ?>
						<h2><?php echo $slide->post_title ?> 
							<?php echo $slide->post_excerpt ?> </h2>
						<?php } ?>
                    </div>

                    <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="30"
                         data-y="center"
                         data-voffset="110" data-speed="1500" data-start="1000" data-easing="easeOutExpo"
                         data-splitin="none" data-splitout="none" data-elementdelay="0.01"
                         data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                        <a href="<?php echo $fields['link']; ?>" class="theme-btn btn-style-one margin-right-20">
                            <?php echo $fields['button1'] ?>
                            <span class="fa fa-caret-right"></span></a>
                    </div>

                </li>
            <?php } ?>
        </ul>
        <div class="tp-bannertimer"></div>
    </div>
</div>
