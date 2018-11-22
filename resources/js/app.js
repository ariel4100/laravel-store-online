import store from './store';
import router from './router';
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('navbar-component', require('./components/NavbarComponent.vue'));
Vue.component('productos', require('./views/Productos.vue'));

router.beforeEach((to, from, next) => {
    //console.log(to.path);
    let token = localStorage.getItem('token');
    if (to.matched.some(record => record.meta.auth)) {
        if(token == null)
        {
            next({
                path: '/ingresar',
                query: { redirect: to.fullPath }
            })
        }else{
            next();
        }
    } else if(to.matched.some(record => record.meta.guest))
    {
        if(token == null)
        {
            next();
        }else{
            next({name: 'Inicio'});
        }
    } else {
        next();
    }
});
const app = new Vue({
    el: '#app',
    router,
    store
});
