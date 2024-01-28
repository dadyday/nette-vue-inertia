<script setup>
import {useAppStore} from '@/stores/app'
import {storeToRefs} from "pinia";

defineProps({
	frameworks: Array,
})

const $appStore = useAppStore()
let {name} = $(storeToRefs($appStore))

const show = $ref(false)
</script>

<template>
	<Head>
		<title>Home</title>
		<meta type="description" content="Home description" head-key="desc">
	</Head>

	<p>
		<h1>Hello {{ name }}</h1>

		<p>Featured by:</p>
		<BListGroup>
			<BListGroupItem v-for="framework in [...frameworks, 'Bootstrap 5']">
				<IconBiCheckLg />
				{{ framework }}
			</BListGroupItem>
		</BListGroup>
	</p>

	<p>
		<BButton variant="primary" @click="show = !show">Click me</BButton>
		<BModal okOnly v-model="show">
			<BFormInput v-model="name" />
			<BButton @click="$appStore.setName('Thadeus')">Set Thadeus</BButton>
		</BModal>
	</p>
</template>
