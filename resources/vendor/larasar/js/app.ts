import { createApp, h } from "vue";
import { createPinia } from "pinia";
// @ts-ignore
import { createInertiaApp } from "@inertiajs/vue3";
import { ZiggyVue } from "../../../../vendor/tightenco/ziggy/dist/vue.m";
import { get_routes } from "./lib/ziggy.js";

const pinia = createPinia();

import {
    Quasar,
    Dialog,
    Notify,
} from 'quasar'
import quasarIconSet from "quasar/icon-set/svg-material-icons";
import "quasar/src/css/index.sass";

import "../css/app.css";
import "@fontsource/public-sans";
import "@fontsource/public-sans/600.css";
import "@fontsource/public-sans/700.css";
import "@fontsource/public-sans/800.css";
import "@fontsource/public-sans/900.css";

import Layout from "./Layouts/Index.vue";

// @ts-ignore
import axios from 'axios';
import type { AxiosStatic } from 'axios';
import AppCtx from "./lib/app-ctx";
import { app_plugin } from "./lib/app";

window.axios = axios;
axios.defaults.withCredentials = true;
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

declare global {
    var Ziggy: any
    var axios: AxiosStatic
}

export default async function (context: AppCtx) {
    let layout = Layout
    const Ziggy = await get_routes();
    if (context.allow_splash) {
        // @ts-ignore
        const module = await import("./Layouts/SplashScreen.vue")
        layout = module.default
    }
    createInertiaApp({
        resolve: async (name) => {
            // @ts-ignore
            const pages = import.meta.glob("../../../js/Pages/**/*.vue");
            const page = await pages[`../../../js/Pages/${name}.vue`]();
            page.default.layout = layout;
            return page;
        },
        setup({ el, App, props, plugin }) {
            // @ts-ignore
            return createApp({ render: () => h(App, props) })
                .use(plugin)
                .use(pinia)
                .use(ZiggyVue, Ziggy)
                .use(Quasar, {
                    iconSet: quasarIconSet,
                    plugins: {
                        Dialog,
                        Notify,
                    },
                    config: {
                        notify: { }
                    }
                })
                .use(app_plugin)
                .mount(el);
        },
        progress: false,
    });
}
