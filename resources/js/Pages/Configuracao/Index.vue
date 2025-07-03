<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
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

          <div class="card shadow-sm">
            <div class="card-body row">
              <p class="col-md-6"><strong>Empresa:</strong> {{ config?.empresa ?? '—' }}</p>
              <p class="col-md-6"><strong>Site (Título):</strong> {{ config?.site ?? '—' }}</p>
              <p class="col-md-6"><strong>Aplicativo:</strong> {{ config?.aplicativo ?? '—' }}</p>
              <p class="col-md-6"><strong>Palavras-chave:</strong> {{ config?.keywords ?? '—' }}</p>
              <p class="col-md-6"><strong>Descrição:</strong> {{ config?.description ?? '—' }}</p>
              <p class="col-md-6"><strong>Autor:</strong> {{ config?.author ?? '—' }}</p>

              <Link
                :href="route('admin.configuracoes.edit')"
                title="Editar Configurações"
                class="btn btn-primary"
              >
                <i class="fas fa-edit"></i> Editar
              </Link>
            </div>
          </div>

        </div>
      </section>
    </div>
  </AuthenticatedLayout>
</template>
