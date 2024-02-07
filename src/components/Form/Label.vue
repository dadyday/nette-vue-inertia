<script setup>
defineProps(['label'])
</script>

<template>
  <label class="label-box">
    <slot :label="label"><b style="color: red">{{ label }}</b></slot>
  </label>
</template>

<style lang="scss">
@use "bootstrap/dist/css/bootstrap.css";

.label-box {
  background: #eff;
}
</style>
