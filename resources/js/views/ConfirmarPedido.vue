<template>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 p-5" style="background-color: #f2f2f2">
                <h2 class="h2">Resumen del pedido</h2>
                <div class="row mt-5" v-for="cart in getProductsInCart">
                    <div class="col-md-4">
                        <img :src="'../uploads/Products/' + cart.img" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <p class="h5">{{ cart.name}}</p>
                        <p>Color: {{ cart.color}}</p>
                        <p>Talle: {{ cart.size}}</p>
                        <p>Cantidad: {{ cart.quantity}}</p>
                    </div>
                    <div class="col-md-4">
                        <p>${{ cart.price }}</p>
                    </div>
                </div>
                <hr class="bg-dark">
                <div class="row px-5 mt-3">
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
                </div>
                <div class="row px-5 mt-3">
                    <div class="col-md-6 ">
                        <p class="lead">Precio Final </p>
                    </div>
                    <div class="col-md-6">
                        <p>$</p>
                    </div>
                </div>
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

            hasProduct() {
                return this.getProductsInCart.length > 0;
            },
        },
    }
</script>
<style>

</style>