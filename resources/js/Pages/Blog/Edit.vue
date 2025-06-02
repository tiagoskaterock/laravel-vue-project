<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head, useForm } from '@inertiajs/vue3'
import Breadcrumb from '@/Components/Breadcrumb.vue'
import BreadcrumbActive from '@/Components/BreadcrumbActive.vue'

const props = defineProps({
  post: Object,
})

// Criando o formulário reativo com os dados iniciais do post
const form = useForm({
  title: props.post.title || '',
  content: props.post.content || '',
})

// Função para enviar o formulário
function submit() {
  form.put(`/admin/blog/${props.post.id}/update`, {
    onSuccess: () => {
      // Opcional: exibir mensagem, redirecionar, etc.
      console.log('Post atualizado com sucesso!')
    },
  })
}
</script>

<template>
  <Head title="Editar Post" />

  <AuthenticatedLayout>
    <div class="content-wrapper">

      <!-- Header -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-4">
              <h1>Editar Post</h1>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb float-sm-right">
                <Breadcrumb route="/admin/dashboard" title="Dashboard" />
                <Breadcrumb route="/admin/blog" title="Blog" />
                <Breadcrumb :route="`/admin/blog/${post.slug}`" :title="post.title" />
                <BreadcrumbActive :route="`/admin/blog/${post.slug}/editar`" title="Editar" />
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card">

            <!-- Cabeçalho do card -->
            <div class="card-header">
              <h3 class="card-title font-weight-bold">Editando: {{ post.title }}</h3>
            </div>

            <!-- Corpo do card com formulário -->
            <form @submit.prevent="submit" class="card-body">
              <div class="form-group">
                <label for="title">Título</label>
                <input
                  v-model="form.title"
                  type="text"
                  id="title"
                  class="form-control"
                  placeholder="Digite o título do post"
                  required
                />
                <div v-if="form.errors.title" class="text-danger mt-1">{{ form.errors.title }}</div>
              </div>

              <div class="form-group mt-3">
                <label for="content">Conteúdo</label>
                <textarea
                  v-model="form.content"
                  id="content"
                  class="form-control"
                  rows="6"
                  placeholder="Digite o conteúdo do post"
                  required
                ></textarea>
                <div v-if="form.errors.content" class="text-danger mt-1">{{ form.errors.content }}</div>
              </div>
            </form>

            <!-- Rodapé do card com botão -->
            <div class="card-footer text-right">
              <button
                @click="submit"
                type="button"
                class="btn btn-primary"
                :disabled="form.processing"
              >
                {{ form.processing ? 'Salvando...' : 'Salvar' }}
              </button>
            </div>

          </div>
        </div>
      </section>

    </div>
  </AuthenticatedLayout>
</template>
