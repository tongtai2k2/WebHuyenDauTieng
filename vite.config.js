import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/sass/style.scss",
                "resources/sass/assets/css/style.css",
                "resources/sass/assets/js/main.js",
                "resources/sass/assets/imgs/logoDT.png",
            ],
            refresh: true,
        }),
    ],
});
