<script setup>

</script>

<template>
  <div class="field-box">
    <slot></slot>
  </div>

</template>

<style lang="scss">
@use "bootstrap/dist/css/bootstrap.css";

.field-box {
  background: #eef;
  & * {
    border: none;
  }
}
</style>