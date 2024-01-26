<script setup>
import {computed} from "vue";
import NavLink from "@/Shared/NavLink.vue";
import {usePage} from '@inertiajs/vue3';

const props = defineProps({
	href: String,
})

const $page = usePage();

const active = computed(() => props.href.split('?')[0] === $page.url.split('?')[0]);
</script>

<template>
	<NavLink :active="active" :href="href">
		<slot></slot>
	</NavLink>
</template>

<style scoped>

</style>