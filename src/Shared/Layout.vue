<script setup>
import Nav from "@/Shared/Nav.vue";
import {usePage} from '@inertiajs/vue3';
import {computed} from "vue";

const $page = usePage();
const userName = computed( () => $page.props.name)
const random = Math.floor(Math.random() * 90000 + 10000)

</script>

<template>
	<Head>
		<title>Default</title>
		<meta type="description" content="Default description" head-key="desc">
	</Head>

	<section>
		<header>
			<img alt="Vue logo" class="logo" height="125" src="@/assets/logo.svg" width="125"/>
			<Nav/>
			<div>
				<p>Hello {{ userName }}!</p>
				<p>{{ random }}</p>
			</div>
		</header>
	</section>
	<section>
		<slot/>
	</section>
</template>

<style scoped>

</style>