<script setup>
import { Link, router } from '@inertiajs/vue3';

const logout = () => {
  router.post('/logout');
};
</script>

<template>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <Link href="/" class="brand-link">
      <span class="brand-text font-weight-light">Laravel + Vue App</span>
    </Link>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Dashboard -->
          <li class="nav-item">
            <Link
              title="Dashboard"
              href="/admin/dashboard"
              class="nav-link"
              :class="{ active: route().current('admin.dashboard') }"
            >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </Link>
          </li>

          <!-- Blog -->
          <li class="nav-item">
            <Link
              title="Blog"
              href="/admin/blog"
              class="nav-link"
              :class="{ active: route().current('admin.blog') }"
            >
              <i class="nav-icon fas fa-blog"></i>
              <p>Blog</p>
            </Link>
          </li>

          <!-- Clientes -->
          <li class="nav-item">
            <Link
              title="Clientes"
              href="/admin/clientes"
              class="nav-link"
              :class="{ active: route().current('admin.clientes*') }"
            >
              <i class="nav-icon fas fa-user-tie"></i>
              <p>Clientes</p>
            </Link>
          </li>

          <!-- Perfil -->
          <li class="nav-item">
            <Link
              title="Perfil"
              href="/admin/perfil"
              class="nav-link"
              :class="{ active: route().current('admin.perfil') }"
            >
              <i class="nav-icon fas fa-user"></i>
              <p>Perfil</p>
            </Link>
          </li>

          <!-- Configurações -->
          <li class="nav-item">
            <Link
              title="Perfil"
              href="/admin/configuracoes"
              class="nav-link"
              :class="{ active: route().current('admin.configuracoes*') }"
            >
              <i class="nav-icon fas fa-cogs"></i>
              <p>Configurações</p>
            </Link>
          </li>

        </ul>
      </nav>
      </div>
    </aside>
</template>
