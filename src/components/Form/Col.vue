<script setup>
import Field from "./Field.vue";
</script>

<template>
	<div class="col-box col">
		<Wrap :each="Field">
			<slot />
		</Wrap>

	</div>
</template>

<style lang="scss" scoped>
.col-box {
  background: #efe;
}
</style>