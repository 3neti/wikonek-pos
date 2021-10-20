import Vue from 'vue';
import Router  from 'vue-router';
import ExampleComponent  from './components/ExampleComponent.vue';


Vue.use(Router);

const routes = [
    { path: '/dashboard', component: ExampleComponent },
  ]

export default new Router({
    mode: 'history',
    routes
})