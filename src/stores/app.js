import {defineStore} from "pinia";
import {computed, ref} from "vue";

export const useAppStore = defineStore('app', () => {
	const	name = ref('Spongebob')
	const greeting = computed(() => `Hello ${name.value}!`) // getter
	function setName(value) { name.value = value } // action

	const sleep = ref(0)

	return {
		name, greeting, setName,
		sleep,
	}
})