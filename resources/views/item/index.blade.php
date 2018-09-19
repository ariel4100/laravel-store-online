@extends('layouts.app')

@section('content')
    <div class="container text-center my-5 ">
        <h2 class="h1-responsive font-weight-bold text-center my-5">Nuestros Best Productos!!!</h2>
        <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>
    </div>
    <div class="container">
        <!-- Grid row -->
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label>buscar</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            @foreach($items as $item)
                <div class="col-lg-3 col-md-10 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card card-cascade wider card-ecommerce">
                        <div class="view view-cascade overlay">
                            <img src="{{ asset('uploads/Products/'.$item->image_pro) }}" class="card-img-top" alt="sample photo">
                            <a><div class="mask rgba-white-slight"></div></a>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <a href="" class="text-muted"><h5>{{ $item->name_pro }}</h5></a>
                            <h4 class="card-title"><strong> {{ $item->categoty_id }} </strong></h4>
                            <!-- Description -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                            <!-- Card footer -->
                            <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                  <strong>{{ $item->price_pro }}$</strong>
                                </span>
                                <span class="float-right">
                                  <a  href="{{ route('detail-item',$item->id_product) }}" class="btn btn-warning">comprar</a>
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
