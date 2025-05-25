<script setup>
  import { ref } from 'vue';
  import Sidebar from '@/Layouts/Sidebar.vue';
  import TopNavBar from '@/Layouts/TopNavBar.vue';
</script>

<template>
  <div class="min-h-screen bg-gray-100 flex">

    <!-- Sidebar fixada na esquerda -->
    <Sidebar />

    <!-- Conteúdo principal: nav superior, header e main -->
    <div class="flex-1 flex flex-col">
      
      <TopNavBar />

      <!-- Page Content -->
      <main class="flex-1 overflow-auto">
        <slot />
      </main>
    </div>

  </div>

</template>
