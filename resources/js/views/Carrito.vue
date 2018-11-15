<template>
    <section class="container my-5 py-5">
        <div class="jumbotron">
            <h2 class="h1-responsive font-weight-bold wow bounceInRight"><u>¡Carrito de Compras!</u></h2>
            <table class="table wow fadeIn my-3">
                <thead class="table-dark">
                <tr>
                    <th>Foto</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Quitar</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="cart in getProductsInCart">
                    <th scope="row"><img :src="'../uploads/Products/' + cart.img" class="img-fluid" width="50px" height="50px"></th>
                    <td>
                        <p class="h4 font-weight-bold">{{ cart.name}}</p>
                        <p>COLOR: {{ cart.color}}</p>
                        <p>TALLE: {{ cart.size}}</p>
                    </td>
                    <td>${{ cart.price }}</td>
                    <td>{{ cart.quantity }}</td>
                    <td>${{ cart.price * cart.quantity }}</td>
                    <td><a href="" class="btn btn-danger btn-sm">x</a></td>
                </tr>
                </tbody>
            </table>
            <router-link :to="{ name: 'Productos' }" class="btn btn-warning">Seguir Comprando</router-link>
            <router-link :to="{ name: 'ConfirmarPedido' }" class="btn btn-success">Confirmar Pedido</router-link>
        </div>
    </section>
</template>

<script>
    import { mapGetters } from 'vuex';
    export default {
        data(){
            return{
                cartProduct:[],
            }
        },
        mounted() {

        },
        computed: {
            ...mapGetters([
                'getProductsInCart',
            ]),

        },
        methods: {

            hasProduct() {
                return this.getProductsInCart.length > 0;
            },
        },
    }
</script>
