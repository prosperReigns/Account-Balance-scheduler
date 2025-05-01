<template>
  <div>
    <nav class="bg-gray-800 text-white px-6 py-4">
      <div class="flex justify-between items-center">
        <h1 class="text-lg font-semibold">Balance Scheduler</h1>
        <div class="space-x-4">
          <RouterLink
            to="/"
            class="hover:text-gray-300"
            :class="{ 'underline': $route.path === '/' }"
          >
            Set Balance
          </RouterLink>
          <RouterLink
            to="/history"
            class="hover:text-gray-300"
            :class="{ 'underline': $route.path === '/history' }"
          >
            Increment History
          </RouterLink>
        </div>
      </div>
    </nav>

    <main class="p-4 bg-gray-100 min-h-screen">
      <router-view />
    </main>
  </div>
</template>

<script setup>
</script>
