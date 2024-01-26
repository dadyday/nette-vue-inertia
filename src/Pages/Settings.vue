<script setup>
import SpecialLayout from "@/Shared/SpecialLayout.vue";

defineOptions({
	layout: SpecialLayout,
})

let any = $ref() // let, to be changeable
any = 42 // no need of .value
const anyRef = $$(any) // reactiv-ate
anyRef.value = 37

</script>

<template>
	<Head title="Settings" />

	<h1>Settings</h1>
	<BRow>
		<p>{{ any }} - {{ anyRef }}</p>
	</BRow>
	<BRow>
		<BButton @click="any ++">Up</BButton>
		<BButton @click="anyRef --">Down</BButton>
	</BRow>
</template>

<style lang="sass" scoped>
@use "bootstrap/dist/css/bootstrap.css"

.row
	@extend .px-1
.row > *
	@extend .col, .m-2

</style>