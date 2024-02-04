<script setup>
defineProps(['label'])
</script>

<template>
  <div class="field">
    <label for="input">{{ label }}</label>
    <input id="input" />
  </div>
</template>

<style scoped>

</style>