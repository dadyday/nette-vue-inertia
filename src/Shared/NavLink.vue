<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
	active: Boolean,
})
</script>

<template>
	<Link :class="{active}">
		<slot></slot>
	</Link>
</template>

<style scoped>
.active {
	font-weight: bold;
	text-decoration: underline;
}
</style>