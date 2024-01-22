<script setup>
import Layout from "@/Shared/Layout.vue";

defineOptions({
	layout: Layout,
})
defineProps({
	frameworks: Array,
})
</script>

<template>
	<div>Featured by:</div>
	<ul>
		<li v-for="framework in frameworks">{{ framework }}</li>
	</ul>
</template>
