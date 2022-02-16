import VueRouter from "vue-router";
import Nav from "./views/navigation"

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
