<script setup>
import PageLink from "@/Shared/PageLink.vue";
</script>

<template>
	<nav>
		<ul>
			<li>
				<PageLink href="/">Home</PageLink>
			</li>
			<li>
				<PageLink href="/users?bla">Users</PageLink>
			</li>
			<li>
				<PageLink href="/settings">Settings</PageLink>
			</li>
		</ul>
	</nav>
</template>

<style scoped>

</style>