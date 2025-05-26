<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  email: '',
  password: '',
  remember: false,
});

const submit = () => {
  form.post(route('login'), {
    onFinish: () => form.reset('password'),
  });
};
</script>

<template>
  <div class="login-page custom-bg">
    <div class="login-box">
      <div class="login-logo">
        <a href="/" title="Início">
          <img src="/img/laravel-vue.png" width="200">
        </a>
      </div>

      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <form @submit.prevent="submit">
            <div class="input-group mb-3">
              <input
                v-model="form.email"
                type="email"
                class="form-control"
                placeholder="Email"
                required
                autofocus
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input
                v-model="form.password"
                type="password"
                class="form-control"
                placeholder="Password"
                required
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <button
                  type="submit"
                  class="btn btn-primary btn-block"
                  :disabled="form.processing"
                >
                  Sign In
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.custom-bg {
  background-image: url('/img/login-background.jpg'); /* Substitua com o caminho da sua imagem */
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
