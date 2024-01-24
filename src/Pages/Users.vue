<script setup>
defineProps({
	time: String,
	users: Array,
})
</script>

<template>
	<Head title="Users"/>

	<h1>Users</h1>
	<div>
		<ul>
			<li v-for="user in users" :key="user.id" v-text="user.name" />
		</ul>
	</div>
	<div style="position: relative; bottom: -600px;">
		Current Time: {{ time }}
		<Link href="/users" preserve-scroll>Refresh</Link>
	</div>
</template>

<style scoped>

</style>