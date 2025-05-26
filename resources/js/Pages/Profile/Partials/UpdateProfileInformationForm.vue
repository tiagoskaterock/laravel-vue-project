<script setup>
import { Link, useForm, usePage } from '@inertiajs/vue3';

defineProps({
  mustVerifyEmail: Boolean,
  status: String,
});

const user = usePage().props.auth.user;

const form = useForm({
  name: user.name,
  email: user.email,
});
</script>

<template>
  <section>
    <div class="mb-4">
      <h4 class="font-weight-bold">Informações do Perfil</h4>
      <p class="text-muted">
        Atualize o nome e o e-mail da sua conta.
      </p>
    </div>

    <form @submit.prevent="form.patch(route('profile.update'))">
      <div class="form-group">
        <label for="name">Nome</label>
        <input
          id="name"
          type="text"
          class="form-control"
          v-model="form.name"
          required
          autofocus
          autocomplete="name"
        />
        <small v-if="form.errors.name" class="form-text text-danger">
          {{ form.errors.name }}
        </small>
      </div>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input
          id="email"
          type="email"
          class="form-control"
          v-model="form.email"
          required
          autocomplete="username"
        />
        <small v-if="form.errors.email" class="form-text text-danger">
          {{ form.errors.email }}
        </small>
      </div>

      <div v-if="mustVerifyEmail && user.email_verified_at === null" class="alert alert-warning">
        <p>
          Seu e-mail ainda não foi verificado.
          <Link
            :href="route('verification.send')"
            method="post"
            as="button"
            class="btn btn-link p-0 align-baseline"
          >
            Clique aqui para reenviar o e-mail de verificação.
          </Link>
        </p>

        <div v-show="status === 'verification-link-sent'" class="text-success mt-2">
          Um novo link de verificação foi enviado para seu e-mail.
        </div>
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
