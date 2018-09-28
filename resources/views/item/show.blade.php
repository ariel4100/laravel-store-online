@extends('layouts.app')

@section('content')
    <div class="container-fluid my-5">
        <!-- Section: Products v.2 -->
        <section class="text-center">
            <!-- Grid row -->
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('uploads/Products/'.$item->image_pro) }}" alt="" class="img-fluid">
                    <!--Carousel Wrapper-->
                    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg" alt="Third slide">
                            </div>
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                        <figure class="row">
                            <a class="col-md-4" data-target="#carousel-thumb" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg">
                            </a>
                            <a class="col-md-4" data-target="#carousel-thumb" data-slide-to="0">
                                <img class="d-block w-100 img-fluid" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg">
                            </a>
                            <a class="col-md-4" data-target="#carousel-thumb" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg">
                            </a>
                        </figure>
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
                <div class="col-md-6">
                    <h2 class="card-title"><strong>{{ $item->name_pro }}</strong></h2>
                    <p class="lead"><b>{{ number_format( $item->price_pro,2) }}$</b></p>
                    <form action="{{ route('cart-add') }}" method="POST">
                        <div class="row">
                            @method('POST')
                            @csrf
                            <div class="col-md-3">
                                <div class="form group">
                                    <label for="talle">Talle</label>
                                    <select name="size[]" class="form-control select2" multiple="multiple">
                                        @foreach($size as $data)
                                            <option value="{{ $data->size->letter == null ? $data->size->number : $data->size->letter }}">{{ $data->size->letter == null ? $data->size->number : $data->size->letter }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form group">
                                    <label for="talle">Colores</label>
                                    <select name="color[]" class="form-control select2" multiple="multiple">
                                        @foreach($color  as $data)
                                            <option value="{{ $data->color->name_color }}">{{ $data->color->name_color }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form group">
                                    <label for="talle">Cantidad</label>
                                    <input type="number" name="quantity" class="form-control">
                                    <input type="text" name="id_product" class="form-control" value="{{ $item->id_product }}" style="display: none;">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success mt-4">Agregar a carrito</button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('item') }}" class="btn btn-dark">Volver atras</a>
                </div>

            </div>
            <!-- Grid row -->

        </section>
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
@endsection
