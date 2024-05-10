import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/bootstrap.css', 'resources/css/fontawesome-all.css', 'resources/js/jquery.min.js', 'resources/js/bootstrap.min.js'],
            refresh: true,
        }),
    ],
});
