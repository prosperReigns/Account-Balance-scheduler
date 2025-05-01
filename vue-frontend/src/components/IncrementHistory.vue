<template>
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow rounded">
      <h2 class="text-xl font-bold mb-4">Increment History</h2>
      <table class="min-w-full border">
        <thead>
          <tr class="bg-gray-100">
            <th class="py-2 px-4 border">#</th>
            <th class="py-2 px-4 border">Amount</th>
            <th class="py-2 px-4 border">Resulting Balance</th>
            <th class="py-2 px-4 border">Timestamp</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(log, index) in logs" :key="log.id">
            <td class="py-2 px-4 border">{{ index + 1 }}</td>
            <td class="py-2 px-4 border">{{ log.amount }}</td>
            <td class="py-2 px-4 border">{{ log.resulting_balance }}</td>
            <td class="py-2 px-4 border">{{ new Date(log.created_at).toLocaleString() }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue'
  import axios from 'axios'
  
  const logs = ref([])
  
  const fetchLogs = async () => {
    try {
      const response = await axios.get('/api/increment-logs')
      logs.value = response.data
    } catch (error) {
      console.error('Error fetching increment logs:', error)
    }
  }
  
  onMounted(fetchLogs)
  </script>
  