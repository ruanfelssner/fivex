<header>
  <nav class="bg-white border-gray-200">
      <div class="flex flex-wrap items-center justify-between mx-auto p-2">
      <router-link to="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgsimgs/logo.webp" alt="5 FIVEX Store" class="mb-3" />
      </router-link>
      <div class="flex">
        <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" @click="openSearch()" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
          <AtomsIcon icon="search" />
          <span class="sr-only">Search</span>
        </button>
        <div class="relative hidden md:block min-w-96">
          <div class="absolute inset-y-0 end-0 flex items-center pe-5 ps-5 pointer-events-none">
            <AtomsIcon icon="search" />
            <span class="sr-only">Search icon</span>
          </div>
          <input type="text" id="search-navbar" class="block w-full p-4 pe-10 bg-gray-100 text-sm text-gray-900 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 rounded-full" placeholder="O que está buscando hoje?">
        </div>
        <button data-collapse-toggle="navbar-search" @click="openMenu()" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <AtomsIcon icon="bars" />
        </button>
      </div>
      <div class="items-center justify-between w-full md:flex md:w-auto" id="navbar-search">
        <div class="relative mt-3 hidden">
          <div class="absolute inset-y-0 end-0 flex items-center ps-3 pointer-events-none">
            <AtomsIcon icon="search" />
          </div>
          <input type="text" id="search-navbar" class="block w-full rounded-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
        </div>
        <!-- <ul v-if="menuShow" class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 rtl:space-x-reverse dark:border-gray-700">
          <li v-for="(item, id) of listMenus"><a :href="item.link">{{item.name}}</a></li>
        </ul> -->
        <div class="hidden md:block">
          <button @click="openMenu()" class="mr-6"><AtomsIcon icon="cart-shopping" /></button>
          <button @click="openMenu()" class=""><AtomsIcon icon="bars" /></button>
        </div>
        <!-- <ul v-else class="hidden md:flex md:flex-row md:space-x-8 md:p-0 ">
          <li v-for="(item, id) of listMenus"><a :href="item.link">{{item.name}}</a></li>
        </ul> -->
      </div>
    </div>
    </AtomsContainer>
    <div class="menuDesktop bg-ecommerce-primary text-black py-2 hidden md:block">
      <AtomsContainer>
        <ul class="flex flex-row justify-center space-x-8">
          <li v-for="(item, id) of Menu" :key="id+' Menu'" @mouseover="menuHover(id)" class="cursor-pointer">
              <a :href="item.link" class="text-base font-semibold"><span>{{item.name}}</span></a>
              <transition mode="out-in">
                <AtomsIcon icon="chevron-down" size="sm" v-if="item.subMenuList.length > 0 && menuSelected !== id" class="ms-2" />                
                <AtomsIcon icon="chevron-up" size="sm" v-else-if="item.subMenuList.length > 0 && menuSelected === id" class="ms-2" />
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
      </AtomsContainer>
    </div>
  </nav>
</header>