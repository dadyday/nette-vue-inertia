<script setup>

</script>

<template>
  <form>
    <div class="container-fluid">
      <slot></slot>
    </div>
  </form>
</template>

<style>
form > div * {
  border: dashed 1px #888;
  margin: 5px;
  padding: 5px;
}
.field * {
  border: none;
}

</style>