<script setup lang="ts">
import { router, useForm, usePage } from '@inertiajs/vue3'
import { defineComponent } from 'vue'

const form = useForm({
  email: '',
  password: '',
})
const submit = () => {
  form.post('/login')
}
</script>

<script lang="ts">
export default defineComponent({
  layout: null,
})
</script>

<template>
  <Head title="Login Page" />
  <main class="grid place-items-center min-h-screen">
    <section
      class="bg-white p-8 rounded max-w-md mx-auto border rounded-xl"
    >
      <h1 class="text-3xl mb-6">Login</h1>

      <form @submit.prevent="submit" action="/users" method="POST">
        <div class="mb-6">
          <label
            class="block mb-2 uppercase font-bold text-xs text-gray-700"
            for="email"
            >Email</label
          >

          <input
            v-model="form.email"
            class="border border-gray-400 p-2 w-full rounded"
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
            class="border border-gray-400 p-2 w-full rounded"
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
            Log In
          </button>
        </div>
      </form>
    </section>
  </main>
</template>
