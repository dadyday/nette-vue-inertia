<script setup>
import Field from "./Field.vue";
defineProps(['label'])
</script>

<template>
  <div class="col-box col">
    <Label v-if="label">{{ label }}</Label>
    <Wrap :all="Field"><slot /></Wrap>
  </div>
</template>

<style lang="scss" scoped>
.col-box {
  background: #efe;
}
</style>