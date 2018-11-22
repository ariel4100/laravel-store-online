<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand  border rounded-circle p-2" href="/">CR-Tienda</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <router-link :to="{ name: 'Inicio' }" class="nav-item nav-link" active-class="active" exact>Inicio</router-link>
                    <router-link :to="{ name: 'Productos' }" class="nav-item nav-link" active-class="active" exact>Productos</router-link>
                    <router-link :to="{ name: 'Carrito' }" class="nav-item nav-link" v-if="hasProduct()" active-class="active" exact>
                        <i class="fas fa-shopping-cart"></i>
                        ({{ getProductsInCart.length }})
                    </router-link>
                    <router-link :to="{ name: 'Contacto' }" class="nav-item nav-link" active-class="active" exact>Contacto</router-link>
                    <router-link :to="{ name: 'Registro' }" class="nav-item nav-link" active-class="active" exact>Creá tu cuenta</router-link>
                    <router-link :to="{ name: 'Login' }" class="nav-item nav-link" active-class="active" exact>Ingresá</router-link>
                </ul>
            </div>
        </div>
    </nav>
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
<style>
    a.router-link-active {
        color: #f66;
    }
    li.router-link-active a {
        color: #f66;
    }

</style>
