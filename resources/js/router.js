import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import firstPage from './components/pages/myFirstVue.vue'
import newRoutePage from './components/pages/newRoutePage'
import hooks from './components/pages/basic/hooks'
import methods from './components/pages/basic/methods'

// Products pages
import home from './components/pages/home'
import tags from './components/pages/tags'

const routes = [
    // Projects route
    {
        path:'/',
        component: home,
    },
    {
        path:'/tags',
        component: tags,
    },

    // Basic tutorial route
    {
        path:'/my-new-vue-route',
        component: firstPage,
        name: 'home',
    },
    
    {
        path:'/new-route',
        component: newRoutePage,
    },

    // Vue Hooks
    {
        path:'/hooks',
        component: hooks ,
    },
    // More basic
    {
        path:'/methods',
        component: methods ,
    },
]

export default new VueRouter({
    mode:'history',
    routes
});