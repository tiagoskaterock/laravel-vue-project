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
      <label for="nome">Nome</label>
      <input v-model="form.nome" type="text" id="nome" class="form-control" />
      <span class="text-danger text-sm" v-if="form.errors?.nome">{{ form.errors.nome }}</span>
    </div>

    <div class="form-group col-md-6 col-lg-4">
      <label for="email">Email</label>
      <input v-model="form.email" type="email" id="email" class="form-control" />
      <span class="text-danger text-sm" v-if="form.errors?.email">{{ form.errors.email }}</span>
    </div>

    <div class="form-group col-md-6 col-lg-4">
      <label for="telefone">Telefone</label>
      <input v-model="form.telefone" type="text" id="telefone" class="form-control" />
    </div>

    <div class="form-group col-md-6 col-lg-4">
      <label for="endereco">Endereço</label>
      <input v-model="form.endereco" type="text" id="endereco" class="form-control" />
    </div>

    <div class="form-group col-md-6 col-lg-4">
      <label for="cidade">Cidade</label>
      <input v-model="form.cidade" type="text" id="cidade" class="form-control" />
    </div>

    <div class="form-group col-md-6 col-lg-4">
      <label for="estado">Estado</label>
      <input v-model="form.estado" type="text" id="estado" class="form-control" />
    </div>

    <div class="form-group col-md-6 col-lg-4">
      <label for="pais">País</label>
      <input v-model="form.pais" type="text" id="pais" class="form-control" />
    </div>

    <div class="col-12">

      <Link
        :href="route('admin.clientes')"
        title="Voltar para Listagem"
        class="btn btn-info"
        @click.stop
      >
        <i class="fas fa-list"></i> Voltar para Listagem
      </Link>

      <Link
        :href="route('admin.clientes.show', [form.id, form.slug])"
        title="Cancelar"
        class="btn btn-secondary ml-1"
        @click.stop
      >
        <i class="fas fa-ban"></i> Cancelar
      </Link>

      <button type="submit" class="btn btn-success ml-1" :disabled="processing">
        <i class="fas fa-save"></i>
        Salvar
      </button>

    </div>

  </form>

</template>
