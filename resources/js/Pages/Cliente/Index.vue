<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, router, usePage } from '@inertiajs/vue3';
import Swal from 'sweetalert2';
import { onMounted } from 'vue';

const { clientes } = defineProps({
  clientes: Object,
});

const page = usePage();

// Exibe SweetAlert se houver uma mensagem de sucesso
onMounted(() => {
  const params = new URLSearchParams(window.location.search);
  const successMessage = params.get('success');

  if (successMessage) {
    Swal.fire({
      icon: 'success',
      title: 'Sucesso!',
      text: successMessage,
      timer: 2000,
      showConfirmButton: false,
    });
  }
});

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
          });
          router.visit(route('admin.clientes'), { preserveScroll: true });
        },
        onError: () => {
          Swal.fire('Erro!', 'Não foi possível excluir o cliente.', 'error');
        }
      });
    }
  });
}
</script>

<template>
  <AuthenticatedLayout>
    <Head title="Clientes" />

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Clientes</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                  <Link :href="route('admin.dashboard')" title="Dashboard">Dashboard</Link>
                </li>
                <li class="breadcrumb-item active">Clientes</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <section class="content pt-3">
        <div class="container-fluid">

          <Link :href="route('admin.clientes.create')" title="Adicionar Cliente"
            class="btn btn-primary mb-2">
            <i class="fas fa-plus"></i>
            Adicionar
          </Link>

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

                      <Link :href="route('admin.clientes.show', { id: cliente.id, slug: cliente.slug })" title="Visualizar"
                        class="btn btn-xs btn-info mr-1">
                        <i class="fas fa-eye"></i>
                      </Link>

                      <Link :href="route('admin.clientes.edit', { id: cliente.id, slug: cliente.slug })" title="Editar"
                        class="btn btn-xs btn-primary mr-1">
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
