<template>
    <div class="bg-blue">
        <ContainerComponent>
            <div class="px-4 py-2 lg:py-4 flex justify-between items-center">
                <h1 class="text-white font-bold text-2xl">
                    <router-link to="/">Doceria</router-link>
                </h1>
                <div @click="toogleOpenNav" class="cursor-pointer">
                    <span class="block w-7 h-1 rounded bg-white mb-1"></span>
                    <span class="block w-7 h-1 rounded bg-white mb-1"></span>
                    <span class="block w-7 h-1 rounded bg-white mb-1"></span>
                </div>
                <nav
                    :class="[
                        'absolute top-0 h-full bg-gray w-full md:w-2/4 lg:w-1/4 duration-300',
                        openNav
                            ? 'right-0 transition transition-all'
                            : '-right-full transition transition-all',
                    ]"
                >
                    <router-link>Doces</router-link>
                    <router-link>Sobre</router-link>
                    <router-link>Sobre</router-link>
                </nav>
            </div>
        </ContainerComponent>
    </div>
</template>

<script setup>
import { ref } from "vue";

const openNav = ref(false);

const toogleOpenNav = () => {
    openNav.value = !openNav.value;
    console.log(openNav.value);
};
</script>

<script>
import ContainerComponent from "../Container/ContainerComponent.vue";

export default {
    name: "NavbarComponent",
    components: {
        ContainerComponent,
    },
};
</script>
