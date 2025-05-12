import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/loader.css',
                'resources/css/app.css',
                'resources/css/services.css',
                'resources/js/app.js',
                'resources/js/pages/gallery.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: 'pnimasonryservices.local',
        hmr: {
            host: 'pnimasonryservices.local',
        },
    },
    headers: {
        'Access-Control-Allow-Origin': '*',
    },
})
