<script setup>
import Nav from '@/Shared/Nav.vue'
defineProps({
	name: {default: 'World'},
	frameworks: Array,
})
</script>

<template>
	<Nav />
	<img alt="Vue logo" class="logo" height="125" src="@/assets/logo.svg" width="125"/>

	<div>Hello {{ name }}!</div>
	<div>Featured by:</div>
	<ul>
		<li v-for="framework in frameworks">{{ framework }}</li>
	</ul>
</template>
