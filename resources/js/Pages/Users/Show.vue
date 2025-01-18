<script setup lang="ts">
defineProps<{
  user: {
    id: number
    name: string
    email: string
    created_at: string
  }
  hoge: string
}>()
</script>

<template>
  <Link href="/users" class="text-sm text-blue-500">Back</Link>

  <h1 class="font-bold text-xl">{{ user.name }}</h1>
  <p>{{ user.email }}</p>
  <p>Registered: {{ user.created_at }}.</p>
</template>
