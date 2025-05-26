<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  link: {
    type: String,
    required: true,
  },
  title: {
    type: String,
    required: true,
  }
});
</script>

<template>
  <li class="nav-item d-none d-sm-inline-block" :title="title">
    <Link :href="link" class="nav-link">
      {{ title }}
    </Link>
  </li>
</template>
