import './assets/main.css'

import {createApp, h} from 'vue'
import {createInertiaApp, Link} from '@inertiajs/vue3'

// import { createPinia } from 'pinia'
// app.use(createPinia())

// import router from './router'
// app.use(router)


createInertiaApp({
	resolve: name => {
		const pages = import.meta.glob('./Pages/**/*.vue', {eager: true})
		return pages[`./Pages/${name}.vue`]
	},
	setup({el, App, props, plugin}) {
		createApp({render: () => h(App, props)})
			.use(plugin)
			.component('Link', Link)
			.mount(el)
	},
})
