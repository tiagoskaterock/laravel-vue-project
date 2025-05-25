<script setup>
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import { Head, Link } from '@inertiajs/vue3';

  const props = defineProps({
    posts: Array,
  });
</script>

<template>
  <Head title="Blog" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Blog
      </h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg p-6">
          <div v-if="props.posts.length === 0" class="text-gray-500">
            Nenhum post encontrado.
          </div>
          <table v-else class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th
                  scope="col"
                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                >
                  Título
                </th>
                <th
                  scope="col"
                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                >
                  Autor
                </th>

                <th
                  scope="col"
                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                >
                  Criado em
                </th>

                <th>
                  Ações
                </th>
              </tr>
            </thead>
            
            <tbody class="bg-white divide-y divide-gray-200">
              <tr v-for="post in props.posts" :key="post.id">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                  {{ post.title }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ post.user?.name || 'Desconhecido' }}
                </td>

                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ new Date(post.created_at).toLocaleDateString() }}
                </td>

                <td>
                  <Link
                    :href="route('admin.blog.show', { slug: post.slug })"
                    title="Editar"
                    class="inline-flex items-center px-2 py-2 bg-blue-400 hover:bg-blue-500 text-white text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mr-1"
                  >
                    <font-awesome-icon icon="eye" />
                  </Link>

                  <Link
                    :href="route('admin.blog.edit', { slug: post.slug })"
                    title="Editar"
                    class="inline-flex items-center px-2 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                  >
                    <font-awesome-icon icon="edit" />
                  </Link>
                </td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
