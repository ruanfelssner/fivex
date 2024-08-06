<header class="bg-black text-white">
  <nav class="container">
      <div class="flex flex-wrap items-center justify-between mx-auto p-2">
      <router-link to="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo.webp" alt="5 FIVEX Store" class="mb-3" />
      </router-link>
      <div class="items-center justify-between w-full md:flex md:w-auto" id="navbar-search">
        <div class="relative mt-3 hidden">
          <div class="absolute inset-y-0 end-0 flex items-center ps-3 pointer-events-none">
            <button icon="search" />
          </div>
          <input type="text" id="search-navbar" class="block w-full rounded-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
        </div>
        <ul v-if="menuShow" class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 rtl:space-x-reverse dark:border-gray-700">
          <li><a :href="item.link">{{item.name}}</a></li>
          <li><a :href="item.link">{{item.name}}</a></li>
          <li><a :href="item.link">{{item.name}}</a></li>
          <li><a :href="item.link">{{item.name}}</a></li>
        </ul>
        <div class="hidden md:block">
          <button @click="openMenu()" class="mr-6"><button icon="cart-shopping" /></button>
          <button @click="openMenu()" class=""><button icon="bars" /></button>
        </div>
      </div>
    </div>
    </div>
    <div class="menuDesktop bg-ecommerce-primary text-black py-2 hidden md:block">
      <div>
        <ul class="flex flex-row justify-center space-x-8">
          <li v-for="(item, id) of Menu" :key="id+' Menu'" @mouseover="menuHover(id)" class="cursor-pointer">
              <a :href="item.link" class="text-base font-semibold"><span>{{item.name}}</span></a>
              <transition mode="out-in">
                <button icon="chevron-down" size="sm" v-if="item.subMenuList.length > 0 && menuSelected !== id" class="ms-2" />                
                <button icon="chevron-up" size="sm" v-else-if="item.subMenuList.length > 0 && menuSelected === id" class="ms-2" />
              </transition>
          </li>
        </ul>
        <transition mode="out-in">
          <div v-if="menuSelected !== null && Menu[menuSelected].subMenuList.length > 0" class="p-4">
            <div class="grid grid-rows-4 grid-flow-col gap-4" @mouseleave="menuHide()">
              <div v-for="(item, id) of Menu[menuSelected].subMenuList" :key="id+' Menu'">
                <a :href="item.link" class="text-base font-semibold"><span>{{item.name}}</span></a>
              </div>
            </div>
          </div>
        </transition>
      </div>
    </div>
  </nav>
</header>