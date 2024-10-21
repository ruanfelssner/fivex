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
<div class="flex flex-col h-screen">
	<nav class="fixed z-20 w-full px-4 py-4 flex justify-between items-center bg-black/70">
		<div class="container">
      <div class="flex justify-between items-center">
        <a href="<?php echo esc_url(
            home_url('/')
        ); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
              <img src="<?php echo esc_url(
                  get_template_directory_uri()
              ); ?>/assets/imgs/logo.webp" alt="5 FIVEX Store" class="mb-3" />
            </a>
          <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-blue-600 p-3">
              <svg class="block h-4 w-4 fill-current text-white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
              </svg>
            </button>
          </div>
      </div>
      <?php wp_nav_menu([
          'theme_location' => 'header-menu',
          'container' => 'div',
          'container_class' => 'header-menu-class flex',
          'menu_class' =>
              'hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6',
          'menu_id' => 'primary-menu',
          'add_a_class' =>
              'text-sm font-bold uppercase text-white hover:text-primary',
          'walker' => new WP_Bootstrap_Navwalker(),
      ]); ?>
    </div>
	</nav>
	<div class="navbar-menu relative z-50 hidden">
		<div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
        <a href="<?php echo esc_url(
            home_url('/')
        ); ?>" class="mr-auto text-3xl font-bold leading-none">
        <img src="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/imgs/logo.webp" alt="5 FIVEX Store" class="mb-3" />
      </a>
				<button class="navbar-close">
					<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
            <?php wp_nav_menu([
                'theme_location' => 'header-menu',
                'container' => 'div',
                'container_class' => 'header-menu-class',
                'menu_class' => '',
                'menu_id' => 'primary-menu',
                'add_a_class' => 'font-bold text-black',
                'walker' => new WP_Bootstrap_Navwalker(),
            ]); ?>
			</div>
		</nav>
	</div>

<script>
// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});
</script>