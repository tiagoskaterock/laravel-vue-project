<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link, router } from '@inertiajs/vue3';
import DashboardBox from './DashboardBox.vue';

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
          <h1 class="text-center mb-4">Dashboard</h1>

          <div class="row">

            <DashboardBox :total="total_de_posts" icon="far fa-newspaper" title="Posts" link="/admin/blog" />

            <DashboardBox :total="total_de_clientes" icon="far fa-address-card" title="Clientes" link="/admin/clientes" />

          </div>

        </div>
      </section>
    </div>
  </AuthenticatedLayout>
</template>
