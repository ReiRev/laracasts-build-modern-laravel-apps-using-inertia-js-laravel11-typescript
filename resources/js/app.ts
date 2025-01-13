import '../css/app.css'
import { createApp, h, type DefineComponent } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/vue3'
import Layout from './Shared/Layout.vue'

createInertiaApp({
  resolve: (name) => {
    const pages: Record<string, DefineComponent> = import.meta.glob('./Pages/**/*.vue', {
      eager: true,
    })
    const page = pages[`./Pages/${name}.vue`].default
    page.layout ??= Layout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component('Link', Link)
      .mount(el)
  },
  progress: {
    color: 'red',
    showSpinner: true,
  },
})
