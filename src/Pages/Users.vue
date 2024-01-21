<script setup>
import {Link} from "@inertiajs/vue3";
import Layout from "@/Shared/Layout.vue";

defineProps({
	time: String,
})
</script>

<template>
	<Layout>
		<h1>Users</h1>

		<div style="position: relative; bottom: -600px;">
			Current Time: {{ time }}
			<Link href="/users" preserve-scroll>Refresh</Link>
		</div>
	</Layout>
</template>

<style scoped>

</style>