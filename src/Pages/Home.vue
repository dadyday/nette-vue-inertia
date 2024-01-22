<script setup>
defineProps({
	frameworks: Array,
})
</script>

<template>
	<Head>
		<title>Home</title>
		<meta type="description" content="Home description" head-key="desc">
	</Head>

	<div>Featured by:</div>
	<ul>
		<li v-for="framework in frameworks">{{ framework }}</li>
	</ul>
</template>
