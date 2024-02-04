<script setup>
import Field from "./Field.vue";
</script>

<template>
  <div class="col-box">
    <Wrap :wrapper="Field">
      <slot></slot>
    </Wrap>
  </div>
</template>

<style lang="scss" scoped>
@use "bootstrap/dist/css/bootstrap.css";

.col-box {
  @extend .col, .m-2;
  background: #efe;
}
</style>