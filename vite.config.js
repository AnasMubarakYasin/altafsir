import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import { quasar } from "@quasar/vite-plugin";
import path from "path";
import { fdir } from "fdir";

const css = new fdir().withFullPaths().crawl("resources/css").sync();
const js = new fdir().withFullPaths().crawl("resources/js").sync();

export default defineConfig({
    resolve: {
        alias: {
            '@larasar': path.resolve(__dirname, './resources/vendor/larasar'),
        },
    },
    plugins: [
        laravel({
            input: [...css, ...js, "resources/vendor/larasar/js/init.js"],
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
