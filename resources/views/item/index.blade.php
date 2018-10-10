@extends('layouts.app')
@section('style')
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
@endsection
@section('content')
    <!--Carousel Wrapper-->
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

                <form class="form-inline" action="{{ route('item') }}"  method="GET">
                    <div class="form-group">
                        <select class="form-control select2" name="categories">
                            @foreach($allCat as $item)
                                <option value="{{$item->id_category}}">{{$item->name_cat}}</option>
                            @endforeach
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
            @foreach($items as $item)
                <div class="col-md-3 mb-lg-0 mt-5 wow fadeInUp">
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

