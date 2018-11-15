<template>
    <section class="">
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view" style="background-image: url('https://www.lepetitbaobab.com/blog/wp-content/uploads/2014/03/Cute-Babies-HD-Wallpaper-193-1024x640.jpg'); background-repeat: no-repeat; background-size: cover;">
                        <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                            <div class="text-center white-text mx-5 wow fadeIn">
                                <h1 class="mb-4">
                                    <strong>Ropa para Bebes a un Menor Precio!!!</strong>
                                </h1>
                                <p>
                                    <strong>Best & free guide of responsive web design</strong>
                                </p>
                                <p class="mb-4 d-none d-md-block">
                                    <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                                        available. Create your own, stunning website.</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                    <div class="view" style="background-image: url('https://www.telemundo.com/sites/nbcutelemundo/files/images/promo/article/2017/10/24/bebe-con-ropa-y-otros-objetos.jpg'); background-repeat: no-repeat; background-size: cover;">

                        <!-- Mask & flexbox options-->
                        <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

                            <!-- Content -->
                            <div class="text-center white-text mx-5 wow fadeIn">
                                <h1 class="mb-4">
                                    <strong>Learn Bootstrap 4 with MDB</strong>
                                </h1>

                                <p>
                                    <strong>Best & free guide of responsive web design</strong>
                                </p>

                                <p class="mb-4 d-none d-md-block">
                                    <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                                        available. Create your own, stunning website.</strong>
                                </p>

                                <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Start free tutorial
                                    <i class="fa fa-graduation-cap ml-2"></i>
                                </a>
                            </div>
                            <!-- Content -->

                        </div>
                        <!-- Mask & flexbox options-->

                    </div>
                </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <div class="view" style="background-image: url('http://4.bp.blogspot.com/-ggXWOfcl2LA/UYkdAlRn5vI/AAAAAAAAJ4k/-JRWGOMa17E/s1600/DIY+ropa+bebe+como+hacer+vestido+nin%CC%83a+patron+07.JPG'); background-repeat: no-repeat; background-size: cover;">

                        <!-- Mask & flexbox options-->
                        <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

                            <!-- Content -->
                            <div class="text-center white-text mx-5 wow fadeIn">
                                <h1 class="mb-4">
                                    <strong>Learn Bootstrap 4 with MDB</strong>
                                </h1>

                                <p>
                                    <strong>Best & free guide of responsive web design</strong>
                                </p>

                                <p class="mb-4 d-none d-md-block">
                                    <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                                        available. Create your own, stunning website.</strong>
                                </p>

                                <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Start free tutorial
                                    <i class="fa fa-graduation-cap ml-2"></i>
                                </a>
                            </div>
                            <!-- Content -->

                        </div>
                        <!-- Mask & flexbox options-->

                    </div>
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
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
                            <input
                                    type="text"
                                    class="form-control"
                                    v-model="filter"
                                    placeholder="Introduce el nombre del producto">
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container my-5">
            <hr class="bg-info">
            <div class="row">
                <div class="col-md-3 mb-lg-0 mt-5 wow fadeInUp"  v-for="item in filteredProduct">
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
                                    <a @click="goToDetails(item)" class="btn btn-warning btn-sm">Ver</a>
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
        <div class="row">
            <div class="col-md-12 text-center mt-3">
                <button v-if="filter === ''" class="btn btn-primary" @click.prevent="showMorePokemon">Cargar más pokemon</button>
            </div>
        </div>
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
    </section>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex';
    export default {

        data(){
            return{
                limit: 8,
                filter: '',
                items: [],

                //modal
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
        created(){
            this.getItems();
        },
        computed: {
            filteredProduct () {
                let filteredProduct = (this.filter === '') ? this.items : this.items.filter(item => {
                    return _.includes(item.name_pro.toLowerCase(), this.filter.toLowerCase())
                })
                return filteredProduct.slice(0, this.limit)
            },
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
                axios.get('http://ecoomerce.test/api/product').then(response => {
                    this.items = response.data.items;
                });
            },
            openModal(item){
                this.addProduct.name = item.name_pro;
                this.addProduct.price = item.price_pro;
                this.addProduct.img = item.image_pro;
                axios.post('http://ecoomerce.test/api/producto/modal-cart',item).then(response => {
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
            goToDetails (item) {
                //router.push({ path: 'DetailProduct' })
                //this.$router.push({path: '/detail/' + item.name_pro})
                this.$router.push({
                    name: 'DetalleProducto',
                    params: {
                        itemName: item.name_pro,
                        item: item
                    }
                })
            },

            showMorePokemon () {
                this.limit += 4
            },
        },
    }
</script>
<style>
    .card:hover {
        background: #e0e0e0 ;
        /*border-top: 1px solid #212121;*/
    }
    .view,body,html{height:100%}.carousel{height:50%}.carousel .carousel-inner,.carousel .carousel-inner .active,.carousel .carousel-inner .carousel-item{height:100%}@media (max-width:776px){.carousel{height:100%}}.page-footer{background-color:#929FBA}
    html,
    body,
    header,
    .carousel {
        height: 60vh;
    }

    @media (max-width: 740px) {
        html,
        body,
        header,
        .carousel {
            height: 100vh;
        }
    }

    @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .carousel {
            height: 100vh;
        }
    }
</style>