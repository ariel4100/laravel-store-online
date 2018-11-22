import Vue from 'vue';
import VueRouter from 'vue-router';


import Inicio from '../views/Inicio'
import Productos from '../views/Productos'
import Contacto from '../views/Contacto'
import DetalleProducto from '../views/DetalleProducto'
import Carrito from '../views/Carrito'
import ConfirmarPedido from '../views/ConfirmarPedido'
import Registro from '../views/Registro'
import Login from '../views/Login'


import Envio from '../components/EnvioComponent'
import Pago from '../components/PagoComponent'
import MetodoPago from '../components/MetodoPagoComponent'

Vue.use(VueRouter);
export default new VueRouter({
   routes: [
       { path: '/', name: 'Inicio', component: Inicio},
       { path: '/productos', name: 'Productos', component: Productos},
       { path: '/detalle/:itemName', name: 'DetalleProducto', component: DetalleProducto},
       { path: '/carrito', name: 'Carrito', component: Carrito},
       { path: '/contacto', name: 'Contacto', component: Contacto},
       { path: '/registro', name: 'Registro', component: Registro},
       { path: '/ingresar', name: 'Login', component: Login, meta: {guest: true}},
       //ACA CON AUTENTICACION
       { path: '/confirmar/pedido', name: 'ConfirmarPedido', component: ConfirmarPedido, meta: {auth: true},
           children: [
               {path: 'envio', name: 'Envio', component: Envio, meta: {auth: true}},
               {path: 'pago', name: 'Pago', components: {default: Pago,}},
               {path: 'metodopago', name: 'MetodoPago', component: MetodoPago},
           ]},

   ],
    /*beforeEach: ((to, from, next) => {
    //console.log(to.path);
    let token = localStorage.getItem('token');
    if (to.matched.some(record => record.meta.auth)) {
        if(token == null)
        {
            redirect('/ingresar')
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
    }
}),*/
    mode: 'history'
});