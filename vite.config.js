import { defineConfig, splitVendorChunkPlugin } from 'vite'
import vue from '@vitejs/plugin-vue'
import liveReload from 'vite-plugin-live-reload'
import { fileURLToPath, URL } from 'node:url'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue(),
    liveReload([
      __dirname + '/(app|config)/**/*.php',
      __dirname + '/public/*.php',
    ]),
    splitVendorChunkPlugin(),
  ],
  resolve: {
    alias: [
      { find: '@', replacement: fileURLToPath(new URL('./src', import.meta.url)) },
    ]
    //  '@': fileURLToPath(new URL('./src', import.meta.url))
  },
  root: 'src',
  base: '/',
  build: {
    outDir: '../public/dist',
    emptyOutDir: false,
    manifest: true,
    rollupOptions: {
      input: './src/main.js',
    },
    watch: {
      include: '../app/**'
    }
  },
  server: {
    strictPort: true,
    port: 5133,
    origin: 'http://localhost:8000',
    proxy: {
      // string shorthand: http://localhost:5173/foo -> http://localhost:4567/foo
      '/api': 'http://localhost:8000/',
    },
  },
})
