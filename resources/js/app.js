require('./bootstrap');
// Import Vue
import Vue from 'vue';
import router from './router'
import ViewUI from 'view-design';
import 'view-design/dist/styles/iview.css';
import common from './common';

Vue.use(ViewUI);

Vue.mixin(common);
// Register Component
Vue.component('mainapp',require('./components/mainapp.vue').default)

// initialize vue
const app = new Vue({
    router,
    el: '#app',
})