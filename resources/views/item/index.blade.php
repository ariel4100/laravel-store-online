@extends('layouts.app')
@section('style')
    <style>
        .card:hover {
            background: #e0e0e0 ;
            /*border-top: 1px solid #212121;*/
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid text-dark">
        <!--<div class="row bg-warning text-center  py-4">
            <p class="h1-responsive font-weight-bold mx-auto">Nuestros Best Productos!!!</p>
            <p class="w-responsive mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>
        </div>--->
        <div class="row  mdb-color lighten-2 py-3 mt-5">
            <div class="col-md-12 mt-3">
                <form action="{{ route('item') }}" method="GET" class="form-row justify-content-center text-white">
                    <div class="form-group col-md-2">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control mr-3">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Descripcion</label>
                        <input type="text" class="form-control mr-3">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Categoria</label>
                        <select class="browser-default custom-select" name="categories">
                            @foreach($allCat as $item)
                                <option value="{{$item->id_category}}">{{$item->name_cat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-2 mt-3">
                        <button type="submit" class="btn btn-success">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <hr class="bg-info">
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
                                    <a href="{{ route('detail-item',$item->id_product) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fas fa-shopping-cart"></i></a>
                                    <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fa fa-heart text-danger"></i></a>
                                </span>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Grid row -->
    </div>
@endsection

