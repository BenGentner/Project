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

import './bootstrap.js';
import router from "./routes.js";
import Vue from "vue";
import Navigation from "./views/navigation";
import single_poll from "./views/single_poll";
import poll_answers from './views/poll_answers';
import Polls from "./views/polls";



new Vue({
    el:"#app",

    router: router,

    components: {Navigation, single_poll, Polls, poll_answers}
})
