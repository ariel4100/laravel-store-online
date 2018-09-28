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
                            <a href="" class="text-muted"><h5>{{ $item->name_pro }}</h5></a>
                            <h4 class="card-title"><strong> {{ $item->category->name_cat }} </strong></h4>
                            <!-- Description -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                            <!-- Card footer -->
                            <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>{{ number_format($item->price_pro,2) }}$</strong>
                                </span>
                                <span class="float-right">
                                  <a  href="{{ route('detail-item',$item->id_product) }}" class="btn btn-info"><i class="fas fa-shopping-cart"></i></a>
                                  <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fa fa-heart grey-text ml-3"></i>
                                  </a>
                                </span>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
            @endforeach
        </div>
        <!-- Grid row -->
    </div>

@endsection
