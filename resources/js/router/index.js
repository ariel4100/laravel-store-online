import Vue from 'vue';
import VueRouter from 'vue-router';


import HomeComponent from '../components/HomeComponent'
import ProductComponent from '../components/ProductComponent'
import ContactComponent from '../components/ContactComponent'
import DetailComponent from '../components/DetailComponent'
import CartComponent from '../components/CartComponent'

Vue.use(VueRouter);
export default new VueRouter({
   routes: [
       { path: '/', name: 'Inicio', component: HomeComponent},
       { path: '/productos', name: 'Producto', component: ProductComponent},
       { path: '/contacto', name: 'Contacto', component: ContactComponent},
       { path: '/detalle/:itemName', name: 'DetalleProducto', component: DetailComponent},
       { path: '/carrito', name: 'Carro', component: CartComponent},
   ],
    mode: 'history'
});