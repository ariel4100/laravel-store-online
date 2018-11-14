<template>
    <div class="modal fade"  id="modalCart" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title">Carrito Pedido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img :src="'../uploads/Products/' + addProduct.img" class="img-fluid">
                            <img v-for="img in modalImg" :src="'../'+ img.pics" class="img-fluid" width="50px" height="50px">
                        </div>
                        <div class="col-md-6">
                            <h2>{{addProduct.name}}</h2>
                            <h5 class="text-info">{{addProduct.price}}</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Talle</label>
                                    <select v-model="addProduct.size" id="" class="form-control">
                                        <option v-for="talle in modalTalle">
                                            {{ talle }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Color</label>
                                    <select v-model="addProduct.color" id="" class="form-control">
                                        <option v-for="color in modalColor">
                                            {{ color }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form group col-md-4">
                                    <label>Cantidad</label>
                                    <input type="number" v-model="addProduct.quantity" value="1" min="1" max="100" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" @click="addProductToCart(addProduct)">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex';
    export default {
        data(){
            return{
                cartProduct:[],
                modalColor: [],
                modalTalle: [],
                modalImg: [],
                addProduct:{
                    size: '',
                    color: '',
                    name: '',
                    price: '',
                    img: '',
                    quantity: '',
                }
            }
        },
        computed: {
            ...mapGetters([
                'getProductsInCart',
                'getPopupCart',
            ]),
        },
        methods: {
            ...mapActions([
                'addProducts',
                'currentProduct',
            ]),
            openModal(item){
                this.addProduct.name = item.name_pro;
                this.addProduct.price = item.price_pro;
                this.addProduct.img = item.image_pro;
                axios.post('http://127.0.0.1:8000/producto/modal-cart',item).then(response => {
                    //this.items = response.data.items;
                    console.log(response.data);
                    this.modalColor = response.data.color;
                    this.modalTalle = response.data.size;
                    this.modalImg = response.data.images;
                }).catch(error => {
                    console.log(error.response)
                });
            },
            addProductToCart(item) {
                console.log(item);
                this.addProducts(item);
            },
        },
    }
</script>
