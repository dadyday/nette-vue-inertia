<script setup>
defineProps({
  backendFramework: String,
})
</script>

<template>
  <img alt="Vue logo" class="logo" src="@/assets/logo.svg" width="125" height="125" />

  <div>Hello World!</div>
  <div>Dady was here ... </div>
  <div>from: {{ backendFramework }}</div>
</template>
