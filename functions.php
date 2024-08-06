<?php
// disabled the admin bar
add_filter('show_admin_bar', '__return_false');

function register_my_menus()
{
    register_nav_menus([
        'header-menu' => __('Header Menu'),
    ]);
}
add_action('init', 'register_my_menus');

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
?>

