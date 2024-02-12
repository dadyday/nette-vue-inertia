<script setup>
import Row from "./Form/Row.vue";
</script>

<template>
	<form>
		<div class="container">
			<Wrap :group="Row">
				<slot />
			</Wrap>
		</div>
	</form>
</template>

<style lang="scss">
form, .row-box, col-box, field-box, label-box {
	border: dashed 1px #888;
	margin: 5px;
	padding: 5px;
}
</style>