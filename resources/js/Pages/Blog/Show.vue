<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import Breadcrumb from '@/Components/Breadcrumb.vue';
import BreadcrumbActive from '@/Components/BreadcrumbActive.vue';

const props = defineProps({
  post: Object,
});
</script>

<template>
  <Head :title="post.title" />

  <AuthenticatedLayout>
    <div class="content-wrapper">

      <!-- Header -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-4">
              <h1>Visualizando Post</h1>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb float-sm-right">
                <Breadcrumb route='/admin/dashboard' title="Dashboard" />

                <Breadcrumb route='/admin/blog' title="Blog" />

                <BreadcrumbActive :title='post.title' />
              </ol>
            </div>
          </div>
        </div>
      </section>
      <!-- fim content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card">

            <!-- Título -->
            <div class="card-header">
              <h3 class="card-title font-weight-bold">{{ post.title }}</h3>
            </div>

            <div class="card-body">
              
              <!-- Conteúdo -->
              <div class="pt-3">
                <p class="mb-0" style="white-space: pre-line;">
                  {{ post.content }}
                </p>
              </div>

            </div>
            <!-- fim card-body -->

            <div class="card-footer">
              <!-- Autor e data -->
              <p class="text-muted pt-3 text-right">
                Por <strong>{{ post.user?.name || 'Desconhecido' }}</strong> ·
                {{ new Date(post.created_at).toLocaleDateString() }}
              </p>

              <p>
                <Link
                  :href="route('admin.blog.edit', { slug: post.slug })"
                  title="Editar"
                  class="btn btn-primary"
                >
                  <i class="fas fa-edit"></i> Editar
                </Link>
              </p>
            </div>
            <!-- fim-card-footer -->

          </div>
          <!-- fim-card -->

        </div>
        <!-- fim container-fluid -->

      </section>
      <!-- fim content -->

    </div>
    <!-- fim content-wrapper -->

  </AuthenticatedLayout>

</template>
