<script setup>
import {resolveComponent} from "vue";

const props = defineProps(['icon'])
// const comp = resolveComponent(props.icon)
</script>

<template>
	<i>
		<component :is="icon" />
	</i>
</template>

<style scoped>

</style>