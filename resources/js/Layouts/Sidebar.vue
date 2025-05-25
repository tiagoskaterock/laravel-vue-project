<script setup>
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
  <aside class="w-64 bg-white border-r border-gray-200 min-h-screen p-4">

    <!-- Logo da sidebar -->
    <div class="mb-8">
      <Link :href="route('admin.dashboard')">
        <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
      </Link>
    </div>

    <!-- Links da sidebar -->
    <nav>
      <Link
        :href="route('admin.dashboard')"
        class="block py-2 px-4 rounded hover:bg-gray-200"
        :class="{ 'bg-gray-200 font-semibold': route().current('admin.dashboard') }"
      >
        Dashboard
      </Link>

      <Link
        :href="route('admin.blog')"
        class="block py-2 px-4 rounded hover:bg-gray-200"
        :class="{ 'bg-gray-200 font-semibold': route().current('admin.blog') }"
      >
        Blog
      </Link>
      
      <Link
        :href="route('profile.edit')"
        class="block py-2 px-4 rounded hover:bg-gray-200"
        :class="{ 'bg-gray-200 font-semibold': route().current('profile.edit') }"
      >
        Profile
      </Link>

      <Link
        :href="route('logout')"
        method="post"
        as="button"
        class="block py-2 px-4 rounded hover:bg-gray-200 text-left"
      >
        Log Out
      </Link>
    </nav>

  </aside>

</template>
