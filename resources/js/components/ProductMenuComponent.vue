<template>
     <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/cart" v-if="hasProduct()">
                <i class="fas fa-shopping-cart"></i>
                ({{ getProductsInCart.length }})</a>
     </li>
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

</style>