<script setup>
import Nav from "@/Shared/Nav.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
	time: String,
})
</script>

<template>
	<Nav />
	<h1>Users</h1>

	<div style="margin: 800px 0 20px 0">
		Current Time: {{ time }}
		<Link href="/users" preserve-scroll>Refresh</Link>
	</div>
</template>

<style scoped>

</style>