<script setup>
import Row from "./Form/Row.vue";
</script>

<template>
	<div class="container">
		<form class="form-box">
			<Wrap :group="Row">
				<slot />
			</Wrap>
		</form>
	</div>
</template>
