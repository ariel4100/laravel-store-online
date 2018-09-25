@extends('layouts.app')

@section('content')
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Light mask</h3>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <div class="container-fluid">

        <!-- Section: Features v.3 -->
        <section class="my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Why is it so great?</h2>
            <!-- Section description -->
            <p class="lead grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-5 text-center text-lg-left">
                    <img  class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/screens-section.jpg" alt="Sample image">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-7">

                    <!-- Grid row -->
                    <div class="row mb-3">

                        <!-- Grid column -->
                        <div class="col-1">
                            <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-xl-10 col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Safety</h5>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam, quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row mb-3">

                        <!-- Grid column -->
                        <div class="col-1">
                            <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-xl-10 col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Technology</h5>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam, quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!--Grid row-->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-1">
                            <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-xl-10 col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Finance</h5>
                            <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam, quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!--Grid row-->

                </div>
                <!--Grid column-->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Features v.3 -->
        <!-- Projects section v.3 -->
        <section class="my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Our best projects</h2>
            <!-- Section description -->
            <p class="grey-text text-center w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit est laborum.</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-5 mb-lg-0 mb-5">
                    <!--Image-->
                    <img src="https://mdbootstrap.com/img/Photos/Others/images/83.jpg" alt="Sample project image" class="img-fluid rounded z-depth-1">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-7">

                    <!-- Grid row -->
                    <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fa fa-book fa-2x cyan-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Education</h5>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam, aperiam minima elit assumenda voluptate velit.</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fa fa-code fa-2x red-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Technology</h5>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam, aperiam minima elit assumenda voluptate velit.</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row">
                        <div class="col-md-1 col-2">
                            <i class="fa fa-money fa-2x deep-purple-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Finance</h5>
                            <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam, aperiam minima elit assumenda voluptate velit.</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <hr class="my-5">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-7">

                    <!-- Grid row -->
                    <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fa fa-bar-chart fa-2x indigo-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Marketing</h5>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam, aperiam minima elit assumenda voluptate velit.</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fa fa-music fa-2x pink-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Entertainment</h5>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam, aperiam minima elit assumenda voluptate velit.</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row mb-lg-0 mb-5">
                        <div class="col-md-1 col-2">
                            <i class="fa fa-smile-o fa-2x blue-text"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">Communication</h5>
                            <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam, aperiam minima elit assumenda voluptate velit.</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-5">
                    <!--Image-->
                    <img src="https://mdbootstrap.com/img/Photos/Others/images/82.jpg" alt="Sample project image" class="img-fluid rounded z-depth-1">
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Projects section v.3 -->
    </div>
@endsection
