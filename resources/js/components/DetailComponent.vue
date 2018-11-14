<template>
    <section class="">
        <div class="container my-5 pt-5">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-6">
                        <img src=" " alt="" class="img-fluid">

                        <figure class="col-md-3 d-md-inline-block">
                            <a href=" " data-size="1600x1067">
                                <img :src="'../uploads/Products/' + product.image_pro" class="img-fluid">
                            </a>
                        </figure>

                    </div>
                    <!--/.Carousel Wrapper-->
                    <div class="col-md-6">
                        <h2 class="h1"><b> {{product.name_pro}}</b></h2>
                        <p class="text-danger h4"><b> {{product.price_pro}} $</b></p>
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
                        <router-link :to="{ name: 'Producto' }" class="btn btn-secondary">Atras</router-link>
                        <button type="button" class="btn btn-primary" @click="addProductToCart(addProduct)">Agregar al Carrito</button>
                    </div>

                </div>
            </div>

            <!-- Section: Products v.5 -->
            <section class="text-center my-5">
                <!-- Carousel Wrapper -->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                    <!-- Controls -->
                    <div class="controls-top">
                        <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                            anterior
                        </a>
                        <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                            siguiente
                        </a>
                    </div>
                    <!-- Controls -->
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li class="primary-color active" data-target="#multi-item-example" data-slide-to="0"></li>
                        <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
                        <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
                    </ol>
                    <!-- Indicators -->
                    <!-- Slides -->
                    <div class="carousel-inner" role="listbox">
                        <!-- First slide -->
                        <div class="carousel-item active ">
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="card-img-top" alt="sample photo">
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted">
                                                <h5>Shoes</h5>
                                            </a>
                                            <h4 class="card-title my-4">
                                                <strong>
                                                    <a href="">Leather boots</a>
                                                </strong>
                                            </h4>
                                            <!-- Description -->
                                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                            </p>
                                            <!-- Card footer -->
                                            <div class="card-footer px-1">
                                                <span class="float-left">69$</span>
                                                <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fa fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fa fa-heart ml-3"></i>
                  </a>
                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                </div>
                                <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg" class="card-img-top" alt="sample photo">
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted">
                                                <h5>Jeans</h5>
                                            </a>
                                            <h4 class="card-title my-4">
                                                <strong>
                                                    <a href="">Slim jeans</a>
                                                </strong>
                                            </h4>
                                            <!-- Description -->
                                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                            </p>
                                            <!-- Card footer -->
                                            <div class="card-footer px-1">
                                                <span class="float-left">99$</span>
                                                <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fa fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fa fa-heart ml-3"></i>
                  </a>
                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                </div>
                                <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/img%20(31).jpg" class="card-img-top" alt="sample photo">
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted">
                                                <h5>Shorts</h5>
                                            </a>
                                            <h4 class="card-title my-4">
                                                <strong>
                                                    <a href="">Denim shorts</a>
                                                </strong>
                                            </h4>
                                            <!-- Description -->
                                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                            </p>
                                            <!-- Card footer -->
                                            <div class="card-footer px-1">
                                                <span class="float-left">49$</span>
                                                <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fa fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fa fa-heart ml-3"></i>
                  </a>
                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                </div>
                            </div>
                        </div>
                        <!-- First slide -->
                        <!-- Second slide -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(30).jpg" class="card-img-top" alt="sample photo">
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted">
                                                <h5>Accessories</h5>
                                            </a>
                                            <h4 class="card-title my-4">
                                                <strong>
                                                    <a href="">Summer hat</a>
                                                </strong>
                                            </h4>
                                            <!-- Description -->
                                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                            </p>
                                            <!-- Card footer -->
                                            <div class="card-footer px-1">
                                                <span class="float-left">39$</span>
                                                <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fa fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fa fa-heart ml-3"></i>
                  </a>
                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                </div>
                                <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(37).jpg" class="card-img-top" alt="sample photo">
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted">
                                                <h5>Shoes</h5>
                                            </a>
                                            <h4 class="card-title my-4">
                                                <strong>
                                                    <a href="">Black heels</a>
                                                </strong>
                                            </h4>
                                            <!-- Description -->
                                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                            </p>
                                            <!-- Card footer -->
                                            <div class="card-footer px-1">
                                                <span class="float-left">79$</span>
                                                <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fa fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fa fa-heart ml-3"></i>
                  </a>
                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                </div>
                                <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(31).jpg" class="card-img-top" alt="sample photo">
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted">
                                                <h5>Outerwear</h5>
                                            </a>
                                            <h4 class="card-title my-4">
                                                <strong>
                                                    <a href="">Black jacket</a>
                                                </strong>
                                            </h4>
                                            <!-- Description -->
                                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                            </p>
                                            <!-- Card footer -->
                                            <div class="card-footer px-1">
                                                <span class="float-left">149$</span>
                                                <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fa fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fa fa-heart ml-3"></i>
                  </a>
                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                </div>
                            </div>
                        </div>
                        <!-- Second slide -->
                        <!--Third slide -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" class="card-img-top" alt="sample photo">
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted">
                                                <h5>Accessories</h5>
                                            </a>
                                            <h4 class="card-title my-4">
                                                <strong>
                                                    <a href="">Leather bag</a>
                                                </strong>
                                            </h4>
                                            <!-- Description -->
                                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                            </p>
                                            <!-- Card footer -->
                                            <div class="card-footer px-1">
                                                <span class="float-left">29$</span>
                                                <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fa fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fa fa-heart ml-3"></i>
                  </a>
                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                </div>
                                <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg" class="card-img-top" alt="sample photo">
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted">
                                                <h5>Accessories</h5>
                                            </a>
                                            <h4 class="card-title my-4">
                                                <strong>
                                                    <a href="">Leather belt</a>
                                                </strong>
                                            </h4>
                                            <!-- Description -->
                                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                            </p>
                                            <!-- Card footer -->
                                            <div class="card-footer px-1">
                                                <span class="float-left">89$</span>
                                                <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fa fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fa fa-heart ml-3"></i>
                  </a>
                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                </div>
                                <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(57).jpg" class="card-img-top" alt="sample photo">
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade text-center">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted">
                                                <h5>Shoes</h5>
                                            </a>
                                            <h4 class="card-title my-4">
                                                <strong>
                                                    <a href="">Sneakers</a>
                                                </strong>
                                            </h4>
                                            <!-- Description -->
                                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.
                                            </p>
                                            <!-- Card footer -->
                                            <div class="card-footer px-1">
                                                <span class="float-left">129$</span>
                                                <span class="float-right">
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                    <i class="fa fa-eye ml-3"></i>
                  </a>
                  <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                    <i class="fa fa-heart ml-3"></i>
                  </a>
                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                                </div>
                            </div>
                        </div>
                        <!--Third slide -->
                    </div>
                    <!-- Slides -->
                </div>
                <!-- Carousel Wrapper -->

            </section>
            <!-- Section: Products v.5 -->
        </div>
    </section>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex';
    export default {

        data(){
            return{
                product: this.$route.params.item,
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
            openModal(){
                /*this.addProduct.name = product.name_pro;
                this.addProduct.price = product.price_pro;
                this.addProduct.img = product.image_pro;*/
                /*axios.post('http://127.0.0.1:8000/producto/modal-cart',this.product).then(response => {
                    //this.items = response.data.items;
                    console.log(response.data);
                    this.modalColor = response.data.color;
                    this.modalTalle = response.data.size;
                    this.modalImg = response.data.images;
                }).catch(error => {
                    console.log(error.response)
                });
            },*/
        },
        created(){
                this.getItems()
        }
        },
        methods: {
            getItems(){
                let id = this.$route.params.item;

                return false;
                axios.post('http://127.0.0.1:8000/producto/modal-cart',id).then(response => {
                    //this.items = response.data.items;
                    console.log(response.data);
                    this.modalColor = response.data.color;
                    this.modalTalle = response.data.size;
                    this.modalImg = response.data.images;
                }).catch(error => {
                    console.log(error.response)
                });
            },
        },

    }
</script>
<style>

</style>