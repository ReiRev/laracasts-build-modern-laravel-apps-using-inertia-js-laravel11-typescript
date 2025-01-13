<script setup lang="ts">
import Layout from '@/Shared/Layout.vue'
defineProps<{
  name: string
  frameworks: [string]
}>()
</script>

<template>
  <Layout>
    <h1 class="text-4xl font-bold">Home</h1>
  </Layout>
</template>
