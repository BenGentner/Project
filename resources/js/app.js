// import './bootstrap';
// import Nav from "./views/nav";
// import * as Vue from 'vue';
// import * as VueRouter from 'vue-router';
// // import routes from "./routes";
//
//
// const routes =  [
//     {
//         path: '/nav',
//         component: Nav
//     },
// ];
//
// const router = VueRouter.createRouter({
//     history: VueRouter.createWebHashHistory(),
//     routes, // short for `routes: routes`
// })
//
// const app = Vue.createApp({})
// // Make sure to _use_ the router instance to make the
// // whole app router-aware.
// app.use(router)
//
// app.mount('#app')
//

import './bootstrap';
import router from "./routes";
import Vue from "vue";
import Navigation from "./views/navigation"

new Vue({
    el:"#app",

    router: router,

    components: {Navigation}
})
