<?php
// Desabilitar a barra de administração
add_filter('show_admin_bar', '__return_false');

function register_my_menus()
{
    register_nav_menus([
        'header-menu' => __('Header Menu'),
    ]);
}
add_action('init', 'register_my_menus');

require_once get_template_directory() . '/in/class-wp-bootstrap-navwalker.php';

function enqueue_swiper_slider()
{
    // Enfileirar o CSS do Swiper
    wp_enqueue_style(
        'swiper-css',
        get_template_directory_uri() . '/in/swiper/swiper-bundle.min.css'
    );

    // Enfileirar o JS do Swiper
    wp_enqueue_script(
        'swiper-js',
        get_template_directory_uri() .
            '/in/swiper/swiper-element-bundle.min.js',
        [],
        null,
        true
    );

    // Enfileirar o JS de inicialização do Swiper
    wp_enqueue_script(
        'init-swiper-js',
        get_template_directory_uri() . '/in/swiper/init.js',
        ['swiper-js'],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_slider');
?>
