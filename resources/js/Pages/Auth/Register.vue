<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  name: '',
  email: '',
  password: '',
  password_confirmation: '',
});

const submit = () => {
  form.post(route('register'), {
    onFinish: () => form.reset('password', 'password_confirmation'),
  });
};
</script>

<template>
  <div class="login-page custom-bg">
    <div class="login-box">
      <div class="login-logo">
        <a href="/" title="Início">
          <img src="/img/laravel-vue.png" width="200" />
        </a>
      </div>

      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Register a new account</p>

          <form @submit.prevent="submit">
            <div class="input-group mb-3">
              <input
                v-model="form.name"
                type="text"
                class="form-control"
                placeholder="Name"
                required
                autofocus
                autocomplete="name"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div v-if="form.errors.name" class="text-danger mb-3">{{ form.errors.name }}</div>

            <div class="input-group mb-3">
              <input
                v-model="form.email"
                type="email"
                class="form-control"
                placeholder="Email"
                required
                autocomplete="username"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div v-if="form.errors.email" class="text-danger mb-3">{{ form.errors.email }}</div>

            <div class="input-group mb-3">
              <input
                v-model="form.password"
                type="password"
                class="form-control"
                placeholder="Password"
                required
                autocomplete="new-password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div v-if="form.errors.password" class="text-danger mb-3">{{ form.errors.password }}</div>

            <div class="input-group mb-3">
              <input
                v-model="form.password_confirmation"
                type="password"
                class="form-control"
                placeholder="Confirm Password"
                required
                autocomplete="new-password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div v-if="form.errors.password_confirmation" class="text-danger mb-3">{{ form.errors.password_confirmation }}</div>

            <div class="row">
              <div class="col-12 d-flex justify-content-between align-items-center">
                <a href="/login" class="text-muted">Already registered?</a>
                <button
                  type="submit"
                  class="btn btn-primary"
                  :disabled="form.processing"
                >
                  Register
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
  background-image: url('/img/login-background.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
