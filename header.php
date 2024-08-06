<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?> - <?php echo get_bloginfo(
     'description'
 ); ?> | <?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>
  <header>
  <nav class="container">
    <div class="flex flex-wrap items-center justify-between mx-auto p-2">
      <a href="<?php echo esc_url(
          home_url('/')
      ); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/imgs/logo.webp" alt="5 FIVEX Store" class="mb-3" />
      </a>
      <div class="items-center justify-between w-full md:flex md:w-auto">
        <?php wp_nav_menu([
            'theme_location' => 'header-menu',
            'container' => 'div',
            'container_class' => 'header-menu-class',
            'menu_class' => 'menu flex flex-col md:flex-row md:space-x-6',
            'menu_id' => 'primary-menu',
            'walker' => new WP_Bootstrap_Navwalker(),
        ]); ?>
      </div>
    </div>
  </nav>
</header>
