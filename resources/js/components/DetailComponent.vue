<template>
    <section class="">
        <nav class="navbar navbar-expand-lg navbar-dark primary-color">
            <div class="container">
                <a class="navbar-brand" href="#">Productos:</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="basicExampleNav">
                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">todos
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mas Vendidos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mas Gustadoa</a>
                        </li>
                    </ul>
                    <!-- Links -->

                    <form class="form-inline" action=""  method="GET">
                        <div class="form-group">
                            <select class="form-control select2" name="categories">
                                <option value=""></option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container my-5">
            <hr class="bg-info">
            <div class="row">
                <div class="col-md-3 mb-lg-0 mt-5 wow fadeInUp"  v-for="item in items">
                    <div class="card card-cascade wider card-ecommerce">
                        <div class="view view-cascade overlay">
                            <img :src="'../uploads/Products/' + item.image_pro" class="card-img-top" alt="sample photo">
                            <a @click="goToDetails(item)"><div class="mask rgba-white-slight"></div></a>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <h4 class="card-title"><strong>{{ item.name_pro }}</strong></h4>
                            <!-- Description -->
                            <p class="card-text"></p>
                            <!-- Card footer -->
                            <div class="card-footer px-1">
                                <span class="float-left font-weight-bold"><b>${{ item.price_pro }}</b></span>
                                <span class="float-right">
                                    <a :href="'http://ecoomerce.test/producto/' + item.id_product" class="btn btn-warning btn-sm">Ver</a>
                                    <button type="button" class="btn btn-primary btn-sm" @click="openModal(item)" data-toggle="modal" data-target="#modalCart" ><i class="fas fa-shopping-cart"></i></button>
                                    <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fa fa-heart text-danger"></i></a>
                                </span>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal   fade"  id="modalCart" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
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
    </section>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex';
    export default {

        data(){
            return{
                items: [],
                modalColor: [],
                modalTalle: [],
                modalImg: [],
                cartProduct: [],
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
        created(){
            this.getItems();
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
          getItems(){
              axios.get('http://127.0.0.1:8000/product').then(response => {
                  this.items = response.data.items;
              });
          },
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
            hasProduct() {
                return this.getProductsInCart.length > 0;
            },

        },
    }
</script>
<style>

</style>