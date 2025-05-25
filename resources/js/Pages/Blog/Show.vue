<script setup>
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import { Head } from '@inertiajs/vue3';

  const props = defineProps({
    post: Object,
  });
</script>

<template>
  <Head :title="post.title" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Visualizando Post
      </h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg p-8">
          <!-- Título -->
          <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ post.title }}</h1>

          <!-- Autor e data -->
          <div class="flex items-center space-x-4 mb-6 text-gray-500 text-sm">
            <div>Por <span class="font-medium">{{ post.user?.name || 'Desconhecido' }}</span></div>
            <div>·</div>
            <div>{{ new Date(post.created_at).toLocaleDateString() }}</div>
          </div>

          <!-- Conteúdo -->
          <div class="prose max-w-none text-gray-700 whitespace-pre-line">
            {{ post.content }}
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
