<?php
/*
Template Name: Шаблон второстепенные страницы
*/
?>

<?php
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


        <section class="page-title" style="background-image:url(<?php echo IMG_DIR ?>/background/page-title-1.jpg);">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title -->
                    <div class="title-column col-md-6 col-sm-12 col-xs-12">
                        <h1>О Ktunning</h1>
                    </div>
                    <!--Bread Crumb -->
                    <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Главная</a>
                            </li>
                            <li class="active">О Ktunning</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="sidebar-page-container sec-pdd-90">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Sidebar-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <aside class="sidebar about-sidebar">

                            <!-- Tabbed Links -->
                            <div class="sidebar-widget recent-articles wow fadeInUp  animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                <div class="sidebar-title">
                                    <h3>Категории</h3>
                                </div>

                                <ul class="list">
                                    <li><a href="#">Ремонт двигателя</a>
                                    </li>
                                    <li><a href="#">Ремонт подвески</a>
                                    </li>
                                    <li><a href="#">Автодиагностика</a>
                                    </li>
                                    <li><a href="#">Сварка</a>
                                    </li>
                                    <li><a href="#">Прочеи ремонтные работы</a>
                                    </li>
                                </ul>

                            </div>



                            <!-- Tabbed Links -->
                            <div class="sidebar-widget contact-info">
                                <div class="sidebar-title">
                                    <h3>Ktuning - ремонт авто</h3>
                                </div>
                                <ul>
                                    <li><span class="icon flaticon-location"></span> ул. Ровчакова, 10, Могилев, РБ</li>
                                    <li><span class="icon flaticon-mail"></span> mail@ktuning.by</li>
                                    <li><span class="icon flaticon-smartphone-call"></span> +(375) 298 48 98 74</li>
                                    <li><span class="icon flaticon-clock-3"></span> Пон - Суб: 9:00 - 18:00pm</li>
                                </ul>

                            </div>

                        </aside>


                    </div>
                    <!--Sidebar-->

                    <!--Content Side-->
                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <section class="content-section about-content">

                            <!--Default Video Box-->
                            <div class="normal-title">
                                <h3>Кто мы</h3>
                            </div>
                            <div class="text-block">
                                <p>
                                    Качественный ремонт авто клиентов - наша миссия.

                                    Наша главная цель - завоевать уважение и преданность наших клиентов честностью,
                                    честностью и дружелюбным, вежливым обслуживанием.
                                    Мы делаем это, точно оценивая потребности и
                                    предоставляя пакеты производительности мирового класса профессионально.
                                    Наше исключительное обслуживание клиентов обеспечивается гарантией,
                                    ориентированной на ваши потребности и ожидания. Мы сделаем все,
                                    что необходимо для обеспечения 100% удовлетворенности клиентов нашими продуктами и услугами.
                                    Мы прилагаем все усилия, чтобы не только удовлетворить, но и превзойти ожидания.

                                    Мы разделяем страстное желание наших клиентов быть лучшим.
                                    Мы хотим максимально использовать себя и сделать все возможное,
                                    чтобы наши системы были выполнены с самым высоким уровнем качества.
                                    Полученный успех способствует процветанию наших клиентов, персонала, инвесторов и общества,
                                    в котором мы живем и работаем.
                                </p>
                            </div>

                            <!--Two Column-->
                            <div class="two-column">
                                <div class="row clearfix">

                                    <div class="text-column col-lg-6 col-md-12 col-xs-12">
                                        <div class="normal-title">
                                            <h3>Мы делаем ремонт авто</h3>
                                        </div>
                                        <div class="text">Автосервис "Ktuning" готов предложить каждому клиенту качественный авторемонт любой сложности.
                                            Также, у нас вы можете всегда получить профессиональную консультацию касательно ремонта, обслуживания и эксплуатации вашего автомобиля.</div>
                                    </div>

                                    <div class="skills-column col-lg-6 col-md-12 col-xs-12">
                                        <!--Progress Levels-->
                                        <div class="progress-levels margin-top-55">

                                            <!--Skill Box-->
                                            <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: hidden; animation-duration: 1500ms; animation-delay: 100ms; animation-name: none;">
                                                <div class="box-title"><span class="icon flaticon-transport-6"></span> Car Washing</div>
                                                <div class="inner">
                                                    <div class="bar">
                                                        <div class="bar-innner">
                                                            <div class="bar-fill" data-percent="80" style="width: 80%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Skill Box-->
                                            <div class="progress-box wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: hidden; animation-duration: 1500ms; animation-delay: 200ms; animation-name: none;">
                                                <div class="box-title"><span class="icon flaticon-gear"></span> Engine Upgrades</div>
                                                <div class="inner">
                                                    <div class="bar">
                                                        <div class="bar-innner">
                                                            <div class="bar-fill" data-percent="90" style="width: 90%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Skill Box-->
                                            <div class="progress-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: hidden; animation-duration: 1500ms; animation-delay: 300ms; animation-name: none;">
                                                <div class="box-title"><span class="icon flaticon-car-seat-belt"></span> Security Inspections</div>
                                                <div class="inner">
                                                    <div class="bar">
                                                        <div class="bar-innner">
                                                            <div class="bar-fill" data-percent="72" style="width: 72%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Skill Box-->
                                            <div class="progress-box wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: hidden; animation-duration: 1500ms; animation-delay: 400ms; animation-name: none;">
                                                <div class="box-title"><span class="icon flaticon-car-in-service"></span> Engine Change</div>
                                                <div class="inner">
                                                    <div class="bar">
                                                        <div class="bar-innner">
                                                            <div class="bar-fill" data-percent="88" style="width: 88%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </section>
                    </div>
                    <!--Content Side-->

                </div>
            </div>
        </div>

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
                                                <li><span class="icon flaticon-location"></span> ул. Ровчакова, 10, Могилев,
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
                                                    <a href="#"><img src="<?php echo IMG_DIR ?>/resource/post-thumb-1.jpg" alt="">
                                                    </a>
                                                </figure>
                                                <h4><a href="#">Новость 1</a></h4>
                                                <div class="time"><span class="fa fa-calendar"></span> Jun 12,2016</div>
                                            </div>
                                            <!--Post-->
                                            <div class="post">
                                                <figure class="post-thumb">
                                                    <a href="#"><img src="<?php echo IMG_DIR ?>/resource/post-thumb-2.jpg" alt="">
                                                    </a>
                                                </figure>
                                                <h4><a href="#">Новость 2</a></h4>
                                                <div class="time"><span class="fa fa-calendar"></span> Jun 14,2016</div>
                                            </div>
                                            <!--Post-->
                                            <div class="post">
                                                <figure class="post-thumb">
                                                    <a href="#"><img src="<?php echo IMG_DIR ?>/resource/post-thumb-3.jpg" alt="">
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
                                                    <li><a href="#"><span class="icon fa fa-google-plus"></span> Goole plus</a>
                                                    </li>
                                                    <li><a href="#"><span class="icon fa fa-linkedin"></span> Linkedin</a>
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
    <!--End pagewrapper-->

<?php get_footer();