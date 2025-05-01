<template>
    <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow rounded">
      <h2 class="text-xl font-bold mb-4">Set Initial Balance</h2>
      <form @submit.prevent="submitBalance">
        <label class="block mb-2 font-medium">Initial Balance:</label>
        <input
          v-model="amount"
          type="number"
          class="w-full p-2 border rounded mb-4"
          placeholder="Enter amount"
          required
        />
        <button
          type="submit"
          class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded"
        >
          Submit
        </button>
        <p v-if="message" class="mt-3 text-green-600">{{ message }}</p>
      </form>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue'
  import axios from 'axios'
  
  const amount = ref('')
  const message = ref('')
  
  const submitBalance = async () => {
    try {
      const response = await axios.post('/api/balance/set', {
        amount: amount.value
      })
      message.value = 'Initial balance set successfully!'
      amount.value = ''
    } catch (error) {
      message.value = 'Error setting balance.'
      console.error(error)
    }
  }
  </script>
  