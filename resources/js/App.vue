<template>
    <div id="app">
        <NavbarComponent />
        <router-view></router-view>
    </div>
</template>

<script>
import NavbarComponent from "./components/NavBar/NavbarComponent.vue";

export default {
    name: "App",
    components: {
        NavbarComponent,
    },
};
</script>
