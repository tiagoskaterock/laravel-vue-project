<template>
  <footer class="main-footer">
    <strong>&copy; {{configs.empresa}}</strong>
    <div class="float-right d-none d-sm-inline">
      {{ configs.aplicativo }}
    </div>
  </footer>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const configs = ref('');

onMounted(async () => {
  try {
    const response = await fetch('/api/configuracoes'); // Fazendo a requisição para a rota
    if (!response.ok) {
      throw new Error('Erro ao carregar dados');
    }
    const data = await response.json();
    configs.value = data; // Atualiza a variável com os dados recebidos
  } catch (error) {
    console.error('Erro na requisição:', error);
    // Tratar erro caso necessário
  }
});
</script>

<style scoped>
/* Estilos específicos para o footer */
</style>
