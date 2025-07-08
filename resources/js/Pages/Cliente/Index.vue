<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head, Link, router, usePage } from '@inertiajs/vue3'
import Swal from 'sweetalert2'
import { onMounted, ref, watch } from 'vue'

const { clientes, page_title } = defineProps({
  clientes: Object,
  page_title: String,
})


const search = ref('')
const page = usePage()
let searchTimeout = null

// Preenche o campo de busca com valor da query string, se existir
const query = new URLSearchParams(window.location.search)
search.value = query.get('search') || ''

// Busca automática com debounce
watch(search, (newValue) => {
  clearTimeout(searchTimeout)
  searchTimeout = setTimeout(() => {
    router.get(route('admin.clientes'), { search: newValue }, {
      preserveScroll: true,
      preserveState: true,
      replace: true,
    })
  }, 400)
})

function deleteCliente(cliente) {
  Swal.fire({
    title: 'Excluir cliente?',
    text: `Tem certeza que deseja excluir "${cliente.nome}"?`,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Sim, excluir',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      router.delete(route('admin.clientes.destroy', { id: cliente.id }), {
        preserveScroll: true,
        onSuccess: () => {
          Swal.fire({
            icon: 'success',
            title: 'Excluído!',
            text: 'O cliente foi excluído com sucesso.',
            timer: 1500,
            showConfirmButton: false
          })
          router.visit(route('admin.clientes'), { preserveScroll: true })
        },
        onError: () => {
          Swal.fire('Erro!', 'Não foi possível excluir o cliente.', 'error')
        }
      })
    }
  })
}

// Mensagem de sucesso
onMounted(() => {
  const params = new URLSearchParams(window.location.search)
  const successMessage = params.get('success')

  if (successMessage) {
    Swal.fire({
      icon: 'success',
      title: 'Sucesso!',
      text: successMessage,
      timer: 2000,
      showConfirmButton: false,
    })
  }
})
</script>

<template>
  <AuthenticatedLayout>
    <Head :title="page_title" />

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">{{ page_title }}</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                  <Link :href="route('admin.dashboard')" title="Dashboard">Dashboard</Link>
                </li>
                <li class="breadcrumb-item active">{{ page_title }}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <section class="content pt-3">
        <div class="container-fluid">

          <!-- Ações -->
          <div class="d-flex justify-content-between align-items-center mb-2">
            <Link :href="route('admin.clientes.create')" title="Adicionar Cliente" class="btn btn-primary">
              <i class="fas fa-plus"></i> Adicionar
            </Link>

            <!-- Barra de busca -->
            <div style="max-width: 300px;">
              <input
                v-model="search"
                type="text"
                class="form-control"
                placeholder="Pesquisar..."
                title="Pesquisar"
              />
            </div>
          </div>

          <div class="card">
            <div class="card-body">

              <div v-if="clientes.data.length === 0" class="text-gray-500">
                Nenhum cliente encontrado.
              </div>

              <table v-else class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Criado em</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="cliente in clientes.data" :key="cliente.id">
                    <td>{{ cliente.nome }}</td>
                    <td>{{ cliente.email }}</td>
                    <td>{{ cliente.telefone || '—' }}</td>
                    <td>{{ new Date(cliente.created_at).toLocaleDateString() }}</td>
                    <td>
                      <Link :href="route('admin.clientes.show', { id: cliente.id, slug: cliente.slug })"
                        title="Visualizar" class="btn btn-xs btn-info mr-1">
                        <i class="fas fa-eye"></i>
                      </Link>

                      <Link :href="route('admin.clientes.edit', { id: cliente.id, slug: cliente.slug })"
                        title="Editar" class="btn btn-xs btn-primary mr-1">
                        <i class="fas fa-edit"></i>
                      </Link>

                      <form @submit.prevent="deleteCliente(cliente)" class="d-inline">
                        <button type="submit" class="btn btn-xs btn-danger" title="Excluir">
                          <i class="fas fa-trash"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                </tbody>
              </table>

              <!-- Paginação -->
              <div class="mt-3">
                <ul class="pagination">
                  <li
                    v-for="link in clientes.links"
                    :key="link.label"
                    :class="['page-item', { active: link.active, disabled: !link.url }]"
                  >
                    <button
                      class="page-link"
                      v-html="link.label"
                      :disabled="!link.url"
                      @click="link.url && router.visit(link.url, { preserveScroll: true })"
                    ></button>
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </AuthenticatedLayout>
</template>
