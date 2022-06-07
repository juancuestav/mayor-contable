import "./bootstrap"

import { createApp, h } from "vue"
import { createInertiaApp } from "@inertiajs/inertia-vue3"

// Notificaciones
import Toast from "vue-toastification"
import "vue-toastification/dist/index.css"

createInertiaApp({
    resolve: (name) => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        const vueApp = createApp({ render: () => h(App, props) })
        vueApp.use(plugin)
        vueApp.use(Toast)
        vueApp.mount(el)
    },
})
