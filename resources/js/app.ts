import '../css/app.css'
import { createApp, h, type DefineComponent } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/vue3'

createInertiaApp({
  resolve: (name) => {
    const pages: Record<string, DefineComponent> = import.meta.glob('./Pages/**/*.vue', {
      eager: true,
    })
    return pages[`./Pages/${name}.vue`]
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
