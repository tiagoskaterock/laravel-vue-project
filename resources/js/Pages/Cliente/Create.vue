<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head } from '@inertiajs/vue3'
import Breadcrumb from '@/Components/Breadcrumb.vue'
import BreadcrumbActive from '@/Components/BreadcrumbActive.vue'
import Form from './Form.vue';

const form = useForm({
  nome: '',
  email: '',
  telefone: '',
  endereco: '',
  cidade: '',
  estado: '',
  pais: '',
})

function submit() {
  form.post('/admin/clientes/store')
}
</script>

<template>
  <Head title="Adicionar" />

  <AuthenticatedLayout>
    <div class="content-wrapper">
      <!-- Header -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-4">
              <h1>Adicionar Cliente</h1>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb float-sm-right">
                <Breadcrumb route="/admin/dashboard" title="Dashboard" />
                <Breadcrumb route="/admin/clientes" title="Clientes" />
                <BreadcrumbActive title="Adicionar" />
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- Conteúdo principal -->
      <section class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              
              <Form :form="form" :processing="form.processing" @submit="submit" />
              
            </div>
          </div>
        </div>
      </section>
    </div>
  </AuthenticatedLayout>
</template>
