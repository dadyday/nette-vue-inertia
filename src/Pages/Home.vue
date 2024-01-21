<script setup>
import Layout from "@/Shared/Layout.vue";

defineProps({
	frameworks: Array,
})
</script>

<template>
	<Layout>
		<div>Featured by:</div>
		<ul>
			<li v-for="framework in frameworks">{{ framework }}</li>
		</ul>
	</Layout>
</template>
