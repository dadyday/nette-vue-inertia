import './assets/main.css'

import {createApp, h} from 'vue'
import {createInertiaApp, Head, Link} from '@inertiajs/vue3'
import Layout from "@/Shared/Layout.vue";

// import { createPinia } from 'pinia'
// app.use(createPinia())

// import router from './router'
// app.use(router)


createInertiaApp({
	resolve: (name) => {
		return import(`./Pages/${name}.vue`).then((page) => {
			page.default.layout ??= Layout
			return page
		})
	},
	setup({el, App, props, plugin}) {
		createApp({render: () => h(App, props)})
			.use(plugin)
			.component('Link', Link)
			.component('Head', Head)
			.mount(el)
	},
	title: (title) => `${title} - Demo`,
})
