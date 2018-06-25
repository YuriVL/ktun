<?php
/**
 * The front page template file
 */

get_header(); ?>

    <div class="page-wrapper">

        <!-- Main Header-->
        <?php get_template_part('template-parts/header/header'); ?>

        <!--Main Slider-->
        <section class="main-slider">
            <?php get_template_part('template-parts/front/content', 'slider'); ?>
        </section>

        <!--Featured Services-->
        <section class="featured-services sec-pdd-80">
            <?php get_template_part('template-parts/front/content', 'featured'); ?>
        </section>

        <!--Services Style Two-->
        <section class="services-style-two sec-pdd-bot-70">
            <?php get_template_part('template-parts/front/content', 'services'); ?>
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

        <!--About-->
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
                    <?php get_template_part('template-parts/front/content', 'faq'); ?>
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

        <!--News Section-->
        <section class="news-section sec-pdd-bot-70">
            <?php if (is_active_sidebar('main_posts')) : ?>
                <?php dynamic_sidebar('main_posts'); ?>
            <?php endif; ?>
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

        <?php get_template_part('template-parts/footer/footer', 'site'); ?>

    </div>

<?php get_footer();

