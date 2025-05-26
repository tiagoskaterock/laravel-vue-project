<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { onMounted, nextTick } from 'vue';

const props = defineProps({
  posts: Array,
});

onMounted(() => {
  nextTick(() => {
    if (window.$ && window.$.fn.DataTable) {
      window.$('#posts-table').DataTable({
        language: {
          url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-BR.json'
        }
      });
    }
  });
});

</script>

<template>
  <AuthenticatedLayout>
    <Head title="Blog" />

    <div class="content-wrapper">

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Blog</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><Link :href="route('admin.dashboard')" title="Dashboard">Dashboard</Link></li>
                <li class="breadcrumb-item active">Blog</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <section class="content pt-3">
        <div class="container-fluid">
          <div class="card">

            <div class="card-body">
              <div v-if="props.posts.length === 0" class="text-gray-500">
                Nenhum post encontrado.
              </div>
              <table v-else id="posts-table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Criado em</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="post in props.posts" :key="post.id">
                    <td>{{ post.title }}</td>
                    <td>{{ post.user?.name || 'Desconhecido' }}</td>
                    <td>{{ new Date(post.created_at).toLocaleDateString() }}</td>
                    <td>
                      <Link
                        :href="route('admin.blog.show', { slug: post.slug })"
                        title="Visualizar"
                        class="btn btn-xs btn-info mr-1"
                      >
                        <i class="fas fa-eye"></i>
                      </Link>
                      <Link
                        :href="route('admin.blog.edit', { slug: post.slug })"
                        title="Editar"
                        class="btn btn-xs btn-primary"
                      >
                        <i class="fas fa-edit"></i>
                      </Link>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Título</th>
                    <th>Autor</th>
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
