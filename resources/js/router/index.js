import Vue from 'vue';
import VueRouter from 'vue-router';


import Inicio from '../views/Inicio'
import Productos from '../views/Productos'
import Contacto from '../views/Contacto'
import DetalleProducto from '../views/DetalleProducto'
import Carrito from '../views/Carrito'
import ConfirmarPedido from '../views/ConfirmarPedido'

Vue.use(VueRouter);
export default new VueRouter({
   routes: [
       { path: '/', name: 'Inicio', component: Inicio},
       { path: '/productos', name: 'Productos', component: Productos},
       { path: '/contacto', name: 'Contacto', component: Contacto},
       { path: '/detalle/:itemName', name: 'DetalleProducto', component: DetalleProducto},
       { path: '/carrito', name: 'Carrito', component: Carrito},
       { path: '/confirmar/pedido', name: 'ConfirmarPedido', component: ConfirmarPedido},
   ],
    mode: 'history'
});