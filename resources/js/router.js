import { createRouter, createWebHistory } from "vue-router";
import HomeComponent from "./pages/HomeComponent.vue";
import AboutComponent from "./pages/AboutComponent.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: HomeComponent,
    },
    {
        path: "/about",
        name: "about",
        component: AboutComponent,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
