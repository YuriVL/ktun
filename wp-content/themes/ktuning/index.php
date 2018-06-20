<?php
/*
Template Name: Шаблон главная страница
*/
get_header(); ?>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header">

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <?php get_template_part('template-parts/header/header', 'upper'); ?>
                </div>
            </div>

            <!--Header-Lower-->
            <div class="header-lower">
                <!-- Main Menu -->
                <?php if (has_nav_menu('header-menu')) : ?>
                    <div class="auto-container">
                        <div class="nav-outer clearfix">
                            <?php get_template_part('template-parts/navigation/navigation', 'header-menu'); ?>
                        </div><!-- .wrap -->
                    </div><!-- .navigation-top -->
                <?php endif; ?>
            </div>
            <!--Sticky Header-->
            <?php if (has_nav_menu('sticky-menu')) : ?>
                <div class="sticky-header">
                    <div class="auto-container clearfix">
                        <?php get_template_part('template-parts/navigation/navigation', 'sticky-menu'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <!--End Bounce In Header-->
        </header>
        <!--End Main Header -->


        <!--Main Slider-->
        <section class="main-slider">

            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <?php
                        $sliders = getMainSlider();
                        foreach ($sliders  as $slide) {
                            $slideImage = get_the_post_thumbnail_url($slide->ID, 'main-slider-thumb' );
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
                                    <h2><?php echo $slide->post_title ?> <br><?php echo $slide->post_excerpt ?> </h2>
                                </div>

                                <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="30"
                                     data-y="center"
                                     data-voffset="50" data-speed="1500" data-start="0" data-easing="easeOutExpo"
                                     data-splitin="none" data-splitout="none" data-elementdelay="0.01"
                                     data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                                    <div class="italic-text">"Качественно, прозрачно и легко"</div>
                                </div>

                                <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="30"
                                     data-y="center"
                                     data-voffset="110" data-speed="1500" data-start="1000" data-easing="easeOutExpo"
                                     data-splitin="none" data-splitout="none" data-elementdelay="0.01"
                                     data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                                    <a href="#" class="theme-btn btn-style-one margin-right-20">Подробнее<span
                                                class="fa fa-caret-right"></span></a>
                                    <a href="#" class="theme-btn btn-style-two">Связаться</a>
                                </div>

                            </li>
                        <?php } ?>
                    </ul>

                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </section>

        <!--Featured Services-->
        <section class="featured-services sec-pdd-80">
            <div class="auto-container">
                <!--Section Title-->
                <div class="sec-title">
                    <h2>Автосервис Ktuning</h2>
                </div>

                <!--Box Container-->
                <div class="container-box anim-5-all">
                    <div class="col-lg-6 col-sm-6 single-what-we-do clearfix">
                        <div class="img-wrap ">
                            <img src="<?php echo IMG_DIR ?>/gallery/f-image-1.jpg" alt="">
                            <div class="overlay">
                                <div class="link">
                                    <a href="#" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="content padding-800">
                            <h3>Специалисты</h3>
                            <p>Работы осуществляются теми, кто являются профессионалами высочайшего класса</p>
                            <a class="theme-btn read-more" href="#">Подробнее </span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 single-what-we-do clearfix">
                        <div class="img-wrap ">
                            <img src="<?php echo IMG_DIR ?>/gallery/f-image-2.jpg" alt="">
                            <div class="overlay">
                                <div class="link">
                                    <a href="#" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="content padding-800">
                            <h3>Техническое обслуживание</h3>
                            <p>Выявляем неисправности и поломки и составляем рекомендации по ремонту</p>
                            <a class="theme-btn read-more" href="#">Подробнее </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 single-what-we-do clearfix content-left">
                        <div class="img-wrap ">
                            <img src="<?php echo IMG_DIR ?>/gallery/f-image-3.jpg" alt="">
                            <div class="overlay">
                                <div class="link">
                                    <a href="#" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="content padding-800">
                            <h3>Отношения</h3>
                            <p>Индивидуальный подход к каждому клиенту, бонусная система</p>
                            <a class="theme-btn read-more" href="#">Подробнее </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 single-what-we-do clearfix content-left">
                        <div class="img-wrap ">
                            <img src="<?php echo IMG_DIR ?>/gallery/f-image-4.jpg" alt="">
                            <div class="overlay">
                                <div class="link">
                                    <a href="#" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="content padding-800">
                            <h3>Цены</h3>
                            <p>В автосервисе «Ktuning» действуют прозрачные цены на ремонт автомобилей. </p>
                            <a class="theme-btn read-more" href="#">Подробнее </a>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>
                <!--Box Container End-->

            </div>
        </section>

        <!--Services Style Two-->
        <section class="services-style-two sec-pdd-bot-70">
            <div class="auto-container">
                <!--Section Title-->
                <div class="sec-title">
                    <h2>Услуги автосервиса</h2>
                </div>
                <div class="row clearfix">

                    <!--Service Block-->
                    <div class="service-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="count-number">01</div>
                            <div class="icon-box"><span class="flaticon-transport-1"></span>
                            </div>
                            <h4>Тормозная система</h4>
                            <div class="text">Диагностика, обслуживание и ремонт тормозной системы</div>
                            <div class="btn-box"><a href="service-single.html"
                                                    class="theme-btn read-more">Подробнее </a>
                            </div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft itm-mgn-top-499" data-wow-delay="300ms"
                             data-wow-duration="1500ms">
                            <div class="count-number">02</div>
                            <div class="icon-box"><span class="flaticon-transport-5"></span>
                            </div>
                            <h4>Ремонт подвески</h4>
                            <div class="text">Диагностика и ремонт подвески и ходовой части автомобилей</div>
                            <div class="btn-box"><a href="service-single.html"
                                                    class="theme-btn read-more">Подробнее </a>
                            </div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft itm-mgn-top-40" data-wow-delay="600ms"
                             data-wow-duration="1500ms">
                            <div class="count-number">03</div>
                            <div class="icon-box"><span class="flaticon-gear"></span>
                            </div>
                            <h4>Ремонт двигателей</h4>
                            <div class="text">Диагностика и ремонт дизельных и бензиновых двигателей автомобилей любой
                                марки
                            </div>
                            <div class="btn-box"><a href="service-single.html"
                                                    class="theme-btn read-more">Подробнее </a>
                            </div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft margin-top-40" data-wow-delay="0ms"
                             data-wow-duration="1500ms">
                            <div class="count-number">04</div>
                            <div class="icon-box"><span class="flaticon-transport-4"></span>
                            </div>
                            <h4>Компьютерная диагностика</h4>
                            <div class="text">Компьютерная диагностика <br> авто</div>
                            <div class="btn-box"><a href="service-single.html"
                                                    class="theme-btn read-more">Подробнее </a>
                            </div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft margin-top-40" data-wow-delay="300ms"
                             data-wow-duration="1500ms">
                            <div class="count-number">05</div>
                            <div class="icon-box"><span class="flaticon-car-3"></span>
                            </div>
                            <h4>Автоэлектрика</h4>
                            <div class="text">Диагностика и ремонт электрооборудования автомобиля</div>
                            <div class="btn-box"><a href="service-single.html"
                                                    class="theme-btn read-more">Подробнее </a>
                            </div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft margin-top-40" data-wow-delay="600ms"
                             data-wow-duration="1500ms">
                            <div class="count-number">06</div>
                            <div class="icon-box"><span class="flaticon-transport-6"></span>
                            </div>
                            <h4>Сварка</h4>
                            <div class="text">Ремонт выхлопной системы, <br> кузовные работы</div>
                            <div class="btn-box"><a href="service-single.html"
                                                    class="theme-btn read-more">Подробнее </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!--Parallax Content Section-->
        <section class="parallax-content-section"
                 style="background-image:url(<?php echo IMG_DIR ?>/background/image-2.jpg);">
            <div class="auto-container">
                <h2 class="wow tada" data-wow-delay="0ms" data-wow-duration="1500ms">Чип-тюнинг
                    <strong>двигателя</strong></h2>
                <a href="chip.html" class="theme-btn btn-style-two">Подробнее</a>
            </div>
        </section>

        <!--About Style Two-->
        <section class="about-style-two sec-pdd-90-80">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Image Column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <figure class="featured-image"><img class="width-1"
                                                                    src="<?php echo IMG_DIR ?>/resource/featured-image-27.jpg"
                                                                    alt="">
                                </figure>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img class="width-1" src="<?php echo IMG_DIR ?>/resource/featured-image-28.jpg" alt="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img class="width-1 itm-mgn-top-30-499"
                                     src="<?php echo IMG_DIR ?>/resource/featured-image-29.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <!--Content Column-->
                    <div class="content-column col-md-6 col-sm-12 col-xs-12 itm-mgn-top-40">
                        <!--Section Title-->
                        <div class="sec-title">
                            <h2>часто задаваемые вопросы</h2>
                        </div>

                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                            <!--Accordion Box-->
                            <ul class="accordion-box padding-0">

                                <!--Block-->
                                <li class="accordion block margin-bot-10">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                                    class="icon icon-minus fa fa-minus"></span>
                                        </div>
                                        Стоимость ремонта авто в вашем автосервисе?
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <p>Стоимость рассчитывается исходя из потраченного времени на ремонт авто и
                                                сложности выполняемых работ.</p>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block margin-bot-10">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                                    class="icon icon-minus fa fa-minus"></span>
                                        </div>
                                        Есть ли гарантии на выполненные работы?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>Мы предоставляет гарантии на все выполненные работы по ремонту авто,
                                                техническому обслуживанию.</p>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block margin-bot-10">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                                    class="icon icon-minus fa fa-minus"></span>
                                        </div>
                                        Запчасти каких производителей лучше использовать?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>Мы работаем только с проверенными поставщаками и производителями
                                                запчастей. Вы можете воспользоваться нашей услуго подбора запчастей,
                                                либо обратиться за консультацией к нашим специалистам</p>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block margin-bot-10">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                                    class="icon icon-minus fa fa-minus"></span>
                                        </div>
                                        Подготавливаете ли вы авто к прохождению технического осмотра?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>Наш автосервис предоставляет широкий спектор услуг по ремонту, а также
                                                техническому обслуживанию автомобилей, в том числе и подготовка к
                                                прохождению технического осмотра.</p>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                                    class="icon icon-minus fa fa-minus"></span>
                                        </div>
                                        Что может служить причиной повысившегося расхода топлива авто?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>Причины могут быть различные: некачественное топливо, изношенное
                                                состояние цилиндров, поршней, поршневых колец, неисправная работа ГРМ,
                                                засоренный воздушный фильтр и пр. Обращайтесь в наш автосервис для
                                                установления конкретной причины.</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                            <!--End Accordion Box-->

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--Gallery Section / Style Two-->
        <section class="gallery-section full-width style-two padding-top-0">
            <div class="auto-container">

                <!--Section Title-->
                <div class="sec-title">
                    <h2>Галерея</h2>
                </div>

            </div>

            <div class="outer-box clearfix">

                <!--Big Column-->
                <div class="big-column pull-left clearfix">

                    <!--Default Portfolio Item-->
                    <div class="col-md-12 col-sm-12 col-xs-12 default-portfolio-item">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?php echo IMG_DIR ?>/gallery/7.jpg" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="portfolio.html">Замена ДВС</a></h3>
                                        <div class="text"> с 2.0 TDI на 2.5 TDI</div>
                                        <a href="<?php echo IMG_DIR ?>/gallery/big-image.jpg"
                                           class="lightbox-image option-btn"
                                           title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                                    class="flaticon-eye"></span></a>
                                        <a href="portfolio.html" class="option-btn"><span class="flaticon-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-md-6 col-sm-6 col-xs-12 default-portfolio-item">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?php echo IMG_DIR ?>/gallery/8.jpg" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="portfolio.html">Замена ДВС</a></h3>
                                        <div class="text">Мотор в сборе с КПП и ЭБУ</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-md-6 col-sm-6 col-xs-12 default-portfolio-item">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?php echo IMG_DIR ?>/gallery/9.jpg" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="portfolio.html">Замена ДВС</a></h3>
                                        <div class="text">ABS прошивать под ЭБУ 2.5 TDI</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--Big Column-->
                <div class="big-column pull-right clearfix">

                    <!--Default Portfolio Item-->
                    <div class="col-md-12 col-sm-12 col-xs-12 default-portfolio-item">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?php echo IMG_DIR ?>/gallery/11.jpg" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="portfolio.html">CLEAN & PAINT</a></h3>
                                        <div class="text">Mercedes Benz Company Car</div>
                                        <a href="<?php echo IMG_DIR ?>/gallery/big-image.jpg"
                                           class="lightbox-image option-btn"
                                           title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                                    class="flaticon-eye"></span></a>
                                        <a href="portfolio.html" class="option-btn"><span class="flaticon-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-md-6 col-sm-6 col-xs-12 default-portfolio-item">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?php echo IMG_DIR ?>/gallery/12.jpg" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="portfolio.html">CLEAN & PAINT</a></h3>
                                        <div class="text">Mercedes Benz Company Car</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-md-6 col-sm-6 col-xs-12 default-portfolio-item">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?php echo IMG_DIR ?>/gallery/13.jpg" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="portfolio.html">CLEAN & PAINT</a></h3>
                                        <div class="text">Mercedes Benz Company Car</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--Medium Column-->
                <div class="medium-column clearfix">

                    <!--Default Portfolio Item-->
                    <div class="col-md-12 col-sm-12 col-xs-12 default-portfolio-item">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?php echo IMG_DIR ?>/gallery/10.jpg" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="portfolio.html">CLEAN & PAINT</a></h3>
                                        <div class="text">Mercedes Benz Company Car</div>
                                        <a href="<?php echo IMG_DIR ?>/gallery/big-image.jpg"
                                           class="lightbox-image option-btn"
                                           title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                                    class="flaticon-eye"></span></a>
                                        <a href="portfolio.html" class="option-btn"><span class="flaticon-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Medium Column-->
                <div class="medium-column clearfix">

                    <!--Default Portfolio Item-->
                    <div class="col-md-12 col-sm-12 col-xs-12 default-portfolio-item">
                        <div class="inner-box">
                            <figure class="image-box"><img src="<?php echo IMG_DIR ?>/gallery/14.jpg" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="portfolio.html">CLEAN & PAINT</a></h3>
                                        <div class="text">Mercedes Benz Company Car</div>
                                        <a href="<?php echo IMG_DIR ?>/gallery/big-image.jpg"
                                           class="lightbox-image option-btn"
                                           title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                                    class="flaticon-eye"></span></a>
                                        <a href="portfolio.html" class="option-btn"><span class="flaticon-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <div class="text-center margin-top-40"><a href="portfolio.html" class="theme-btn btn-style-one">Больше</a>
            </div>
        </section>

        <!--Find Advisor-->
        <section class="find-service sec-pdd-90-80">
            <div class="auto-container">
                <div class="content-outer">
                    <!--Image-->
                    <figure class="floated-image wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                                src="<?php echo IMG_DIR ?>/resource/advisor-image-1.jpg" alt="">
                    </figure>

                    <div class="row clearfix">
                        <div class="col-lg-7 co-md-8 col-sm-6 col-xs-12 pull-right">
                            <div class="form-outer">

                                <div class="sec-title">
                                    <h2>запись на диагностику</h2>
                                </div>

                                <div class="default-form">
                                    <form method="post" action="contact.html">

                                        <div class="form-group">
                                            <input type="text" name="name" value="" placeholder="Имя">
                                        </div>

                                        <div class="form-group">
                                            <select name="category">
                                                <option>Выбери услугу</option>
                                                <option>Car Inspection</option>
                                                <option>Brakes Service</option>
                                                <option>Engine Inspection</option>
                                                <option>Engine Upgrade</option>
                                                <option>Wheel Changing</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="phone" value="" placeholder="Желаемая дата"
                                                   id="datepicker">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Email">
                                        </div>

                                        <button type="submit" class="theme-btn btn-style-one">Записаться
                                        </button>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Fun Facts Section-->
        <!--<section class="fun-fact-section" style="background-image:url(images/background/image-1.jpg);">
            <div class="auto-container">
                <div class="fact-counter">
                    <div class="clearfix">

                        <!--Column-->
        <!--<div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
            <div class="inner">
                <div class="icon-box"><span class="flaticon-tool-1"></span>
                </div>
                <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="570">0</span>
                </div>
                <h4 class="counter-title">Heavy Matarials</h4>
            </div>
        </div>

        <!--Column-->
        <!--<div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
            <div class="inner">
                <div class="icon-box"><span class="flaticon-wrench-tool-in-a-hand-inside-a-house-shape"></span>
                </div>
                <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="48">0</span>
                </div>
                <h4 class="counter-title">Expert Engineer</h4>
            </div>
        </div>

        <!--Column-->
        <!--<div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
            <div class="inner">
                <div class="icon-box"><span class="flaticon-transport-6"></span>
                </div>
                <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="2310">0</span>
                </div>
                <h4 class="counter-title">Satisfied Clients</h4>
            </div>
        </div>

        <!--Column-->
        <!-- <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
             <div class="inner">
                 <div class="icon-box"><span class="flaticon-wrench"></span>
                 </div>
                 <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="2500">0</span>+</div>
                 <h4 class="counter-title">Trusted Worker</h4>
             </div>
         </div>


     </div>
    </div>
    </div>
    </section>-->

        <!--News Section-->
        <section class="news-section sec-pdd-80-90">
            <div class="auto-container">
                <!--Section Title-->
                <div class="sec-title">
                    <h2>Последние работы</h2>
                </div>
                <div class="row clearfix">

                    <!--News Style One-->
                    <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="image-box">
                                <a href="blog-single.html"><img src="<?php echo IMG_DIR ?>/resource/blog-image-1.jpg"
                                                                alt="">
                                </a>
                            </figure>
                            <div class="post-meta">
                                <ul class="clearfix">
                                    <li><span class="day">16</span>Июн-2018</li>
                                    <li>
                                        <div class="icon"><span class="fa fa-comment-o"></span>
                                        </div>
                                        7-комментариев
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fa fa-heart-o"></span>
                                        </div>
                                        40-Likes
                                    </li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h3><a href="blog-single.html">Замена люка Passat B6</a></h3>
                                <div class="text">После 20(0) км/ч люк катапультировался, т.к. крепления были приклеены
                                    на
                                    (жевачку), которая засохла
                                </div>
                                <a href="portfolio.html" class="theme-btn btn-style-one">Подробнее </a>
                            </div>
                        </div>
                    </div>

                    <!--News Style One-->
                    <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInRight itm-mgn-top-499" data-wow-delay="0ms"
                             data-wow-duration="1500ms">
                            <figure class="image-box">
                                <a href="blog-single.html"><img src="<?php echo IMG_DIR ?>/resource/blog-image-2.jpg"
                                                                alt="">
                                </a>
                            </figure>
                            <div class="post-meta">
                                <ul class="clearfix">
                                    <li><span class="day">20</span>Jun-2016</li>
                                    <li>
                                        <div class="icon"><span class="fa fa-comment-o"></span>
                                        </div>
                                        5-Comments
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fa fa-heart-o"></span>
                                        </div>
                                        26-Likes
                                    </li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h3><a href="blog-single.html">Опель зафира 2</a></h3>
                                <div class="text">Как замена ГРМ переходит в замену сопутствующих деталей. Демпферный
                                    шкив
                                    развалился на две части.
                                </div>
                                <a href="portfolio.html" class="theme-btn btn-style-one">Подробнее </a>
                            </div>
                        </div>
                    </div>

                    <!--News Style One-->
                    <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInRight itm-mgn-top-499" data-wow-delay="0ms"
                             data-wow-duration="1500ms">
                            <figure class="image-box">
                                <a href="blog-single.html"><img src="<?php echo IMG_DIR ?>/resource/blog-image-16.jpg"
                                                                alt="">
                                </a>
                            </figure>
                            <div class="post-meta">
                                <ul class="clearfix">
                                    <li><span class="day">20</span>Jun-2016</li>
                                    <li>
                                        <div class="icon"><span class="fa fa-comment-o"></span>
                                        </div>
                                        5-Comments
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fa fa-heart-o"></span>
                                        </div>
                                        26-Likes
                                    </li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h3><a href="blog-single.html">Полный ремонт суппотра</a></h3>
                                <div class="text">Покраска с балончика(с практической целью). Есть нюансы во внешнем
                                    виде.
                                </div>
                                <a href="portfolio.html" class="theme-btn btn-style-one">Подробнее </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!--Testimonials Style One-->
        <section class="testimonial-style-one"
                 style="background-image:url(<?php echo IMG_DIR ?>/background/image-3.jpg);">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="parallax-text-block pull-right">
                            <div class="sec-title"><h2>Требуется срочный ремонт авто? </h2></div>

                            <p>Не знаете, кому доверить автомобиль?
                                Желаете недорого получить услуги профессионалов и быть спокойными за сохранность
                                транспорта?
                                Обращайтесь в «KTUNING»!
                                Мы оказываем комплексные услуги по ремонту авто.
                                Предлагаем сэкономить и время, и деньги,
                                так как главный принцип компании — качество не должно стоить слишком дорого.
                                И это действительно так, ведь используемые нами технологии быстрого авторемонта
                                позволяют достигать максимальных результатов без выполнения трудоемких операций.
                                А многолетний опыт восстановления пластиковых, алюминиевых и иных материалов,
                                включая композитные, гарантирует устранение даже сложных повреждений автомобиля.
                                Цены при этом не превышают среднерыночных значений по Могилеву и Могилевской области.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<section class="testimonial-style-one" style="background-image:url(images/background/image-3.jpg);">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-2">
                        <div class="carousel-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                            <!--Testimonial carousel one / Centered Style-->
        <!--<div class="testimonial-carousel-one centered-style single-item-carousel">
            <!--Slide Item-->
        <!--<div class="slide-item">
        <figure class="image-box"><img src="<?php echo IMG_DIR ?>/resource/testi-image-1.jpg" alt="">
        </figure>
        <div class="text-content color-fff">“Capitalise on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps”</div>
        <div class="info-style-one">
            <h4>DONALD SIMPSON</h4>
            <div class="designation">Gold user from 2 years</div>
        </div>
    </div>
    <!--Slide Item-->
        <!--<div class="slide-item">
        <figure class="image-box"><img src="<?php echo IMG_DIR ?>/resource/testi-image-1.jpg" alt="">
        </figure>
        <div class="text-content color-fff">“Capitalise on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps”</div>
        <div class="info-style-one">
            <h4>DONALD SIMPSON</h4>
            <div class="designation">Gold user from 2 years</div>
        </div>
    </div>
    <!--Slide Item-->
        <!--<div class="slide-item">
        <figure class="image-box"><img src="<?php echo IMG_DIR ?>/resource/testi-image-1.jpg" alt="">
        </figure>
        <div class="text-content color-fff">“Capitalise on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps”</div>
        <div class="info-style-one">
            <h4>DONALD SIMPSON</h4>
            <div class="designation">Gold user from 2 years</div>
        </div>
    </div>
</div>

</div>

</div>

</div>
</div>
</section>-->

        <!--Client Logos-->
        <!-- <section class="client-logos">
         <div class="auto-container">
             <div class="row anim-5-all clearfix">

                 <div class="client-carsoule">
                     <div class="slide-item margin">
                         <a href="#"><img src="<?php echo IMG_DIR ?>/clients/logo-6.png" alt="" title="">
                         </a>
                     </div>
                     <div class="slide-item margin">
                         <a href="#"><img src="<?php echo IMG_DIR ?>/clients/logo-7.png" alt="" title="">
                         </a>
                     </div>
                     <div class="slide-item margin">
                         <a href="#"><img src="<?php echo IMG_DIR ?>/clients/logo-8.png" alt="" title="">
                         </a>
                     </div>
                     <div class="slide-item margin">
                         <a href="#"><img src="<?php echo IMG_DIR ?>/clients/logo-9.png" alt="" title="">
                         </a>
                     </div>
                     <div class="slide-item margin">
                         <a href="#"><img src="<?php echo IMG_DIR ?>/clients/logo-10.png" alt="" title="">
                         </a>
                     </div>
                 </div>
                 <!--logos-->
        <!--</div>
    </div>
    </section>-->


        <!--Main Footer-->
        <footer class="main-footer">

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <!--Big Column-->
                        <div class="big-column col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget about-widget">
                                        <div class="footer-logo">
                                            <a href="index.html"><img src="<?php echo IMG_DIR ?>/logo.png" alt="">
                                            </a>
                                        </div>
                                        <div class="widget-content">
                                            <div class="text"> Только качественный ремонт авто по доступным ценам.</div>
                                            <ul class="contact-info">
                                                <li><span class="icon flaticon-location"></span> ул. Ровчакова, 10,
                                                    Могилев,
                                                    РБ
                                                </li>
                                                <li><span class="icon flaticon-mail"></span> mail@ktuning.by</li>
                                                <li><span class="icon flaticon-smartphone-call"></span> 8(029) 637-11-05
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget links-widget">
                                        <h2>УСЛУГИ</h2>
                                        <div class="widget-content">
                                            <ul class="list">
                                                <li><a href="#">ТОРМОЗНАЯ СИСТЕМА</a>
                                                </li>
                                                <li><a href="#">РЕМОНТ ПОДВЕСКИ</a>
                                                </li>
                                                <li><a href="#">РЕМОНТ ДВИГАТЕЛЕЙ</a>
                                                </li>
                                                <li><a href="#">ЧИСТКА АВТО</a>
                                                </li>
                                                <li><a href="#">АВТОЭЛЕКТРИКА</a>
                                                </li>
                                                <li><a href="#">ЗАМЕНА ДВИГАТЕЛЕЙ</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!--Big Column-->
                        <div class="big-column col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget posts-widget">
                                        <h2>Recent Posts</h2>
                                        <div class="widget-content">
                                            <!--Post-->
                                            <div class="post">
                                                <figure class="post-thumb">
                                                    <a href="#"><img
                                                                src="<?php echo IMG_DIR ?>/resource/post-thumb-1.jpg"
                                                                alt="">
                                                    </a>
                                                </figure>
                                                <h4><a href="#">Новость 1</a></h4>
                                                <div class="time"><span class="fa fa-calendar"></span> Jun 12,2016</div>
                                            </div>
                                            <!--Post-->
                                            <div class="post">
                                                <figure class="post-thumb">
                                                    <a href="#"><img
                                                                src="<?php echo IMG_DIR ?>/resource/post-thumb-2.jpg"
                                                                alt="">
                                                    </a>
                                                </figure>
                                                <h4><a href="#">Новость 2</a></h4>
                                                <div class="time"><span class="fa fa-calendar"></span> Jun 14,2016</div>
                                            </div>
                                            <!--Post-->
                                            <div class="post">
                                                <figure class="post-thumb">
                                                    <a href="#"><img
                                                                src="<?php echo IMG_DIR ?>/resource/post-thumb-3.jpg"
                                                                alt="">
                                                    </a>
                                                </figure>
                                                <h4><a href="#">Новость 3</a></h4>
                                                <div class="time"><span class="fa fa-calendar"></span> Jun 17,2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget subscribe-widget">
                                        <h2>SUBSCRIBE</h2>
                                        <div class="widget-content">

                                            <div class="newsletter-form">
                                                <form method="post" action="contact.html">
                                                    <div class="form-group">
                                                        <input type="email" name="email" value=""
                                                               placeholder="Enter your Email" required>
                                                        <button type="submit" class="theme-btn"><span
                                                                    class="fa fa-paper-plane-o"></span>
                                                        </button>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="text">Get latest news and updates</div>

                                            <div class="social-links">
                                                <ul class="clearfix">
                                                    <li><a href="#"><span class="icon fa fa-facebook-f"></span> Facebook</a>
                                                    </li>
                                                    <li><a href="#"><span class="icon fa fa-twitter"></span> Twitter</a>
                                                    </li>
                                                    <li><a href="#"><span class="icon fa fa-google-plus"></span> Goole
                                                            plus</a>
                                                    </li>
                                                    <li><a href="#"><span class="icon fa fa-linkedin"></span>
                                                            Linkedin</a>
                                                    </li>
                                                    <li><a href="#"><span class="icon fa fa-skype"></span> skype</a>
                                                    </li>
                                                    <li><a href="#"><span class="icon fa fa-whatsapp"></span> viber</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="text">Copyright &copy; Ktuning.by 2018</div>
                </div>
            </div>

        </footer>


    </div>

<?php get_footer();
