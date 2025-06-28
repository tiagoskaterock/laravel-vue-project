<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link, router } from '@inertiajs/vue3';

defineProps({
  total_de_posts: Number,
  total_de_clientes: Number,
});
</script>

<template>
  <AuthenticatedLayout>
    <Head title="Dashboard" />

    <div class="content-wrapper">
      <section class="content pt-3">
        <div class="container-fluid">
          <h1 class="text-center mb-4">Configurações</h1>

          <div class="row">



          </div>

        </div>
      </section>
    </div>

  </AuthenticatedLayout>
  
</template>
