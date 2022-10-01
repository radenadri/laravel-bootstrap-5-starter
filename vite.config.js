import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import mkcert from'vite-plugin-mkcert';

export default defineConfig({
    server: {
        https: true
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        mkcert()
    ],
});
