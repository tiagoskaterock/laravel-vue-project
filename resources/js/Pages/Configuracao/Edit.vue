<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';

// Acessa os dados enviados pelo controller
const config = usePage().props.config

const form = useForm({
  nome_da_empresa: config?.nome_da_empresa || '',
  nome_do_site: config?.nome_do_site || '',
  nome_do_aplicativo: config?.nome_do_aplicativo || '',
})

// Envia os dados para a rota de atualização
const submit = () => {
  form.put(route('admin.configuracoes.update', config.id))
}
</script>

<template>
  <AuthenticatedLayout>
    <Head title="Configurações" />

    <div class="content-wrapper">
      <section class="content pt-3">
        <div class="container-fluid">
          <h1 class="text-center mb-4">Editar Configurações</h1>

          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card shadow-sm">
                <div class="card-body">
                  <form @submit.prevent="submit">
                    <div class="mb-3">
                      <label class="form-label">Nome da Empresa</label>
                      <input
                        v-model="form.nome_da_empresa"
                        type="text"
                        class="form-control"
                      />
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Nome do Site</label>
                      <input
                        v-model="form.nome_do_site"
                        type="text"
                        class="form-control"
                      />
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Nome do Aplicativo</label>
                      <input
                        v-model="form.nome_do_aplicativo"
                        type="text"
                        class="form-control"
                      />
                    </div>

                    <div class="d-flex justify-content-between">
                      <Link
                        :href="route('admin.configuracoes')"
                        class="btn btn-secondary"
                      >
                        <i class="fas fa-arrow-left"></i> Voltar
                      </Link>

                      <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Salvar
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
    </div>
  </AuthenticatedLayout>
</template>
