<template>
    <section>
        <h2 class="h2">¿Qué envío preferís?</h2>
        <div class="list-group my-4">
            <div class="list-group-item list-group-item-action flex-column   align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-2 h6">Rapido a Domicilio</h6>
                   <span class="justify-content-end text-success font-weight-bold">OK</span>
                </div>
                <p class="mb-2">Llega el martes</p>
                <router-link :to="{ name: 'Envio' }" >Modificar</router-link>
            </div>
        </div>
        <h2 class="h2">¿Como quiere pagar</h2>
        <div class="list-group my-4">
            <router-link :to="{ name: 'Inicio' }" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-2 h6">Tarjeta de credito</h6>
                    <h6 class="mb-2 h6 justify-content-end">Gratis</h6>
                </div>

                <p class="mb-2">En Lomas de Zamora</p>
            </router-link>
            <router-link :to="{ name: 'Inicio' }" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-2 h6">Tarjeta de debito</h6>
                </div>
                <p class="mb-2">Llega el martes</p>
            </router-link>
            <router-link :to="{ name: 'MetodoPago' }" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-2 h6">Efectivo en punto de pagos</h6>
                    <h6 class="mb-2 h6 justify-content-end">Gratis</h6>
                </div>

                <p class="mb-2">En Lomas de Zamora</p>
            </router-link>
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
        computed: {
            ...mapGetters([
                'getProductsInCart',
                'getPopupCart',
            ]),
        },
        methods: {
            hasProduct() {
                return this.getProductsInCart.length > 0;
            },

        },
    }
</script>
