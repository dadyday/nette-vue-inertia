<script setup>
import {router} from "@inertiajs/vue3";
import {ref, watch} from "vue";

const props = defineProps({
	time: String,
	sleep: Number,
	users: Object,
})

const page = $computed({
	get: () => props.users.currentPage ?? 1,
	set: loadPage
})

let busy = $ref(false)
let sleep = $ref(props.sleep ?? 5)
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
		<BPagination
			v-model="page"
			:total-rows="users.total"
			:per-page="users.perPage"
		/>
		<BFormInput type="number" v-model="sleep" />

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

	<BModal ref="box" title="Loading Users ..." >Canceled!</BModal>
</template>

<style lang="sass" scoped>
</style>