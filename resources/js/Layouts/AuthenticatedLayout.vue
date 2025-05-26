<script setup>
import Sidebar from '@/Layouts/Sidebar.vue';
import TopNavBar from '@/Layouts/TopNavBar.vue';
import Footer from '@/Layouts/Footer.vue';
</script>

<template>

  <div class="wrapper">
    
    <TopNavBar />

    <Sidebar />

    <slot />

    <Footer />

  </div>

</template>
