<script setup>
defineProps({
	time: String,
})
</script>

<template>
	<Head title="Users"/>

	<h1>Users</h1>
	<div style="position: relative; bottom: -600px;">
		Current Time: {{ time }}
		<Link href="/users" preserve-scroll>Refresh</Link>
	</div>
</template>

<style scoped>

</style>