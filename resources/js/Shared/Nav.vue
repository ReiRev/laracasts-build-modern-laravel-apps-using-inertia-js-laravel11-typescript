<script setup lang="ts">
import NavLink from './NavLink.vue'
</script>

<template>
  <nav class="mt-6">
    <ul class="list-disc">
      <li>
        <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
      </li>
      <li>
        <NavLink href="/users" :active="$page.component === 'Users'">Users</NavLink>
      </li>
      <li>
        <NavLink href="/settings" :active="$page.component === 'Settings'">Settings</NavLink>
      </li>
    </ul>
  </nav>
</template>
