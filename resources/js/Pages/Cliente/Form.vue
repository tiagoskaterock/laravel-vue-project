<script setup>
import { defineProps, defineEmits } from 'vue';
import { Link } from '@inertiajs/vue3';

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
  <form @submit.prevent="submit" class="row">
    
    <div class="form-group col-md-6 col-lg-4">
      <label for="nome">
        <i class="fas fa-user"></i> Nome
      </label>
      <input v-model="form.nome" type="text" id="nome" class="form-control" />
      <span class="text-danger text-sm" v-if="form.errors?.nome">{{ form.errors.nome }}</span>
    </div>

    <div class="form-group col-md-6 col-lg-4">
      <label for="email">
        <i class="fas fa-envelope"></i> Email
      </label>
      <input v-model="form.email" type="email" id="email" class="form-control" />
      <span class="text-danger text-sm" v-if="form.errors?.email">{{ form.errors.email }}</span>
    </div>

    <div class="form-group col-md-6 col-lg-4">
      <label for="telefone">
        <i class="fas fa-phone"></i> Telefone
      </label>
      <input v-model="form.telefone" type="text" id="telefone" class="form-control" />
    </div>

    <div class="form-group col-md-6 col-lg-4">
      <label for="endereco">
        <i class="fas fa-map-marker-alt"></i> Endereço
      </label>
      <input v-model="form.endereco" type="text" id="endereco" class="form-control" />
    </div>

    <div class="form-group col-md-6 col-lg-4">
      <label for="cidade">
        <i class="fas fa-city"></i> Cidade
      </label>
      <input v-model="form.cidade" type="text" id="cidade" class="form-control" />
    </div>

    <div class="form-group col-md-6 col-lg-4">
      <label for="estado">
        <i class="fas fa-flag-usa"></i> Estado
      </label>
      <input v-model="form.estado" type="text" id="estado" class="form-control" />
    </div>

    <div class="form-group col-md-6 col-lg-4">
      <label for="pais">
        <i class="fas fa-globe"></i> País
      </label>
      <input v-model="form.pais" type="text" id="pais" class="form-control" />
    </div>

    <div class="col-12">

      <button type="submit" class="btn btn-success ml-1" :disabled="processing">
        <i class="fas fa-save"></i>
        Salvar
      </button>

    </div>

  </form>

</template>
