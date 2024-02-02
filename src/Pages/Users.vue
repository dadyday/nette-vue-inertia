<script setup>
import {router} from "@inertiajs/vue3";
import {useAppStore} from '@/stores/app'
import {storeToRefs} from "pinia";
import {watch} from "vue";
import debounce from "lodash/debounce"

const props = defineProps({
	time: String,
	users: Object,
	filters: Object,
})

const $appStore = useAppStore()
const {sleep} = $(storeToRefs($appStore))

let search = $ref(props.filters.search)
watch($$(search), debounce(() => loadPage(1), 500))

let page = $computed({
  get: () => props.users.currentPage ?? 1,
  set: (value) => loadPage(value),
})

let busy = $ref(false)
let loading
let box

function loadPage(page) {
	router.get('/users', { page, search, sleep }, {
		replace: true,
		preserveState: true,
		preserveScroll: true,
		onStart: () => busy = true,
		onCancelToken: (token) => loading = token,
		onFinish: () => busy = false,
	})
}

function cancelLoading() {
	loading?.cancel()
	box.show();
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
		<BRow>
			<BInputGroup>
				<BFormInput placeholder="Search" v-model="search"/>
				<BInputGroupAppend>
					<BButton variant="primary">Search</BButton>
				</BInputGroupAppend>
			</BInputGroup>
		</BRow>

		<BOverlay :show="busy" @click="cancelLoading">
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