<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head } from '@inertiajs/vue3'
import Breadcrumb from '@/Components/Breadcrumb.vue'
import BreadcrumbActive from '@/Components/BreadcrumbActive.vue'

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
              <form @submit.prevent="submit">
                <div class="form-group mb-3">
                  <label for="nome">Nome</label>
                  <input v-model="form.nome" type="text" id="nome" class="form-control" />
                  <span class="text-danger text-sm" v-if="form.errors.nome">{{ form.errors.nome }}</span>
                </div>

                <div class="form-group mb-3">
                  <label for="email">Email</label>
                  <input v-model="form.email" type="email" id="email" class="form-control" />
                  <span class="text-danger text-sm" v-if="form.errors.email">{{ form.errors.email }}</span>
                </div>

                <div class="form-group mb-3">
                  <label for="telefone">Telefone</label>
                  <input v-model="form.telefone" type="text" id="telefone" class="form-control" />
                </div>

                <div class="form-group mb-3">
                  <label for="endereco">Endereço</label>
                  <input v-model="form.endereco" type="text" id="endereco" class="form-control" />
                </div>

                <div class="form-group mb-3">
                  <label for="cidade">Cidade</label>
                  <input v-model="form.cidade" type="text" id="cidade" class="form-control" />
                </div>

                <div class="form-group mb-3">
                  <label for="estado">Estado</label>
                  <input v-model="form.estado" type="text" id="estado" class="form-control" />
                </div>

                <div class="form-group mb-3">
                  <label for="pais">País</label>
                  <input v-model="form.pais" type="text" id="pais" class="form-control" />
                </div>

                <button type="submit" class="btn btn-success" :disabled="form.processing">
                  <i class="fas fa-save"></i>
                  Salvar
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
  </AuthenticatedLayout>
</template>
