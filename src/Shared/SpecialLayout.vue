<script setup>

import Nav from "@/Shared/Nav.vue";
</script>

<template>
	<section>
		<header>
			<img alt="Vue logo" class="logo" height="125" src="@/assets/logo.svg" width="125"/>
			<Nav/>
			<div>Special Layout</div>
		</header>
	</section>
	<section>
		<slot/>
	</section>
</template>

<style scoped>

</style>