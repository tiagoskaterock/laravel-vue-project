<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';

// Acessa os dados enviados pelo controller
const config = computed(() => usePage().props.config);
</script>

<template>
  <AuthenticatedLayout>
    <Head title="Configurações" />

    <div class="content-wrapper">
      <section class="content pt-3">
        <div class="container-fluid">
          <h1 class="text-center mb-4">Configurações</h1>

          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card shadow-sm">
                <div class="card-body">
                  <p><strong>Nome da Empresa:</strong> {{ config?.nome_da_empresa ?? '—' }}</p>
                  <p><strong>Nome do Site:</strong> {{ config?.nome_do_site ?? '—' }}</p>
                  <p><strong>Nome do Aplicativo:</strong> {{ config?.nome_do_aplicativo ?? '—' }}</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
    </div>
  </AuthenticatedLayout>
</template>
