<script setup>
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const passwordInput = ref(null);
const currentPasswordInput = ref(null);

const form = useForm({
  current_password: '',
  password: '',
  password_confirmation: '',
});

const updatePassword = () => {
  form.put(route('password.update'), {
    preserveScroll: true,
    onSuccess: () => form.reset(),
    onError: () => {
      if (form.errors.password) {
        form.reset('password', 'password_confirmation');
        passwordInput.value.focus();
      }
      if (form.errors.current_password) {
        form.reset('current_password');
        currentPasswordInput.value.focus();
      }
    },
  });
};
</script>

<template>
  <section>
    <div class="mb-4">
      <h4 class="font-weight-bold">Atualizar Senha</h4>
      <p class="text-muted">
        Garanta que sua conta esteja usando uma senha segura e aleatória.
      </p>
    </div>

    <form @submit.prevent="updatePassword">
      <div class="form-group">
        <label for="current_password">Senha Atual</label>
        <input
          id="current_password"
          ref="currentPasswordInput"
          v-model="form.current_password"
          type="password"
          class="form-control"
          autocomplete="current-password"
        />
        <small v-if="form.errors.current_password" class="form-text text-danger">
          {{ form.errors.current_password }}
        </small>
      </div>

      <div class="form-group">
        <label for="password">Nova Senha</label>
        <input
          id="password"
          ref="passwordInput"
          v-model="form.password"
          type="password"
          class="form-control"
          autocomplete="new-password"
        />
        <small v-if="form.errors.password" class="form-text text-danger">
          {{ form.errors.password }}
        </small>
      </div>

      <div class="form-group">
        <label for="password_confirmation">Confirmar Senha</label>
        <input
          id="password_confirmation"
          v-model="form.password_confirmation"
          type="password"
          class="form-control"
          autocomplete="new-password"
        />
        <small v-if="form.errors.password_confirmation" class="form-text text-danger">
          {{ form.errors.password_confirmation }}
        </small>
      </div>

      <div class="form-group d-flex align-items-center justify-content-between">
        <button type="submit" class="btn btn-primary" :disabled="form.processing">
          Salvar
        </button>

        <transition
          enter-active-class="fade show"
          leave-active-class="fade"
        >
          <small v-if="form.recentlySuccessful" class="text-success ml-3">
            Salvo com sucesso.
          </small>
        </transition>
      </div>
    </form>
  </section>
</template>
