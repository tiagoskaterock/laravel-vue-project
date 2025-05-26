<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link, router } from '@inertiajs/vue3';

defineProps({
  total_de_posts: Number,
});
</script>

<template>
  <AuthenticatedLayout>
    <Head title="Dashboard" />

    <div class="content-wrapper">
      <section class="content pt-3">
        <div class="container-fluid">
          <h1 class="text-center mb-4">Dashboard</h1>

          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{ total_de_posts }}</h3>
                  <p>Posts</p>
                </div>
                <div class="icon">
                  <i class="far fa-newspaper"></i>
                </div>
                <Link href="/admin/blog" class="small-box-footer" title="Blog">
                  Mais informações <i class="fas fa-arrow-circle-right"></i>
                </Link>
              </div>
            </div>
          </div>

        </div>
      </section>
    </div>
  </AuthenticatedLayout>
</template>
