@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Section: Features v.1 -->
        <section class="text-center my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold my-5">Why is it so great?</h2>
            <!-- Section description -->
            <p class="lead grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="fa fa-area-chart fa-3x red-text"></i>
                    <h5 class="font-weight-bold my-4">Analytics</h5>
                    <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="fa fa-book fa-3x cyan-text"></i>
                    <h5 class="font-weight-bold my-4">Tutorials</h5>
                    <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="fa fa-comments-o fa-3x orange-text"></i>
                    <h5 class="font-weight-bold my-4">Support</h5>
                    <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.
                    </p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Features v.1 -->
    </div>
@endsection
