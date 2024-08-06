<header class="bg-black text-light">
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
            'container' => 'nav',
            'container_class' => 'header-menu-class',
            'menu_class' => 'menu flex flex-col md:flex-row md:space-x-6',
            'menu_id' => 'primary-menu',
            'walker' => new WP_Bootstrap_Navwalker(),
        ]); ?>
        <div class="hidden md:block">
          <button @click="openMenu()" class="mr-6"><button icon="cart-shopping" /></button>
          <button @click="openMenu()" class=""><button icon="bars" /></button>
        </div>
      </div>
    </div>
  </nav>
</header>
