<script setup lang="ts">
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'

const form = ref({
  name: '',
  email: '',
  password: '',
})

const submit = () => {
  router.post('/users', form.value)
}
</script>
<template>
  <Head title="Create User" />

  <h1 class="text-3xl">Create New User</h1>

  <form
    @submit.prevent="submit"
    action="/users"
    method="POST"
    class="max-w-md mx-auto mt-6"
  >
    <div class="mb-6">
      <label
        class="block mb-2 uppercase font-bold text-xs text-gray-700"
        for="name"
        >Name</label
      >

      <input
        v-model="form.name"
        class="border border-gray-400 p-2 w-full"
        type="text"
        name="name"
        id="name"
        required
      />
    </div>

    <div class="mb-6">
      <label
        class="block mb-2 uppercase font-bold text-xs text-gray-700"
        for="email"
        >Email</label
      >

      <input
        v-model="form.email"
        class="border border-gray-400 p-2 w-full"
        type="email"
        name="email"
        id="email"
        required
      />
    </div>

    <div class="mb-6">
      <label
        class="block mb-2 uppercase font-bold text-xs text-gray-700"
        for="password"
        >Password</label
      >

      <input
        v-model="form.password"
        class="border border-gray-400 p-2 w-full"
        type="password"
        name="password"
        id="password"
        required
      />
    </div>

    <div class="mb-6">
      <button
        type="submit"
        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
      >
        Submit
      </button>
    </div>
  </form>
</template>
