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
.field-box {
  background: #eef;
}
</style>