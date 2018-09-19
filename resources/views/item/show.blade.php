@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Section: Products v.2 -->
        <section class="text-center">
            <div class="row bg-warning">
                <div class="col-md-12">
                    <h2 class="h1-responsive font-weight-bold text-center my-5">Nuestros Productos </h2>
                    <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>
                </div>
            </div>
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
        <!-- Section: Products v.2 -->
    </div>
@endsection
