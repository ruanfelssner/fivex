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
        get_template_directory_uri() . '/in/swiper/swiper-bundle.min.js',
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

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

function custom_excerpt_length($length)
{
    return 12;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

add_action('widgets_init', 'my_register_sidebars');

function my_register_sidebars()
{
    /* Register dynamic sidebar 'new_sidebar' */

    register_sidebar([
        'id' => 'sidebar',
        'name' => __('Sidebar'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);

    /* Repeat the code pattern above for additional sidebars. */
}

?>
