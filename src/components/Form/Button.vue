<script setup>
import {getCurrentInstance} from "vue";

defineProps([ 'label', 'icon' ])
const parent = getCurrentInstance().parent
// console.log(parent.type)
</script>

<template>
	<button type="button" class="btn btn-primary">
		<Component :is="icon" />
		{{ label }}
	</button>
</template>

<style lang="scss" scoped>

</style>