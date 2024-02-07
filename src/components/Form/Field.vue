<script setup>
defineProps(['label'])
</script>

<template>
  <div class="input-group">
    <slot />
  </div>
</template>

<style lang="scss">
.field-box {
  background: #eef;
}
</style>