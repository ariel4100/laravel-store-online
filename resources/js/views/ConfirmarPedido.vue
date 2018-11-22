<template>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-6 my-5">
                <router-view class ="us__content"/>
            </div>
            <div class="col-md-6 py-5" style="background-color: #f2f2f2">
                <h2 class="font-weight-bold">Resumen de Compra</h2>
                <hr>
                <div class="row my-3 text-center" v-for="cart in getProductsInCart">
                    <div class="col-md-3">
                        <img :src="'../../uploads/Products/' + cart.img" class="img-fluid rounded-circle mb-3" width="150px" height="50px">
                    </div>
                    <div class="col-md-5 d-flex text-justify flex-column">
                        <h5 class=" ">{{ cart.name}}</h5>
                        <p>
                            Color: {{ cart.color}} <br>
                            Talle: {{ cart.size}} <br>
                            Precio: {{ cart.price}}
                        </p>
                        <p class="">Cantidad: {{ cart.quantity}}</p>
                    </div>
                    <div class="col-md-4">
                        <p>${{ cart.price * cart.quantity }}</p>
                    </div>
                </div>

                <!--<div class="row px-5 mt-3">
                    <div class="col-md-6 ">
                        <p>Precio Total </p>
                    </div>
                    <div class="col-md-6">
                        <p>$</p>
                    </div>
                </div>
                <div class="row px-5 mt-3">
                    <div class="col-md-6 ">
                        <p>Gastos de envío (tarifa plana - fija) </p>
                    </div>
                    <div class="col-md-6">
                        <p>$</p>
                    </div>
                </div>
                <div class="row px-5 mt-3">
                    <div class="col-md-6 ">
                        <p>Descuento</p>
                    </div>
                    <div class="col-md-6">
                        <p>$</p>
                    </div>
                </div>--->
                <div class="row px-5 mt-3">
                    <div class="col-md-9 ">
                        <p class="lead">Precio Final </p>
                    </div>
                    <div class="col-md-3 text-sm-center">
                        <p>$ {{ totalPrice()}}</p>
                    </div>
                </div>
                <router-link :to="{ name: 'Inicio' }" class="btn btn-success btn-block">Confirmar Pedido</router-link>
            </div>
        </div>
    </div>
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
            totalPrice() {
                return this.getProductsInCart.reduce((current, next) =>
                    current + (next.price * next.quantity), 0);
            },
            hasProduct() {
                return this.getProductsInCart.length > 0;
            },
        },
    }
</script>
<style>

</style>