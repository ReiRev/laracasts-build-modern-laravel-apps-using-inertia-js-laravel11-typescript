<script setup lang="ts">
import { defineProps } from 'vue'
defineProps<{
  href: string
  active: boolean
}>()
</script>

<template>
  <Link
    :href="href"
    class="text-blue-500 hover:underline"
    :class="{
      'font-bold underline': active,
    }"
  >
    <slot />
  </Link>
</template>
