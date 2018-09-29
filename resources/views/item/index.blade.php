@extends('layouts.app')

@section('content')
    <div class="container-fluid text-dark">
        <!--<div class="row bg-warning text-center  py-4">
            <p class="h1-responsive font-weight-bold mx-auto">Nuestros Best Productos!!!</p>
            <p class="w-responsive mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>
        </div>--->
        <div class="row bg-dark py-3 mt-5">
            <div class="col-md-12">
                <form action="{{ route('item') }}" method="GET" class="form-inline justify-content-center">
                        <input type="text" class="form-control mr-3">
                        <input type="text" class="form-control mr-3">
                    <select class="browser-default custom-select" name="categories">
                        @foreach($allCat as $item)
                            <option value="{{$item->id_category}}">{{$item->name_cat}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-success">Buscar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @foreach($items as $item)
                <div class="col-md-3 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card card-cascade wider card-ecommerce">
                        <div class="view view-cascade overlay">
                            <img src="{{ asset('uploads/Products/'.$item->image_pro) }}" class="card-img-top" alt="sample photo">
                            <a href="{{ route('detail-item',$item->id_product) }}"><div class="mask rgba-white-slight"></div></a>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <h4 class="card-title"><strong> {{ $item->name_pro }} </strong></h4>
                            <!-- Description -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                            <!-- Card footer -->
                            <div class="card-footer px-1">
                                <span class="float-left font-weight-bold"><b>{{ number_format($item->price_pro,2) }}$</b></span>
                                <span class="float-right">
                                    <a href="#cartmodal" class="btn btn-info btn-sm" data-toggle="modal"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="{{ route('detail-item',$item->id_product) }}" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye text-white"></i></a>
                                    <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fa fa-heart text-danger"></i></a>
                                </span>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Modal: modalQuickView -->
                    <div class="modal fade" id="cartmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-notify modal-danger" role="document">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <p class="heading">Pedido para el Carrito</p>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-5">

                                        </div>
                                        <div class="col-lg-7">
                                            <!-- Add to Cart -->
                                            <div class="card-body">
                                                <h2 class="h2-responsive product-name">
                                                    <b>{{ $item->name_pro }}</b>
                                                </h2>
                                                <h4 class="h4-responsive">
                                                    <span class="green-text"><b>$49</b></span>
                                                    <span class="grey-text"><small><s>$89</s></small></span>
                                                </h4>

                                                <div class="row mt-4">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Color:</label>
                                                            <select class="mdb-select form-control  dropdown-primary">
                                                                <option value="" disabled selected>Colores</option>
                                                                <option value="1">White</option>
                                                                <option value="2">Black</option>
                                                                <option value="3">Pink</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Talle:</label>
                                                            <select class="mdb-select form-control  dropdown-primary">
                                                                <option value="" disabled selected>Talles</option>
                                                                <option value="1">XS</option>
                                                                <option value="2">S</option>
                                                                <option value="3">L</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Cantidad:</label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <button class="btn btn-primary">Agregar al Carrito
                                                        <i class="fa fa-shopping-cart text-white ml-3"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /.Add to Cart -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Grid row -->
    </div>

@endsection
