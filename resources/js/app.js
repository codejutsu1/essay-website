require('./bootstrap');

import { createApp, h, Vue } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { ConfirmationService } from 'primevue/confirmationservice';


// Vue.use(VueConfirmDialog);
// // Vue.component('vue-confirm-dialog', VueConfirmDialog.default);
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin, ConfirmationService }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            // .mixin({ components: {ConfirmationService}})
            .use(ConfirmationService)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
