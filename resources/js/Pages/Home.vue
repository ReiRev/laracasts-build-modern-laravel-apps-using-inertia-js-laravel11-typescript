<script setup lang="ts">
import Nav from '@/Shared/Nav.vue'

defineProps<{
  name: string
  frameworks: [string]
}>()
</script>

<template>
  <h1 class="text-4xl font-bold">Hello, {{ name }}</h1>
  <Nav />
</template>
