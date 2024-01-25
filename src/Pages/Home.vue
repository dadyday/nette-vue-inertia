<script setup>
import {ref} from "vue";

defineProps({
	frameworks: Array,
})
const show = ref(false)
</script>

<template>
	<Head>
		<title>Home</title>
		<meta type="description" content="Home description" head-key="desc">
	</Head>

	<p>
		<p>Featured by:</p>
		<BListGroup>
			<BListGroupItem v-for="framework in [...frameworks, 'Bootstrap 5']">
				<IBiCheckLg />
				{{ framework }}
			</BListGroupItem>
		</BListGroup>
	</p>

	<p>
		<BButton variant="primary" @click="show = !show">Click me</BButton>
		<BModal v-model="show">Test</BModal>
	</p>
</template>
