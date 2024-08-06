<template>
    <AtomsContainer>
        
        <AtomsRow :colsDesktop="5">
            <button 
                @click="changeSearch(0)" :class="selectedSearch === 0 ? 'bg-ecommerce-primary text-ecommerce-secondary': ''" 
                class="comprar hover:no-underline flex items-center justify-center px-6 py-2 text-sm font-medium text-center rounded-full tracking-widest border-2 border-ecommerce-primary">
                <span class="text-xl">Pneus</span>
                <AtomsIcon icon="tires" prefix="default" size="lg" class="ms-2" /> 
            </button>
            <button 
                @click="changeSearch(1)" 
                :class="selectedSearch === 1 ? 'bg-ecommerce-primary text-ecommerce-secondary': ''" 
                class="comprar hover:no-underline flex items-center justify-center px-6 py-2 text-sm font-medium text-center rounded-full tracking-widest border-2 border-ecommerce-primary">
                <span class="text-xl">Rodas</span>
                <AtomsIcon icon="wheels" prefix="default" size="lg" class="ms-2" />
            </button>
            <div class="col-span-3 inline-flex items-center justify-center px-6">
                <div class="grid grid-cols-2 gap-4 ps-6" v-if="selectedSearch === 0">
                    <div>
                        <label for="aro" class="me-2 font-semibold text-xl">Aro</label>
                        <select name="aro" id="aro" class=" px-4 py-2 border-2 rounded-full" v-model="aroSelected" @change="onSelectAro">
                            <option :value="null" disabled>Selecione</option>
                            <option :value="id" v-for="(item, id) of aros">{{ item.name }}</option>
                        </select>
                    </div>
                    <div>
                        <label for="largura" class="me-2 font-semibold text-xl">Largura</label>
                        <select name="largura" id="largura" class=" px-4 py-2 border-2 rounded-full" placeholder="Largura" v-model="larguraSelected">
                            <option :value="null" disabled>Selecione</option>
                            <option :value="item" v-for="(item, id) of larguras">{{ item.name }}</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 ps-6" v-else-if="selectedSearch === 1">
                    <div>
                        <label for="aro" class="me-2 font-semibold text-xl">Aro</label>
                        <select name="aro" id="aro" class=" px-4 py-2 border-2 rounded-full" v-model="wheelSelected">
                            <option :value="null" disabled>Selecione</option>
                            <option :value="id" v-for="(item, id) of wheels">{{ item.name }}</option>
                        </select>
                    </div>
                </div>
                <button @click="goCategory()" :disabled="validateSearch" class="comprar hover:no-underline flex items-center justify-center px-6 py-3 ms-6 text-sm font-medium text-center rounded-full tracking-widest0 bg-ecommerce-primary text-ecommerce-secondary border-2 border-ecommerce-primary hover:bg-white">
                    <AtomsIcon icon="search" size="lg" /> 
                </button>
            </div>
        </AtomsRow>
    </AtomsContainer>
</template>
<script lang="ts" setup>
const router = useRouter()

import { service } from '~/services/api';

type Children = {
    name: string;
    slug: string;
    term_id: number;
}

type Data = {
    name: string;
    slug: string;
    term_id: number;
    children: Children[];
}
const data = ref([]) as Ref<Data[]>;
const wheels = ref([]) as Ref<Data[]>;

const selectedSearch = ref(0);

const wheelSelected = ref(null);
// start tires
const larguras = ref([]) as Ref<Data[]>;
const aros = ref([]) as Ref<Data[]>;
const larguraSelected = ref(null);
const aroSelected = ref(null);

const changeSearch = async (index: number) => {
    selectedSearch.value = index;
    if(index === 0){
        data.value = await service('wc/v3/deep-categories/18') as Data[];
        aros.value = data.value.filter((e: Data) => e.name !== 'Lançamento').map((e: Data) => {
            return {
                ...e,
                name: e.name.replace('Aro ', '')
            }
        }) as Data[];
    }
    if(index === 1){
        data.value = await service('wc/v3/deep-categories/17') as Data[];
        wheels.value = data.value.filter((e: Data) => e.name !== 'Lançamento');
    }
}
changeSearch(0)

const onSelectAro = async () => {
    larguraSelected.value = null;
    if(aroSelected.value !== null){
        larguras.value = data.value[aroSelected.value].children as Data[];
    }
}

// end tires

const validateSearch = computed(() => {
    if(selectedSearch.value === 0 && aroSelected.value === null){
        return true;
    }
    if(selectedSearch.value === 1 && wheelSelected.value === null){
        return true;
    }
    return false;
})

const goCategory = () => {
    let slug = '';
    if(selectedSearch.value === 0 && aroSelected.value !== null){        
        slug = 'categoria/pneus/'+data.value[aroSelected.value].slug;
    }
    if(selectedSearch.value === 1 && wheelSelected.value !== null){
        slug = 'categoria/rodas/'+data.value[wheelSelected.value].slug;
    }
    router.push(slug)
}
</script>