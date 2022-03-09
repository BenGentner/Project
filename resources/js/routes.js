import VueRouter from "vue-router";
import Nav from "./views/navigation.vue"

let routes =  [
    {
        path: '/nav',
        component: Nav
    },
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
})
