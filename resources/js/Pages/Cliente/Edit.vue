<script setup>
import { useForm } from '@inertiajs/vue3'
import { Head } from '@inertiajs/vue3'
import { defineProps } from 'vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Breadcrumb from '@/Components/Breadcrumb.vue'
import BreadcrumbActive from '@/Components/BreadcrumbActive.vue'
import Form from './Form.vue'

const props = defineProps({
  cliente: Object
})

const form = useForm({
  nome: props.cliente.nome,
  email: props.cliente.email,
  telefone: props.cliente.telefone,
  endereco: props.cliente.endereco,
  cidade: props.cliente.cidade,
  estado: props.cliente.estado,
  pais: props.cliente.pais,
  id: props.cliente.id,
  slug: props.cliente.slug,
})

function submit() {
  form.put(`/admin/clientes/${props.cliente.id}/update`)
}
</script>

<template>
  <Head title="Editar Cliente" />

  <AuthenticatedLayout>
    <div class="content-wrapper">
      <!-- Header -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-4">
              <h1>Editar Cliente</h1>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb float-sm-right">
                <Breadcrumb route="/admin/dashboard" title="Dashboard" />
                <Breadcrumb route="/admin/clientes" title="Clientes" />
                <Breadcrumb 
                  :route="`/admin/clientes/${form.id}/${form.slug}`" 
                  :title="props.cliente.nome" />
                <BreadcrumbActive title="Editar" />
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
