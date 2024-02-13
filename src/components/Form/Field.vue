<script setup>
defineProps(['label'])
</script>

<template>
	<div class="field-box">
		<Label v-if="label">{{ label }}</Label>
		<div class="input-group">
			<slot />
		</div>
	</div>
</template>

<style lang="scss">
@use "bootstrap/dist/css/bootstrap.css";

.input-group > * {
	@extend .input-group-text
}
</style>