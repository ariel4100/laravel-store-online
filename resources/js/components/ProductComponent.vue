<template>
    <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
            <!-- Card -->
            <div class="card card-cascade wider card-ecommerce">
                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img (55).jpg" class="card-img-top" alt="sample photo">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <div class="card-body card-body-cascade text-center">
                    <!-- Category & Title -->
                    <a href="" class="text-muted">
                        <h5>Camera</h5>
                    </a>
                    <h4 class="card-title">
                        <strong>
                            <a href="">GoPro</a>
                        </strong>
                    </h4>
                    <!-- Description -->
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                    <!-- Card footer -->
                    <div class="card-footer px-1">
                        <span class="float-left font-weight-bold">
                          <strong>1439$</strong>
                        </span>
                        <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                            <i class="fa fa-eye grey-text ml-3"></i>
                          </a>
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
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
