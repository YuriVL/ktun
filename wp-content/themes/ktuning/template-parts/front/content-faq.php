<?php
/**
 * Displays faq
 */
$obj = get_post_type_object('faq');
$faqs = getServices(5, 'faq');
$h2 = $obj->label ?? '';
$i = 0;
?>
<!--Content Column-->
<div class="content-column col-md-6 col-sm-12 col-xs-12 itm-mgn-top-40">
    <!--Section Title-->
    <div class="sec-title">
        <h2><?php echo $h2 ?></h2>
    </div>

    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
        <!--Accordion Box-->
        <ul class="accordion-box padding-0">
            <?php foreach ($faqs as $faq) {
                $active = ($i == 0) ? 'active' : '';
                $current = ($i == 0) ? 'current' : '';
                ?>
                <!--Block-->
                <li class="accordion block margin-bot-10">
                    <div class="acc-btn <?php echo $active; ?>">
                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                    class="icon icon-minus fa fa-minus"></span>
                        </div>
                        <?php echo $faq->post_title ?>
                    </div>
                    <div class="acc-content <?php echo $current; ?>">
                        <div class="content">
                            <p><?php echo $faq->post_content ?></p>
                        </div>
                    </div>
                </li>
                <?php
                $i++;
            } ?>
        </ul>
        <!--End Accordion Box-->

    </div>

</div>