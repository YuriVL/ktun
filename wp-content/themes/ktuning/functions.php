<?php
add_filter('show_admin_bar', '__return_false');

define('THEME_ROOT', get_template_directory_uri());
define('CSS_DIR', THEME_ROOT.'/assets/css');
define('JS_DIR', THEME_ROOT.'/assets/js');
define('IMG_DIR', THEME_ROOT.'/assets/images');

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'theme', get_stylesheet_uri());
    wp_enqueue_style( 'vendorcss', CSS_DIR.'/vendor.css' );

    // Load the html5 shiv.
    wp_enqueue_script( 'html5', CSS_DIR.'/html5.js', [] );
    wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

    // Load the html5 shiv.
    wp_enqueue_script( 'respond', CSS_DIR.'/respond.js', [] );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );

    wp_enqueue_style( 'stylecss', CSS_DIR.'/style.css');

    wp_deregister_script('jquery');

    wp_enqueue_script('vendorjs', JS_DIR . '/vendor.js', [], '0.1.1', true);
    wp_enqueue_script('customjs', JS_DIR . '/custom.js',[], '0.1.1', true);
});

//navigatin menu
add_action( 'after_setup_theme', function () {
    // Регистрация областей для меню
    register_nav_menus( [
        'header-menu'  => 'Область меню в шапке',
        'sticky-menu' => 'Область меню в шапке стики',
        'footer-menu' => 'Область меню в подвале',
    ]);
} );
//mainslider
add_image_size( 'main-slider-thumb', 1400, 600, true );


add_filter( 'frontpage_template',  function ($template ) {
    return is_home() ? '' : $template;
} );

add_action('init', 'register_post_types');

/**
 * ----------------------------Functions------------------------------------------------------------
 */

function register_post_types(){

    add_theme_support( 'post-thumbnails' );

    register_post_type('main-slider', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Слайдер главной страницы', // основное название для типа записи
            'singular_name'      => 'Изображение', // название для одной записи этого типа
            'add_new'            => 'Добавить изображение', // для добавления новой записи
            'add_new_item'       => 'Добавление изображения', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование изображения', // для редактирования типа записи
            'new_item'           => 'Новое изображение', // текст новой записи
            'view_item'          => 'Смотреть изображения', // для просмотра записи этого типа.
            'search_items'       => 'Искать изображения', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Слайдер ', // название меню
        ),
        'public'              => false,
        'show_ui'             => true, // зависит от public
        'menu_icon'           => 'dashicons-format-image',
        'supports'            => array('title','editor', 'excerpt', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ) );
}

function getMainSlider()
{
    // параметры по умолчанию
    $args = array(
        'numberposts' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'main-slider'
    );

    return get_posts($args);

}