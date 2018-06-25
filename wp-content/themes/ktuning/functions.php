<?php
require get_template_directory() . '/inc/class-inc.php';

add_filter('show_admin_bar', '__return_false');

define('THEME_ROOT', get_template_directory_uri());
define('CSS_DIR', THEME_ROOT . '/assets/css');
define('JS_DIR', THEME_ROOT . '/assets/js');
define('IMG_DIR', THEME_ROOT . '/assets/images');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function ktuning_setup()
{

    add_theme_support('post-thumbnails');
    /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
    add_theme_support('html5', [
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);

    /*
	 * Enable support for Post Formats.
	 */
    add_theme_support('post-formats', [
        'aside',
        'image',
        'video',
        'link',
        'gallery',
        'audio'
    ]);

    add_theme_support('title-tag');

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
}

add_action('after_setup_theme', 'ktuning_setup');

/**
 * Enqueue scripts and styles.
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('theme', get_stylesheet_uri());
    wp_enqueue_style('vendorcss', CSS_DIR . '/vendor.css');

    // Load the html5 shiv.
    wp_enqueue_script('html5', CSS_DIR . '/html5.js', []);
    wp_script_add_data('html5', 'conditional', 'lt IE 9');

    // Load the html5 shiv.
    wp_enqueue_script('respond', CSS_DIR . '/respond.js', []);
    wp_script_add_data('respond', 'conditional', 'lt IE 9');

    wp_enqueue_style('stylecss', CSS_DIR . '/style.css');

    wp_deregister_script('jquery');

    wp_enqueue_script('vendorjs', JS_DIR . '/vendor.js', [], '0.1.1', true);
    wp_enqueue_script('customjs', JS_DIR . '/custom.js', [], '0.1.1', true);

    /*if( is_singular() && comments_open() && (get_option('thread_comments') == 1) ){
        wp_enqueue_script('comment-reply');
    }*/

});

//navigatin menu
add_action('after_setup_theme', function () {
    // Регистрация областей для меню
    register_nav_menus([
        'header-menu' => 'Область меню в шапке',
        'sticky-menu' => 'Область меню в шапке стики',
        'footer-menu' => 'Область меню в подвале',
        'sidebar-menu' => 'Область меню в сайдебаре',
    ]);
});

add_action('init', 'register_post_types');

add_action('admin_menu', function () {
    add_menu_page('Дополнительные настройки главной страницы', 'Главная', 'manage_options', 'main-options', '', 'dashicons-menu', 100);
});

