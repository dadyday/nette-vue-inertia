<script setup>
const props = defineProps(['wrapper'])

function compName(el) {
  return el.type?.__name ?? el.type
}
const wrapperName = compName(props.wrapper)
</script>

<template>
  <template v-for="(item, i) in $slots.default()" :key="i">
    <Component :is="wrapper" v-if="wrapper !== item">
      <Component :is="item" />
    </Component>
    <Component :is="item" v-else />
  </template>
</template>
