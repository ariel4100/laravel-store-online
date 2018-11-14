<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand  border rounded-circle p-2" href="/">CR-Tienda</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <router-link :to="{ name: 'Inicio' }" class="nav-link">Inicio</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'Producto' }" class="nav-link">Productos</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'Carro' }" class="nav-link" v-if="hasProduct()">
                            <i class="fas fa-shopping-cart"></i>
                            ({{ getProductsInCart.length }})
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'Contacto' }" class="nav-link">Contacto</router-link>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Iniciar Sesion
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Login</a>
                            <a class="dropdown-item" href="#">Registrate</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
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
