import('./bootstrap');
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import Layout from './Layout/Layout.vue'

createInertiaApp({
  resolve: name => {
    let page = import(`./Pages/${name}.vue`);
    // page.layout = Layout;
    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
});
// progress not working
InertiaProgress.init({
  includeCSS: true,
  showSpinner : true
});
