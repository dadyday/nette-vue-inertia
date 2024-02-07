<script setup>

</script>

<template>
  <form>
    <div class="container">
      <slot></slot>
    </div>
  </form>
</template>

<style lang="scss">
form > div * {
  // border: dashed 1px #888;
}
.field * {
  border: none;
}

</style>