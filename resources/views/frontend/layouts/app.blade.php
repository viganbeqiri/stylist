<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Surose - Jewelry eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="frontend/images/favicon.png">
    <link rel="shortcut icon" href="frontend/images/favicon.ico">

    <!-- CSS FILES HERE -->
    <!-- inject:css -->
    <link rel="stylesheet" href="frontend/css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/vendors/meanmenu.min.css">
    <link rel="stylesheet" href="frontend/css/vendors/slick.css">
    <link rel="stylesheet" href="frontend/css/vendors/slick-theme.css">
    <link rel="stylesheet" href="frontend/css/vendors/ionicons.min.css">
    <link rel="stylesheet" href="frontend/css/vendors/nice-select.css">
    <link rel="stylesheet" href="frontend/css/vendors/jquery.fancybox.min.css">
    <link rel="stylesheet" href="frontend/css/vendors/jquery.nstSlider.min.css">
    <link rel="stylesheet" href="frontend/css/style.css">
    <!-- endinject -->
</head>

<body>

    <!-- Preloader -->
    <div class="tm-preloader">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="tm-preloader-logo">
                        <img src="frontend/images/bespoke.png" alt="logo">
                    </div>
                    <span class="tm-preloader-progress"></span>
                </div>
            </div>
        </div>
        <button class="tm-button tm-button-small">Cancel Preloader</button>
    </div>
    <!--// Preloader -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        @include('frontend.layouts.header')
        <!--// Header -->



        <!-- Page Content -->
        @yield('frontend-content')
        <!--// Page Content -->

        <!-- Footer -->
        @include('frontend.layouts.footer')
        <!--// Footer -->

        <!-- Product Quickview -->
        <div class="tm-product-quickview" id="tm-product-quickview">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-12">
                        <div class="tm-product-quickview-inner">

                            <!-- Product Details -->
                            <div class="tm-prodetails">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-10 col-12">
                                        <div class="tm-prodetails-images">
                                            <div class="tm-prodetails-largeimages">
                                                <div class="tm-prodetails-largeimage">
                                                    <img src="frontend/images/products/product-image-1.jpg" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-largeimage">
                                                    <img src="frontend/images/products/product-image-2.jpg" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-largeimage">
                                                    <img src="frontend/images/products/product-image-3.jpg" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-largeimage">
                                                    <img src="frontend/images/products/product-image-4.jpg" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-largeimage">
                                                    <img src="frontend/images/products/product-image-6.jpg" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-largeimage">
                                                    <img src="frontend/images/products/product-image-6.jpg" alt="product image">
                                                </div>
                                            </div>
                                            <div class="tm-prodetails-thumbnails">
                                                <div class="tm-prodetails-thumbnail">
                                                    <img src="frontend/images/products/product-image-1-thumb.jpg" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-thumbnail">
                                                    <img src="frontend/images/products/product-image-2-thumb.jpg" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-thumbnail">
                                                    <img src="frontend/images/products/product-image-3-thumb.jpg" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-thumbnail">
                                                    <img src="frontend/images/products/product-image-4-thumb.jpg" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-thumbnail">
                                                    <img src="frontend/images/products/product-image-5-thumb.jpg" alt="product image">
                                                </div>
                                                <div class="tm-prodetails-thumbnail">
                                                    <img src="frontend/images/products/product-image-6-thumb.jpg" alt="product image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="tm-prodetails-content">
                                            <h4 class="tm-prodetails-title">Stylist daimond ring</h4>
                                            <span class="tm-prodetails-price"><del>$75.99</del> $59.99</span>
                                            <div class="tm-ratingbox">
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span><i class="ion-android-star-outline"></i></span>
                                            </div>
                                            <div class="tm-prodetails-infos">
                                                <div class="tm-prodetails-singleinfo">
                                                    <b>Product ID : </b>010
                                                </div>
                                                <div class="tm-prodetails-singleinfo">
                                                    <b>Category : </b><a href="#">Ring</a>
                                                </div>
                                                <div class="tm-prodetails-singleinfo tm-prodetails-tags">
                                                    <b>Tags : </b>
                                                    <ul>
                                                        <li><a href="#">bracelets</a></li>
                                                        <li><a href="#">diamond</a></li>
                                                        <li><a href="#">ring</a></li>
                                                        <li><a href="#">necklaces</a></li>
                                                    </ul>
                                                </div>
                                                <div class="tm-prodetails-singleinfo">
                                                    <b>Available : </b>
                                                    <span class="color-theme">In Stock</span>
                                                </div>
                                                <div class="tm-prodetails-singleinfo tm-prodetails-share">
                                                    <b>Share : </b>
                                                    <ul>
                                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-social-skype-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-social-pinterest-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis quemi
                                                dolor, malesuada id metus a, mattis eleifend elit. Nullam pharetra
                                                consequat ex in dapibus. Vestibulum ante ipsum primis in faucibus
                                                orciluctus curae.</p>
                                            <div class="tm-prodetails-quantitycart">
                                                <h6>Quantity :</h6>
                                                <div class="tm-quantitybox">
                                                    <input type="text" value="1">
                                                </div>
                                                <a href="#" class="tm-button tm-button-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Product Details -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Product Quickview -->

        <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>

    </div>
    <!--// Wrapper -->

    <!-- JS FILES HERE -->
    <!-- inject:js -->
    <script src="frontend/js/vendors/modernizr-3.7.1.min.js"></script>
    <script src="frontend/js/vendors/jquery-3.3.1.min.js"></script>
    <script src="frontend/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="frontend/js/vendors/jquery.meanmenu.min.js"></script>
    <script src="frontend/js/vendors/slick.min.js"></script>
    <script src="frontend/js/vendors/jquery.nice-select.js"></script>
    <script src="frontend/js/vendors/jquery.countdown.min.js"></script>
    <script src="frontend/js/vendors/jquery.ajaxchimp.min.js"></script>
    <script src="frontend/js/vendors/jquery.fancybox.min.js"></script>
    <script src="frontend/js/vendors/imagesloaded.pkgd.min.js"></script>
    <script src="frontend/js/vendors/isotope.pkgd.min.js"></script>
    <script src="frontend/js/vendors/instafeed.min.js"></script>
    <script src="frontend/js/vendors/jquery.nstslider.min.js"></script>
    <script src="frontend/js/vendors/ScrollMagic.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEDd_Sv9-p-I6bebrAMpmZBQvalqBE5Ds"></script>
    <script src="frontend/js/mapjs/google-map.js"></script>
    <script src="frontend/js/main.js"></script>
    <!-- endinject -->
    @yield('frontend_js')
</body>

</html>
