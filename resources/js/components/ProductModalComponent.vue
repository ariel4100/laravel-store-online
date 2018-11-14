<template>
    <section class="container my-5 py-5">
        <div class="jumbotron">
            <h2 class="h1-responsive font-weight-bold wow bounceInRight"><u>¡Carrito de Compras!</u></h2>
            <table class="table wow fadeIn">
                <thead class="table-dark">
                <tr>
                    <th>imagen</th>
                    <th>producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>eliminar fila</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="cart in getProductsInCart">
                    <th scope="row"><img :src="'../uploads/Products/' + cart.img" class="img-fluid" width="50px" height="50px"></th>
                    <td>
                        <p class="h4">{{ cart.name}}</p>
                        <p class="font-weight-bold">{{ cart.color}}</p>
                        <p>T-{{ cart.size}}</p>
                    </td>
                    <td>{{ cart.price }}</td>
                    <td>{{ cart.quantity }}</td>
                    <td>{{ cart.price * cart.quantity }}</td>
                    <td><a href="" class="btn btn-danger">x</a></td>
                </tr>
                </tbody>
            </table>
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
