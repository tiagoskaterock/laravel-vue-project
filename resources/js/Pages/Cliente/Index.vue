<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
import { onMounted, nextTick } from 'vue';

// defineProps direto no script setup
const { clientes } = defineProps({
  clientes: Array,
});

onMounted(() => {
  nextTick(() => {
    if (window.$ && window.$.fn.DataTable) {
      const table = window.$('#clientes-table').DataTable({
        language: {
          url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-BR.json'
        }
      });

      // Ao excluir um cliente, atualiza a tabela
      router.afterEach(() => {
        table.destroy();
        table.clear().rows.add(clientes).draw();
      });
    }
  });
});

function deleteCliente(cliente) {
  if (confirm('Tem certeza que deseja excluir este cliente?')) {
    router.delete(route('admin.clientes.destroy', { slug: cliente.slug }));
  }
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
          <div class="card">
            <div class="card-body">
              <div v-if="clientes.length === 0" class="text-gray-500">
                Nenhum cliente encontrado.
              </div>
              <table v-else id="clientes-table" class="table table-bordered table-striped">
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
                  <tr v-for="cliente in clientes" :key="cliente.id">
                    <td>{{ cliente.nome }}</td>
                    <td>{{ cliente.email }}</td>
                    <td>{{ cliente.telefone || '—' }}</td>
                    <td>{{ new Date(cliente.created_at).toLocaleDateString() }}</td>
                    <td>
                      <Link :href="route('admin.clientes.show', { slug: cliente.slug })" title="Visualizar"
                        class="btn btn-xs btn-info mr-1">
                        <i class="fas fa-eye"></i>
                      </Link>
                      <Link :href="route('admin.clientes.edit', { slug: cliente.slug })" title="Editar"
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
                <tfoot>
                  <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Criado em</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </section>
    </div>
  </AuthenticatedLayout>
</template>
