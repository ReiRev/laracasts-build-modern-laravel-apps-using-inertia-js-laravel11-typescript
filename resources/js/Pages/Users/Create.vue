<script setup lang="ts">
import { ref } from 'vue'
import { router, useForm, usePage } from '@inertiajs/vue3'

const form = useForm({
  name: '',
  email: '',
  password: '',
})

const submit = () => {
  form.post('/users')
}

const page = usePage()
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
      <div
        v-if="form.errors.name"
        v-text="form.errors.name"
        class="text-red-500 text-xs"
      ></div>
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
      <div
        v-if="form.errors.email"
        v-text="form.errors.email"
        class="text-red-500 text-xs"
      ></div>
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
      <div
        v-if="form.errors.password"
        v-text="form.errors.password"
        class="text-red-500 text-xs"
      ></div>
    </div>

    <div class="mb-6">
      <button
        type="submit"
        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
        :disabled="form.processing"
      >
        Submit
      </button>
    </div>
  </form>
</template>
