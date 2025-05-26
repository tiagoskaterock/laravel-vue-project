<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
  title: {
    type: String,
    required: true
  }
});
</script>

<template>
  <li class="breadcrumb-item active">{{ title }}</li>
</template>
