<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
  route: {
    type: [String, Object],
    required: true
  },
  title: {
    type: String,
    required: true
  }
});
</script>

<template>
  <li class="breadcrumb-item" :title="title">
    <Link :href="typeof route === 'string' ? route : route.url">
      {{ title }}
    </Link>
  </li>
</template>
