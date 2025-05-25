import '../css/app.css';
import './bootstrap';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

// Importe os ícones que deseja usar:
import * as solidIcons from '@fortawesome/free-solid-svg-icons';

// Filtrar apenas os ícones (prefixo: 'fa')
const icons = Object.keys(solidIcons)
  .filter(key => key.startsWith('fa'))
  .map(key => solidIcons[key]);

library.add(...icons);

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });
        
        app.use(plugin);
        app.use(ZiggyVue);

        // Registre o componente globalmente:
        app.component('font-awesome-icon', FontAwesomeIcon);

        app.mount(el);

        return app;
    },
    progress: {
        color: '#4B5563',
    },
});
