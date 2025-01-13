<script setup lang="ts">
import { defineProps } from 'vue'
import Layout from '@/Shared/Layout.vue'

defineProps<{
  time: string
}>()
</script>

<template>
  <Layout>
    <h1 class="text-4xl font-bold">Users</h1>
    <div style="margin-top: 400px">
      <p>The current time is {{ time }}.</p>
      <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
    </div>
  </Layout>
</template>
