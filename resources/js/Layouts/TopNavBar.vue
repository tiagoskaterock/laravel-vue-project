<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import TopNavBarLink from './TopNavBarLink.vue';

const showingNavigationDropdown = ref(false);

</script>

<template>
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			</li>

			<TopNavBarLink link="/admin/dashboard" title="Dashboard" />

			<TopNavBarLink link="/admin/blog" title="Blog" />

			<TopNavBarLink link="/admin/clientes" title="Clientes" />

		</ul>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link" data-toggle="dropdown" href="#">
					<i class="far fa-user"></i> {{ $page.props.auth.user.name }}
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					<Link :href="route('profile.edit')" class="dropdown-item">
					<i class="fas fa-user-cog mr-2"></i> Profile
					</Link>
					<div class="dropdown-divider"></div>
					<Link :href="route('logout')" method="post" as="button" class="dropdown-item">
					<i class="fas fa-sign-out-alt mr-2"></i> Log Out
					</Link>
				</div>
			</li>
		</ul>

	</nav>
</template>