add_action('customize_register', function ($wp_customize) {
    //footer
    $wp_customize->add_setting('footer_left', [
        'default' => 'Только качественный ремонт авто по доступным ценам.',
        'transport' => 'refresh',
    ]);
    $wp_customize->add_setting('footer_facebook', ['default' => '', 'transport' => 'refresh']);
    $wp_customize->add_setting('footer_vkontakte', ['default' => '', 'transport' => 'refresh']);
    $wp_customize->add_setting('footer_instagram', ['default' => '', 'transport' => 'refresh']);
    $wp_customize->add_setting('footer_ok', ['default' => '', 'transport' => 'refresh']);
    $wp_customize->add_setting('footer_skype', ['default' => '', 'transport' => 'refresh']);
    $wp_customize->add_setting('footer_viber', ['default' => '', 'transport' => 'refresh']);
    $wp_customize->add_setting('copyright', ['default' => 'Copyright &copy; Ktuning.by', 'transport' => 'refresh']);

    $wp_customize->add_section('footer_sec', [
        'title' => 'Настройки футера',
        'priority' => 30,
    ]);

    $wp_customize->add_control('footer_left', ['label' => 'Текст слева', 'section' => 'footer_sec', 'settings' => 'footer_left', 'type' => 'text']);
    $wp_customize->add_control('footer_facebook', ['label' => 'Url Facebook', 'section' => 'footer_sec', 'settings' => 'footer_facebook', 'type' => 'text']);
    $wp_customize->add_control('footer_vkontakte', ['label' => 'Url Vkontakte', 'section' => 'footer_sec', 'settings' => 'footer_vkontakte', 'type' => 'text']);
    $wp_customize->add_control('footer_instagram', ['label' => 'Url Instagram', 'section' => 'footer_sec', 'settings' => 'footer_instagram', 'type' => 'text']);
    $wp_customize->add_control('footer_ok', ['label' => 'Url Ok', 'section' => 'footer_sec', 'settings' => 'footer_ok', 'type' => 'text']);
    $wp_customize->add_control('footer_skype', ['label' => 'Url skype', 'section' => 'footer_sec', 'settings' => 'footer_skype', 'type' => 'text']);
    $wp_customize->add_control('footer_viber', ['label' => 'Viber', 'section' => 'footer_sec', 'settings' => 'footer_viber', 'type' => 'text']);
    $wp_customize->add_control('copyright', ['label' => 'Copyright', 'section' => 'footer_sec', 'settings' => 'copyright', 'type' => 'text']);
    //address
    $wp_customize->add_setting('address', ['default' => '', 'transport' => 'refresh']);
    $wp_customize->add_setting('mail', ['default' => '', 'transport' => 'refresh']);
    $wp_customize->add_setting('phone', ['default' => '', 'transport' => 'refresh']);
    $wp_customize->add_setting('work_time', ['default' => '', 'transport' => 'refresh']);

    $wp_customize->add_section('address_sec', [
        'title' => 'Настройки адреса',
        'priority' => 25,
    ]);

    $wp_customize->add_control('address_address', ['label' => 'Адрес', 'section' => 'address_sec', 'settings' => 'address', 'type' => 'text']);
    $wp_customize->add_control('address_mail', ['label' => 'Email', 'section' => 'address_sec', 'settings' => 'mail', 'type' => 'text']);
    $wp_customize->add_control('address_phone', ['label' => 'Телефон', 'section' => 'address_sec', 'settings' => 'phone', 'type' => 'text']);
    $wp_customize->add_control('work_time', ['label' => 'Режим работы', 'section' => 'address_sec', 'settings' => 'work_time', 'type' => 'text']);

});

add_action('widgets_init', function () {
    /* В боковой колонке - сайдбар категорий*/
    register_sidebar(
        array(
            'id' => 'side_right_category',
            'name' => 'Сайдебар категория',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '<div id="%1$s" 
                                 class="sidebar-widget recent-articles wow fadeInUp animated %2$s" 
                                 data-wow-delay="0ms"
                                 data-wow-duration="1500ms"
                                 style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '</div>',
            'before_title' => '<div class="sidebar-title"><h3>',
            'after_title' => '</h3></div>'
        )
    );
    //last posts sidebar
    register_sidebar(
        array(
            'id' => 'side_right_last_posts',
            'name' => 'Сайдебар последние посты',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '<div id="%1$s" 
                                 class="sidebar-widget popular-posts wow fadeInUp animated %2$s" data-wow-delay="0ms"
                                 data-wow-duration="1500ms"
                                 style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '</div>',
            'before_title' => '<div class="sidebar-title"><h3>',
            'after_title' => '</h3></div>'
        )
    );
    //tags sidebar
    register_sidebar(
        array(
            'id' => 'side_right_tags_posts',
            'name' => 'Сайдебар теги',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '<div id="%1$s" 
                                 class="sidebar-widget popular-tags %2$s">', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '</div>',
            'before_title' => '<div class="sidebar-title"><h3>',
            'after_title' => '</h3></div>'
        )
    );
    //last posts footer
    register_sidebar(
        array(
            'id' => 'footer_posts', // уникальный id
            'name' => 'Footer последние посты',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '<div id="%1$s" class="footer-widget posts-widget %2$s" >',
            'after_widget' => '</div>',
        )
    );
    //last posts main
    register_sidebar(
        array(
            'id' => 'main_posts', // уникальный id
            'name' => 'Main последние посты',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '<div id="%1$s" class="auto-container %2$s" >',
            'after_widget' => '</div>',
            'before_title' => '<div class="sec-title"><h2>',
            'after_title' => '</h2></div>'
        )
    );
    /* В подвале - второй сайдбар */
    register_sidebar(
        array(
            'id' => 'comments',
            'name' => 'Комментарии для поста',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в футер.',
            'before_widget' => '<div id="%1$s" class="comment-form form-outer margin-top-0 wow fadeInUp animated %2$s" data-wow-delay="200ms"
                             data-wow-duration="1500ms"
                             style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">',
            'after_widget' => '</div>',
            'before_title' => '<div class="group-title"><h2>',
            'after_title' => '</h2></div>'
        )
    );
});

