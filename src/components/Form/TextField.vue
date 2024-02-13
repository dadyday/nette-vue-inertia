<script setup>
const props = defineProps(['icon'])
</script>

<template>
	<div class="form-control d-flex align-self-center">
		<Component style="margin: 0 0.5em 0 -0.2em" :is="icon" v-if="icon"/>
		<input id="input" class="inline flex-grow-1">
	</div>
</template>

<style lang="scss" scoped>
.inline {
	background: transparent;
	border: none;
	margin: 0;
	padding: 0;
	outline-width: 0;
	width: 100%;
}
</style>