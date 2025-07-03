<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
import Breadcrumb from '@/Components/Breadcrumb.vue';
import BreadcrumbActive from '@/Components/BreadcrumbActive.vue';
import Swal from 'sweetalert2';

const props = defineProps({
  cliente: Object,
});

function confirmDelete() {
  Swal.fire({
    title: 'Excluir cliente?',
    text: `Tem certeza que deseja excluir "${props.cliente.nome}"?`,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Sim, excluir',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      router.delete(route('admin.clientes.destroy', { id: props.cliente.id }), {
        onSuccess: () => {
          Swal.fire({
            icon: 'success',
            title: 'Excluído!',
            text: 'O cliente foi excluído com sucesso.',
            timer: 1500,
            showConfirmButton: false,
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
  <Head :title="cliente.nome" />

  <AuthenticatedLayout>
    <div class="content-wrapper">

      <!-- Cabeçalho -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-4">
              <h1>Visualizando cliente</h1>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb float-sm-right">
                <Breadcrumb route='/admin/dashboard' title="Dashboard" />
                <Breadcrumb route='/admin/clientes' title="Clientes" />
                <BreadcrumbActive :title='cliente.nome' />
              </ol>
            </div>
          </div>
        </div>
      </section>
      <!-- Fim do cabeçalho -->

      <!-- Conteúdo principal -->
      <section class="content">
        <div class="container-fluid">
          <div class="card">

            <!-- Título do Card -->
            <div class="card-header">
              <h3 class="card-title font-weight-bold">{{ cliente.nome }}</h3>
            </div>

            <div class="card-body">
              <!-- Detalhes do Cliente -->
              <div class="pt-3 row">
                <p class="col-md-6"><strong>E-mail:</strong> {{ cliente.email }}</p>
                <p class="col-md-6"><strong>Telefone:</strong> {{ cliente.telefone }}</p>
                <p class="col-md-6"><strong>Endereço:</strong> {{ cliente.endereco }}</p>
                <p class="col-md-6"><strong>Cidade:</strong> {{ cliente.cidade }}</p>
                <p class="col-md-6"><strong>Estado:</strong> {{ cliente.estado }}</p>
                <p class="col-md-6"><strong>País:</strong> {{ cliente.pais }}</p>
              </div>
            </div>
            <!-- Fim do corpo do Card -->

            <div class="card-footer">
              <!-- Botões de ação -->
              <p>
                <Link
                  :href="route('admin.clientes.edit', { id: cliente.id, slug: cliente.slug })"
                  title="Editar"
                  class="btn btn-primary ml-1"
                >
                  <i class="fas fa-edit"></i> Editar
                </Link>

                <button
                  class="btn btn-danger ml-1"
                  @click="confirmDelete"
                  title="Excluir"
                >
                  <i class="fas fa-trash"></i> Excluir
                </button>
              </p>
            </div>
            <!-- Fim do rodapé do Card -->

          </div>
          <!-- Fim do Card -->
        </div>
        <!-- Fim do container fluid -->
      </section>
      <!-- Fim da seção de conteúdo -->

    </div>
    <!-- Fim do content wrapper -->

  </AuthenticatedLayout>
</template>
