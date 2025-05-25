<script setup>
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import { Head } from '@inertiajs/vue3';

// RECEBE A PROP
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
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            <div v-if="props.posts.length === 0">
              Nenhum post encontrado.
            </div>
            <ul v-else>
              <li v-for="post in props.posts" :key="post.id" class="mb-4">
                <h3 class="text-lg font-bold">{{ post.title }}</h3>
                <p class="text-sm text-gray-500">Por {{ post.user?.name || 'Desconhecido' }}</p>
                <p class="mt-1">{{ post.content }}</p>
                <hr class="mt-4">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
