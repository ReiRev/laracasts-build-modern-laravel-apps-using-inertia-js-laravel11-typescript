import '../css/app.css'
import { createApp, h, type DefineComponent } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/vue3'
import Layout from './Shared/Layout.vue'

createInertiaApp({
  resolve: async (name) => {
    const pages = import.meta.glob('./Pages/**/*.vue')
    const page = (await pages[`./Pages/${name}.vue`]()) as DefineComponent
    page.default.layout ??= Layout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component('Link', Link)
      .component('Head', Head)
      .mount(el)
  },
  progress: {
    color: 'red',
    showSpinner: true,
  },
  title: (title) => {
    return `My App - ${title}`
  },
})
