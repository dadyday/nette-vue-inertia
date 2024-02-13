<script setup>
import {getCurrentInstance} from "vue";

const props = defineProps(['wrapper'])
let current = getCurrentInstance()

console.log('should ' + props.wrapper.__name)

let parent = current.parent
while (parent && props.wrapper !== parent.type) {
	if (parent.type.__name === 'Edit') break
	console.log(parent.type.__name)
	parent = parent.parent
}
const wrap = props.wrapper === parent.type

</script>

<template>
	<div>is {{ wrap }}</div>
	<div>should {{ wrapper.__name }}</div>
	<Component :is="wrapper" v-bind="$props" v-if="wrap">
		<div>made {{ wrapper.__name }}</div>
		<slot />
	</Component>
	<slot v-else />
</template>
