<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  total: {
    type: [Number, String],
    required: true,
  },
  title: {
    type: String,
    required: true,
  },
  icon: {
    type: String,
    required: true,
  },
  link: {
    type: String,
    required: true,
  },
});
</script>

<template>
  <div class="col-lg-3 col-md-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ total }}</h3>
        <p>{{ title }}</p>
      </div>
      <div class="icon">
        <i :class="icon"></i>
      </div>
      <Link :href="link" class="small-box-footer" :title="title">
        Mais informações <i class="fas fa-arrow-circle-right"></i>
      </Link>
    </div>
  </div>
</template>
