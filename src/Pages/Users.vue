<script setup>
import {router} from "@inertiajs/vue3";
import {useAppStore} from '@/stores/app'
import {storeToRefs} from "pinia";

const props = defineProps({
	time: String,
	users: Object,
})

const $appStore = useAppStore()
const {sleep} = $(storeToRefs($appStore))

const page = $computed({
	get: () => props.users.currentPage ?? 1,
	set: loadPage
})

let busy = $ref(false)
let loading
let box

function loadPage(page) {
	router.get('/users', { page, sleep }, {
		replace: true,
		preserveScroll: true,
		onBefore: () => busy = true,
		onCancelToken: (token) => (loading = token),
		onCancel: () => box?.show(),
		onFinish: () => busy = false,
	})
}

</script>

<template>
	<Head :title="`Users - Seite ${page}`"/>

	<h1>Users</h1>
	<div>
		<BRow>
			<BPagination
				v-model="page"
				:total-rows="users.total"
				:per-page="users.perPage"
				class="w-auto"
			/>
			<BFormInput type="number" v-model="sleep" class="w-25" />
		</BRow>
		<BOverlay :show="busy" @click="loading?.cancel()">
			<BTable
				:items="users.data"
			>
			</BTable>
		</BOverlay>
	</div>
	<div style="position: relative; bottom: -600px;">
		Current Time: {{ time }}
		<Link href="/users" preserve-scroll>Refresh</Link>
	</div>

	<BModal okOnly ref="box" title="Loading Users ..." >Canceled!</BModal>
</template>

<style lang="sass" scoped>
</style>