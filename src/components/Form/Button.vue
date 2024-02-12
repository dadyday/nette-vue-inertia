<script setup>
defineProps([ 'label' ])
</script>

<template>
	<button type="button" class="btn btn-primary">{{ label }}</button>
</template>

<style lang="scss" scoped>
button {
}
</style>