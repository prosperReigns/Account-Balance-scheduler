<template>
  <div class="p-8 max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Balance Increment History</h1>
    <table class="w-full border">
      <thead>
        <tr>
          <th class="border p-2">Timestamp</th>
          <th class="border p-2">Increment Amount</th>
          <th class="border p-2">Resulting Balance</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in history" :key="item.id">
          <td class="border p-2">{{ item.created_at }}</td>
          <td class="border p-2">{{ item.increment_amount }}</td>
          <td class="border p-2">{{ item.resulting_balance }}</td>
        </tr>
      </tbody>
    </table>

    <router-link to="/" class="block mt-6 text-blue-700 underline">Back to Set Balance</router-link>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import api from '../api/axios'

const history = ref([])

onMounted(async () => {
  try {
    const res = await api.get('/balance/history');
    history.value = res.data;
  } catch (error) {
    console.error(error);
  }
})
</script>
