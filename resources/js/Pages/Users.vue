<script setup lang="ts">
import type { PageProps } from '@/types'

interface UserData {
  id: string
  name: string
  email: string
}

defineProps<{
  users: Array<UserData>
}>()
</script>

<template>
  <Head title="Users" />

  <h1 class="text-4xl font-bold">Users</h1>

  <ul>
    <li v-for="user in users" :key="user.id" v-text="user.name" />
  </ul>
</template>
