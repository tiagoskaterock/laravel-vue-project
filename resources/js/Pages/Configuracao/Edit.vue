<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import Swal from 'sweetalert2';
import Breadcrumb from '@/Components/Breadcrumb.vue';
import BreadcrumbActive from '@/Components/BreadcrumbActive.vue';

const config = ref(null)

const form = useForm({
  empresa: '',
  site: '',
  aplicativo: '',
})

const loadConfig = async () => {
  try {
    const response = await fetch('/api/configuracoes');
    if (!response.ok) throw new Error('Erro ao carregar dados');
    const data = await response.json();
    config.value = data;

    // Preenche o formulário com os dados recebidos
    form.empresa = data.empresa || '';
    form.site = data.site || '';
    form.aplicativo = data.aplicativo || '';
  } catch (error) {
    console.error('Erro na requisição:', error);
  }
}

onMounted(() => {
  loadConfig();
});

const submit = () => {
  if (!config.value?.id) return;

  form.put(route('admin.configuracoes.update'), {
  });
}
</script>

<template>
  <AuthenticatedLayout>

    <div class="content-wrapper">

      <!-- Header -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-4">
              <h1>Editar Configurações</h1>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb float-sm-right">
                <Breadcrumb route="/admin/dashboard/" title="Dashboard" />
                <Breadcrumb 
                  route="/admin/configuracoes" 
                  title="Configurações" />
                <BreadcrumbActive title="Editar" />
              </ol>
            </div>
          </div>
        </div>
      </section>

      <section class="content pt-3">
        <div class="container-fluid">

          <div class="card shadow-sm">
            <div class="card-body">
              <form @submit.prevent="submit" v-if="config" class="row">

                <div class="mb-3 col-md-6">
                  <label class="form-label">
                    <i class="fas fa-building me-1"></i>
                    Nome da Empresa
                  </label>
                  <input
                    v-model="form.empresa"
                    type="text"
                    class="form-control"
                  />
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">
                    <i class="fas fa-globe me-1"></i>
                    Nome do Site
                  </label>
                  <input
                    v-model="form.site"
                    type="text"
                    class="form-control"
                  />
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">
                    <i class="fas fa-mobile-alt me-1"></i>
                    Nome do Aplicativo
                  </label>
                  <input
                    v-model="form.aplicativo"
                    type="text"
                    class="form-control"
                  />
                </div>

                <div class="col-12 d-flex justify-content-between mt-3">
                  <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Salvar
                  </button>
                </div>
              </form>

              <div v-else class="text-center py-5">
                <i class="fas fa-spinner fa-spin me-2"></i>
                Carregando configurações...
              </div>
            </div>
          </div>

        </div>
      </section>
    </div>
  </AuthenticatedLayout>
</template>
