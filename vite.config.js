import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import { quasar } from "@quasar/vite-plugin";
import path from "path";
import { fdir } from "fdir";

const pages = new fdir().withFullPaths().crawl("resources/js/Pages").sync();

export default defineConfig({
    resolve: {
        alias: {
            '@larasar': path.resolve(__dirname, './resources/vendor/larasar'),
        },
    },
    plugins: [
        laravel({
            input: [...pages, "resources/js/app.js", "resources/vendor/larasar/js/init.js"],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        quasar({
            sassVariables: 'resources/vendor/larasar/css/quasar.sass'
        }),
    ],
});
