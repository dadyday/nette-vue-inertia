<script setup>
import Col from "./Col.vue";
</script>

<template>
  <div class="row-box">
    <Wrap :wrapper="Col"><slot /></Wrap>
  </div>
</template>

<style lang="scss" scoped>
@use "bootstrap/dist/css/bootstrap.css";

.row-box {
  @extend .px-1, .gx-2, .gy-3;
  background: #fee;
}
</style>