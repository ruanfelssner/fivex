<template>
    <div class="overlay bg-black w-[100vw] h-[100vh] fixed top-0 left-0 opacity-60 z-10" @click="closeMenu()" />
    <div class="fixed right-0 top-0 z-20 p-5 bg-white h-[100vh] mh-[100vh] overflow-y-auto">
        <div class="flex justify-between mb-5">
            <router-link to="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="@/assets/imgs/logo.webp" alt="5 FIVEX Store" class="h-[40px]" />
            </router-link>
            <button @click="closeMenu()"><AtomsIcon icon="close" /></button>
        </div>
            <a href="#">
                <div class="flex justify-center py-4 font-bold text-xl bg-neutral-100 mb-4 px-6">
                    <div class="rounded-full bg-white flex justify-center align-center p-4 me-6">
                        <AtomsIcon icon="user" />
                    </div>
                    <div class="welcome flex flex-col justify-center">
                        <p>Olá, visitante</p>
                        <span>Faça seu login</span>
                    </div>
                </div>
            </a>
        <ul class="flex flex-col">
            <li v-for="(item, id) of menu" :key="id+' Menu'">
                <div class="flex justify-between py-3 cursor-pointer" @click="item.subMenu = !item.subMenu">
                    <a :href="item.link" class="text-xl"><span>{{item.name}}</span></a>
                    <AtomsIcon icon="chevron-right" class="mx-3" v-if="item.subMenuList.length > 0" />
                </div>
                <ul v-if="item.subMenu">
                    <li v-for="(subMenu, idx) of item.subMenuList" :key="idx+ 'submenu'">
                        <a :href="subMenu.link"><span>{{subMenu.name}}</span></a>
                        <hr />
                    </li>
                </ul>
            </li>
        </ul>
        <hr class="my-5">
        <ul class="flex flex-col">
            <li><a href="#" class="flex justify-between py-2 text-xs"><span>Sobre nós</span></a></li>
            <li><a href="#" class="flex justify-between py-2 text-xs"><span>Blog</span></a></li>
            <li><a href="#" class="flex justify-between py-2 text-xs"><span>Whatsapp (41) 98521-2626</span></a></li>
        </ul>
    </div>
</template>
<script lang="ts" setup>
interface SubMenu {
    name: string;
    link: string;
}
interface Menu {
    name: string;
    link: string;
    subMenu: boolean;
    subMenuList: Array<SubMenu>;
}
const props = defineProps<{
    menu: Menu[];
}>()

const emit = defineEmits(['closeMenu'])


const closeMenu = () => {
    emit('closeMenu');
}
</script>