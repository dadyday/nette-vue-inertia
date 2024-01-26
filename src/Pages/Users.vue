<script setup>
import {router} from "@inertiajs/vue3";
import {ref, watch} from "vue";

const props = defineProps({
	time: String,
	users: Object,
})

//const page = ref(props.users.currentPage)
//watch(page, () => loadPage(page ?? 1))

watch(props.users, (value) => loadPage(value.currentPage ?? 1))
let busy = $ref(false)

function loadPage(page) {
	router.get('/users', { page }, {
		replace: true,
		preserveScroll: true,
		onBefore: () => busy = true,
		onFinish: () => busy = false,
	})
}

</script>

<template>
	<Head :title="`Users - Seite ${users.currentPage}`"/>

	<h1>Users</h1>
	<div>
		<BPagination
			v-model="users.currentPage"
			:total-rows="users.total"
			:per-page="users.perPage"
		/>
		<BTable
			:items="users.data"
			:busy="busy"
		>
		</BTable>
	</div>
	<div style="position: relative; bottom: -600px;">
		Current Time: {{ time }}
		<Link href="/users" preserve-scroll>Refresh</Link>
	</div>
</template>

<style lang="sass" scoped>
</style>