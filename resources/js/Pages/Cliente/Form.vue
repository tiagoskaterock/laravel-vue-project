<script setup>
import { defineProps, defineEmits } from 'vue';

const props = defineProps({
  form: Object,
  processing: Boolean
});

const emit = defineEmits(['submit']);

function submit() {
  emit('submit');
}
</script>

<template>
  <form @submit.prevent="submit">
    <div class="form-group mb-3">
      <label for="nome">Nome</label>
      <input v-model="form.nome" type="text" id="nome" class="form-control" />
      <span class="text-danger text-sm" v-if="form.errors?.nome">{{ form.errors.nome }}</span>
    </div>

    <div class="form-group mb-3">
      <label for="email">Email</label>
      <input v-model="form.email" type="email" id="email" class="form-control" />
      <span class="text-danger text-sm" v-if="form.errors?.email">{{ form.errors.email }}</span>
    </div>

    <div class="form-group mb-3">
      <label for="telefone">Telefone</label>
      <input v-model="form.telefone" type="text" id="telefone" class="form-control" />
    </div>

    <div class="form-group mb-3">
      <label for="endereco">Endereço</label>
      <input v-model="form.endereco" type="text" id="endereco" class="form-control" />
    </div>

    <div class="form-group mb-3">
      <label for="cidade">Cidade</label>
      <input v-model="form.cidade" type="text" id="cidade" class="form-control" />
    </div>

    <div class="form-group mb-3">
      <label for="estado">Estado</label>
      <input v-model="form.estado" type="text" id="estado" class="form-control" />
    </div>

    <div class="form-group mb-3">
      <label for="pais">País</label>
      <input v-model="form.pais" type="text" id="pais" class="form-control" />
    </div>

    <button type="submit" class="btn btn-success" :disabled="processing">
      <i class="fas fa-save"></i>
      Salvar
    </button>
  </form>
</template>