add_action('widgets_init', function () {
    register_widget('Ktuning_Widget_Recent_Posts');
    register_widget('Ktuning_Widget_Footer_Posts');
    register_widget('Ktuning_Widget_Main_Posts');
});
//mainslider
add_image_size('main-slider-thumb', 1400, 600, true);
//mainslider
add_image_size('main-feature-thumb', 295, 220, true);
//post
add_image_size('main-post-thumb', 533, 307, true);
//recent post
add_image_size('recent-post-thumb', 86, 86, true);

add_filter('frontpage_template', function ($template) {
    return is_home() ? '' : $template;
});
add_filter('document_title_parts', function ($parts) {
    if (isset($parts['site'])) unset($parts['site']);
    return $parts;
});
add_filter('widget_nav_menu_args', function ($args) {
    if (isset($args['menu']->name) && $args['menu']->name == 'sidebar-menu') {
        $args['menu_class'] = 'list';
    }
    return $args;
});

/**
 * ----------------------------Functions------------------------------------------------------------
 */

function register_post_types()
{

    register_post_type('main-slider', array(
        'label' => null,
        'labels' => array(
            'name' => 'Слайдер главной страницы', // основное название для типа записи
            'singular_name' => 'Изображение', // название для одной записи этого типа
            'add_new' => 'Добавить изображение', // для добавления новой записи
            'add_new_item' => 'Добавление изображения', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование изображения', // для редактирования типа записи
            'new_item' => 'Новое изображение', // текст новой записи
            'view_item' => 'Смотреть изображения', // для просмотра записи этого типа.
            'search_items' => 'Искать изображение', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Слайдер', // название меню
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => 'main-options',
        'supports' => array('title', 'excerpt', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));

    register_post_type('featured-services', array(
        'label' => null,
        'labels' => array(
            'name' => 'Автосервис Ktuning', // основное название для типа записи
            'singular_name' => 'Добавить запись', // название для одной записи этого типа
            'add_new' => 'Добавить запись', // для добавления новой записи
            'add_new_item' => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование записи', // для редактирования типа записи
            'new_item' => 'Новое запись', // текст новой записи
            'view_item' => 'Смотреть записи', // для просмотра записи этого типа.
            'search_items' => 'Искать запись', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Автосервис', // название меню
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => 'main-options',
        'supports' => array('title', 'editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));

    register_post_type('main-services', array(
        'label' => null,
        'labels' => array(
            'name' => 'Услуги автосервиса', // основное название для типа записи
            'singular_name' => 'Добавить запись', // название для одной записи этого типа
            'add_new' => 'Добавить запись', // для добавления новой записи
            'add_new_item' => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование записи', // для редактирования типа записи
            'new_item' => 'Новое запись', // текст новой записи
            'view_item' => 'Смотреть записи', // для просмотра записи этого типа.
            'search_items' => 'Искать запись', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Услуги', // название меню
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => 'main-options',
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));
    register_post_type('faq', array(
        'label' => null,
        'labels' => array(
            'name' => 'Часто задаваемые вопросы', // основное название для типа записи
            'singular_name' => 'Добавить запись', // название для одной записи этого типа
            'add_new' => 'Добавить запись', // для добавления новой записи
            'add_new_item' => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование записи', // для редактирования типа записи
            'new_item' => 'Новое запись', // текст новой записи
            'view_item' => 'Смотреть записи', // для просмотра записи этого типа.
            'search_items' => 'Искать запись', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'ЧЗВ', // название меню
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => 'main-options',
        'supports' => array('title', 'editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));
}

/**
 * Вывод постов
 * @param $number
 * @param $type
 * @return array
 */
function getServices($number, $type)
{
    $args = array(
        'numberposts' => $number,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => $type
    );

    return get_posts($args);
}

/**
 * Хлебные крошки
 */
function the_breadcrumb()
{
    global $post;
    if (!is_home()) {
        echo '<li><a href="' . site_url() . '">Главная</a></li>';
        if (is_single()) { // записи
            $cat = get_the_category_list();
            echo "<li>$cat</li>";
            echo " / ";
            the_title();
        } elseif (is_page()) { // страницы
            if ($post->post_parent) {
                $parent_id = $post->post_parent;
                $breadcrumbs = [];
                while ($parent_id) {
                    $page = get_post($parent_id);
                    $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                foreach ($breadcrumbs as $crumb) echo $crumb . ' / ';
            }
            echo the_title();
        } elseif (is_category()) { // категории
            global $wp_query;
            $obj_cat = $wp_query->get_queried_object();
            $current_cat = $obj_cat->term_id;
            $current_cat = get_category($current_cat);
            $parent_cat = get_category($current_cat->parent);
            if ($current_cat->parent != 0)
                echo "<li>" . (get_category_parents($parent_cat, TRUE, ' / ')) . "</li>";
            $sinleTitle = single_cat_title('', false);
            echo "<li>$sinleTitle</li>";
        } elseif (is_search()) { // страницы поиска
            echo '<li>Результаты поиска для "' . get_search_query() . '"</li>';
        } elseif (is_tag()) { // теги (метки)
            echo '<li>' . single_tag_title('', false) . '</li>';
        } elseif (is_day()) { // архивы (по дням)
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> </li> ';
            echo '<li><a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a></li>';
            echo '<li>' . get_the_time('d') . '</li>';
        } elseif (is_month()) { // архивы (по месяцам)
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>';
            echo '<li>' . get_the_time('F') . '</li>';
        } elseif (is_year()) { // архивы (по годам)
            echo '<li>' . get_the_time('Y') . '</li>';
        } elseif (is_author()) { // авторы
            global $author;
            $userdata = get_userdata($author);
            echo '<li>' . 'Опубликовал(а) ' . $userdata->display_name . '</li>';
        } elseif (is_404()) { // если страницы не существует
            echo '<li>' . 'Ошибка 404' . '</li>';
        }

        if (get_query_var('paged')) // номер текущей страницы
            echo '<li>' . ' (' . get_query_var('paged') . '-я страница)' . '</li>';

    } else { // главная
        $pageNum = (get_query_var('paged')) ? get_query_var('paged') : 1;
        if ($pageNum > 1)
            echo '<li><a href="' . site_url() . '">Главная</a></li>' . $pageNum . '-я страница' . '</li>';
        else
            echo '<li>' . 'Вы находитесь на главной странице' . '</li>';
    }
}

function dateConvert($date)
{
    $monthsNameRu = [
        'full' => [
            1 => 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
        ],
        'short' => [
            1 => 'Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'

        ]
    ];
    $modify = new \DateTime($date);
    $m = $modify->format('m');
    $mFullRu = $monthsNameRu['full'][(int)$m];
    $mShortRu = $monthsNameRu['short'][(int)$m];
    return [
        'day' => $modify->format('d'),
        'mounth' => $m,
        'mounth_full' => $mFullRu,
        'mounth_short' => $mShortRu,
        'year' => $modify->format('Y'),
    ];
}

/**
 * @param $text
 * @param $length
 * @param string $add
 * @return string
 */
function textSubstring($text, $length, $add = '...')
{
    return mb_substr(strip_tags($text), 0, $length) . $add;
}

function ktuning_get_svg($args = array())
{
    // Make sure $args are an array.
    if (empty($args)) {
        return __('Please define default parameters in the form of an array.', 'twentyseventeen');
    }

    // Define an icon.
    if (false === array_key_exists('icon', $args)) {
        return __('Please define an SVG icon filename.', 'twentyseventeen');
    }

    // Set defaults.
    $defaults = array(
        'icon' => '',
        'title' => '',
        'desc' => '',
        'fallback' => false,
    );

    // Parse args.
    $args = wp_parse_args($args, $defaults);

    // Set aria hidden.
    $aria_hidden = ' aria-hidden="true"';

    // Set ARIA.
    $aria_labelledby = '';

    /*
     * Twenty Seventeen doesn't use the SVG title or description attributes; non-decorative icons are described with .screen-reader-text.
     *
     * However, child themes can use the title and description to add information to non-decorative SVG icons to improve accessibility.
     *
     * Example 1 with title: <?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right', 'title' => __( 'This is the title', 'textdomain' ) ) ); ?>
     *
     * Example 2 with title and description: <?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right', 'title' => __( 'This is the title', 'textdomain' ), 'desc' => __( 'This is the description', 'textdomain' ) ) ); ?>
     *
     * See https://www.paciellogroup.com/blog/2013/12/using-aria-enhance-svg-accessibility/.
     */
    if ($args['title']) {
        $aria_hidden = '';
        $unique_id = uniqid();
        $aria_labelledby = ' aria-labelledby="title-' . $unique_id . '"';

        if ($args['desc']) {
            $aria_labelledby = ' aria-labelledby="title-' . $unique_id . ' desc-' . $unique_id . '"';
        }
    }

    // Begin SVG markup.
    $svg = '<svg class="icon icon-' . esc_attr($args['icon']) . '"' . $aria_hidden . $aria_labelledby . ' role="img">';

    // Display the title.
    if ($args['title']) {
        $svg .= '<title id="title-' . $unique_id . '">' . esc_html($args['title']) . '</title>';

        // Display the desc only if the title is already set.
        if ($args['desc']) {
            $svg .= '<desc id="desc-' . $unique_id . '">' . esc_html($args['desc']) . '</desc>';
        }
    }

    /*
     * Display the icon.
     *
     * The whitespace around `<use>` is intentional - it is a work around to a keyboard navigation bug in Safari 10.
     *
     * See https://core.trac.wordpress.org/ticket/38387.
     */
    $svg .= ' <use href="#icon-' . esc_html($args['icon']) . '" xlink:href="#icon-' . esc_html($args['icon']) . '"></use> ';

    // Add some markup to use as a fallback for browsers that do not support SVGs.
    if ($args['fallback']) {
        $svg .= '<span class="svg-fallback icon-' . esc_attr($args['icon']) . '"></span>';
    }

    $svg .= '</svg>';

    return $svg;
}

function ktuning_comment($comment, $args, $depth)
{
    if ('div' === $args['style']) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }

    $classes = ' ' . comment_class(empty($args['has_children']) ? '' : 'parent', null, null, false);
    ?>

    <<?php echo $tag, $classes; ?> id="comment-<?php comment_ID() ?>">
    <?php if ('div' != $args['style']) { ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
} ?>

    <div class="comment-author vcard">
        <?php
        if ($args['avatar_size'] != 0) {
            echo get_avatar($comment, $args['avatar_size']);
        }
        printf(
            __('<div class="comment_author">%s</div>'),
            get_comment_author_link()
        );
        ?>
    </div>

    <?php if ($comment->comment_approved == '0') { ?>
    <em class="comment-awaiting-moderation">
        <?php echo 'Ваш комментарий на модерации'; ?>
    </em><br/>
<?php } ?>

    <div class="comment_text">
        <?php comment_text(); ?>
        <div class="comment-meta commentmetadata">
            <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
                <?php
                printf(
                    __('%1$s at %2$s'),
                    get_comment_date(),
                    get_comment_time()
                ); ?>
            </a>

            <?php edit_comment_link('Редактировать', '  ', ''); ?>
        </div>
        <div class="reply">
            <?php
            comment_reply_link(
                array_merge(
                    $args,
                    array(
                        'add_below' => $add_below,
                        'depth' => $depth,
                        'max_depth' => $args['max_depth']
                    )
                )
            ); ?>
        </div>
    </div>

    <?php if ('div' != $args['style']) { ?>
    </div>
<?php }
}