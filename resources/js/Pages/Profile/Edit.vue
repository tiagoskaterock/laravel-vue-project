<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
  mustVerifyEmail: {
    type: Boolean,
  },
  status: {
    type: String,
  },
});
</script>

<template>
  <Head title="Profile" />

  <AuthenticatedLayout>
    <div class="content-wrapper">
      <!-- Page header -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Perfil</h1>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-8">

              <!-- Update Profile Information -->
              <div class="card mb-4">
                <div class="card-header">
                  <h3 class="card-title mb-0">Informações do Perfil</h3>
                </div>
                <div class="card-body">
                  <UpdateProfileInformationForm
                    :must-verify-email="mustVerifyEmail"
                    :status="status"
                  />
                </div>
              </div>

              <!-- Update Password -->
              <div class="card mb-4">
                <div class="card-header">
                  <h3 class="card-title mb-0">Atualizar Senha</h3>
                </div>
                <div class="card-body">
                  <UpdatePasswordForm />
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </AuthenticatedLayout>
</template>
