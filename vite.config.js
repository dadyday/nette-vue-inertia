import { defineConfig, splitVendorChunkPlugin } from 'vite'
import vue from '@vitejs/plugin-vue'
import liveReload from 'vite-plugin-live-reload'
import { fileURLToPath, URL } from 'node:url'
import Components from 'unplugin-vue-components/vite'
import {BootstrapVueNextResolver} from 'unplugin-vue-components/resolvers'
import Icons from 'unplugin-icons/vite'
import IconsResolve from 'unplugin-icons/resolver'
import ReactivityTransform from '@vue-macros/reactivity-transform/vite'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue(),
		ReactivityTransform(),
    liveReload([
      __dirname + '/(app|config)/**/*.php',
      __dirname + '/public/*.php',
    ]),
		Components({
			resolvers: [
				BootstrapVueNextResolver(),
				IconsResolve(),
			],
			dts: true,
		}),
		Icons({
			compiler: 'vue3',
			autoInstall: true,
		}),
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
