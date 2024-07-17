import App from "./App.vue";
import "./bootstrap";
import { createApp } from "vue";
import router from "./router";

createApp(App).use(router).mount("#app");
