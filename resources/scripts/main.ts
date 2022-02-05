import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { importPageComponent } from "@/scripts/vite/import-page-component";
import route from "ziggy-js";
declare global {
    interface Window {
        route: typeof route;
    }
}

createInertiaApp({
    resolve: (name) =>
        importPageComponent(name, import.meta.glob("../views/pages/**/*.vue")),
    setup({ el, app, props, plugin }) {
        createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route: window.route } })
            .mount(el);
    },
});
