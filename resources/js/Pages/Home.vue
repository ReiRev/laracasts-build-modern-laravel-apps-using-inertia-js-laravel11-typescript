<script setup lang="ts">
defineProps<{
  name: string,
  frameworks: [string]
}>();
</script>

<template>
<h1>Hello, {{ name }}</h1>
<p>In this series, we will use the following frameworks:</p>

<ul>
    <li v-for="framework in frameworks">
        {{ framework }}
    </li>
</ul>

</template>
