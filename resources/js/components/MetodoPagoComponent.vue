<template>
    <section>
        <h2 class="h2">¿Como quiere pagar?</h2>
        <div class="list-group my-4">
            <div class="list-group-item list-group-item-action flex-column   align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-2 h6">Efecto puntos de pagos</h6>
                   <span class="justify-content-end text-success font-weight-bold"><i class="fas fa-check fa-2x"></i></span>
                </div>
                <p class="mb-2">Llega el martes</p>
                <router-link :to="{ name: 'Pago' }" >Modificar</router-link>
            </div>
        </div>
        <h2 class="h2">¿Donde queres pagar?</h2>
        <div class="list-group my-4">
            <router-link :to="{ name: 'Inicio' }" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-2 h6">Rapipago</h6>
                    <h6 class="mb-2 h6 justify-content-end">Gratis</h6>
                </div>

                <p class="mb-2">En Lomas de Zamora</p>
            </router-link>
            <router-link :to="{ name: 'Inicio' }" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-2 h6">Pago Facil</h6>
                </div>
                <p class="mb-2">Llega el martes</p>
            </router-link>
            <router-link :to="{ name: 'Inicio' }" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-2 h6">Efectivo en el momento</h6>
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
