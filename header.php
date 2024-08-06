<header class="bg-black">
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
            'theme_location' => 'primary-menu', // Nome da localização registrada
            'container' => 'div', // O elemento HTML que envolve o menu
            'container_class' =>
                'flex flex-col p-4 mt-4 font-medium md:flex-row md:space-x-6', // Classes CSS para o container
            'menu_class' => 'menu flex flex-col md:flex-row md:space-x-6', // Classes CSS para a lista do menu
            'menu_id' => 'primary-menu', // ID para a lista do menu
            'walker' => new WP_Bootstrap_Navwalker(), // Se você estiver usando um walker personalizado
        ]); ?>
        <div class="hidden md:block">
          <button @click="openMenu()" class="mr-6"><button icon="cart-shopping" /></button>
          <button @click="openMenu()" class=""><button icon="bars" /></button>
        </div>
      </div>
    </div>
  </nav>
</header>
