<script setup>
import Col from "./Col.vue";
</script>

<template>
	<div class="row-box row">
		<Wrap :each="Col">
			<slot />
		</Wrap>
	</div>
</template>

<style lang="scss" scoped>
</style>