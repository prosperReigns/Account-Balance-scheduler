<template>
  <div class="p-8 max-w-md mx-auto">
    <h1 class="text-2xl font-bold mb-4">Set Initial Balance</h1>
    <input v-model="amount" type="number" placeholder="Enter amount" class="border rounded p-2 w-full mb-4" />
    <button @click="setBalance" class="bg-blue-500 text-white p-2 rounded w-full">Set Balance</button>
    <p v-if="message" class="text-green-500 mt-4">{{ message }}</p>

    <router-link to="/history" class="block mt-6 text-blue-700 underline">View Increment History</router-link>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import api from '../api/axios'

const amount = ref(0)
const message = ref('')

const setBalance = async () => {
  try {
    await api.post('/balance/set', { amount: amount.value });
    message.value = 'Balance set successfully!';
  } catch (error) {
    console.error(error);
    message.value = 'Failed to set balance.';
  }
}
</script>

