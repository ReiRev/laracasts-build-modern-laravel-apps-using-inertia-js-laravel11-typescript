<script setup lang="ts">
import Nav from './Nav.vue'
</script>

<template>
  <section class="p-6 bg-gray-200">
    <header class="flex justify-between">
      <h1 class="font-bold text-lg">My App</h1>
      <Nav />
    </header>
  </section>

  <section class="p-6">
    <div class="max-w-3xl mx-auto w-full">
      <slot />
    </div>
  </section>
</template>
