@extends('frontend.layouts.app')
@section('frontend-content')

<!-- Heroslider Area -->
@include('frontend.layouts.slider')
<!--// Heroslider Area -->

<main class="page-content">

    <!-- Features Area -->
    <div class="tm-section tm-feature-area bg-grey">
        <div class="container">
            <div class="row mt-30-reverse">

                <!-- Single Feature -->
                <div class="col-lg-4 mt-30">
                    <div class="tm-feature">
                        <span class="tm-feature-icon">
                            <img src="frontend/images/icons/icon-free-shipping.png" alt="free shipping">
                        </span>
                        <div class="tm-feature-content">
                            <h6>Free Shipping</h6>
                            <p>We provide free shipping for all order over $200.00</p>
                        </div>
                    </div>
                </div>
                <!--// Single Feature -->

                <!-- Single Feature -->
                <div class="col-lg-4 mt-30">
                    <div class="tm-feature">
                        <span class="tm-feature-icon">
                            <img src="frontend/images/icons/icon-fast-delivery.png" alt="fast delivery">
                        </span>
                        <div class="tm-feature-content">
                            <h6>Fast Delivery</h6>
                            <p>We always deliver our customers very quickly.</p>
                        </div>
                    </div>
                </div>
                <!--// Single Feature -->

                <!-- Single Feature -->
                <div class="col-lg-4 mt-30">
                    <div class="tm-feature">
                        <span class="tm-feature-icon">
                            <img src="frontend/images/icons/icon-247-support.png" alt="24/7 Support">
                        </span>
                        <div class="tm-feature-content">
                            <h6>24/7 Support</h6>
                            <p>We provide support to our customers within 24 hours. </p>
                        </div>
                    </div>
                </div>
                <!--// Single Feature -->

            </div>
        </div>
    </div>
    <!--// Features Area -->

    <!-- Popular Products Area -->
    @include('frontend.popular_products')
    <!--// Popular Products Area -->

    <!-- Banners Area -->
    <div class="tm-section tm-banners-area">
        <div class="container">
            <div class="row mt-30-reverse">

                <!-- Single Banner -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                    <a href="#" class="tm-banner tm-scrollanim">
                        <img src="frontend/images/banner-image-1.jpg" alt="banner image">
                    </a>
                </div>
                <!--// Single Banner -->

                <!-- Single Banner -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                    <a href="#" class="tm-banner tm-scrollanim">
                        <img src="frontend/images/banner-image-2.jpg" alt="banner image">
                    </a>
                </div>
                <!--// Single Banner -->

                <!-- Single Banner -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                    <a href="#" class="tm-banner tm-scrollanim">
                        <img src="frontend/images/banner-image-3.jpg" alt="banner image">
                    </a>
                </div>
                <!--// Single Banner -->

            </div>
        </div>
    </div>
    <!--// Banners Area -->

    <!-- Popular Products Area -->
    @include('frontend.new_products')
    <!--// Popular Products Area -->

    <!-- Offer Area -->
    <div class="tm-section tm-offer-area tm-padding-section bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 order-2 order-lg-1">
                    <div class="tm-offer-content">
                        <h6>Super deal of the Month</h6>
                        <h1>Brand ear ring on <span>$250</span> only</h1>
                        <div class="tm-countdown" data-countdown="2020/10/12"></div>
                        <a href="product-details.html" class="tm-button">Shop now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-1 order-lg-2">
                    <div class="tm-offer-image">
                        <img class="tm-offer" src="frontend/images/offer-image-1.png" alt="offer image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Offer Area -->

    <!-- Latest Blogs Area -->
    <div id="tm-news-area" class="tm-section tm-blog-area tm-padding-section bg-pattern-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="tm-sectiontitle text-center">
                        <h3>LATEST BLOGS</h3>
                        <p>A blog is a discussion or informational website published on the World Wide Web
                            consisting of discrete</p>
                    </div>
                </div>
            </div>
            <div class="row tm-blog-slider">

                <!-- Blog Single Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="tm-blog tm-scrollanim">
                        <div class="tm-blog-topside">
                            <div class="tm-blog-thumb">
                                <img src="frontend/images/blog/blog-image-1.jpg" alt="blog image">
                            </div>
                            <span class="tm-blog-metahighlight"><span>Apr</span>17</span>
                        </div>
                        <div class="tm-blog-content">
                            <h6 class="tm-blog-title"><a href="blog-details.html">Woman wearing gold-colore ring
                                    pendant necklaces</a></h6>
                            <ul class="tm-blog-meta">
                                <li><a href="blog.html"><i class="ion-android-person"></i> Anderson</a></li>
                                <li><a href="blog-details.html"><i class="ion-chatbubbles"></i> 3 Comments</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incdidunt ut labore et dolore magna aliqua [....]</p>
                            <a href="blog-details.html" class="tm-readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Blog Single Item -->

                <!-- Blog Single Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="tm-blog tm-scrollanim">
                        <div class="tm-blog-topside">
                            <div class="tm-blog-thumb">
                                <img src="frontend/images/blog/blog-image-2.jpg" alt="blog image">
                            </div>
                            <span class="tm-blog-metahighlight"><span>Apr</span>17</span>
                        </div>
                        <div class="tm-blog-content">
                            <h6 class="tm-blog-title"><a href="blog-details.html">Shallow focus photo of person
                                    putting gold-colored ring</a></h6>
                            <ul class="tm-blog-meta">
                                <li><a href="blog.html"><i class="ion-android-person"></i> Anderson</a></li>
                                <li><a href="blog-details.html"><i class="ion-chatbubbles"></i> 3 Comments</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incdidunt ut labore et dolore magna aliqua [....]</p>
                            <a href="blog-details.html" class="tm-readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Blog Single Item -->

                <!-- Blog Single Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="tm-blog tm-scrollanim">
                        <div class="tm-blog-topside">
                            <div class="tm-blog-thumb">
                                <img src="frontend/images/blog/blog-image-3.jpg" alt="blog image">
                            </div>
                            <span class="tm-blog-metahighlight"><span>Apr</span>17</span>
                        </div>
                        <div class="tm-blog-content">
                            <h6 class="tm-blog-title"><a href="blog-details.html">Silver-colored tiara rings
                                    with clear
                                    gemstones</a></h6>
                            <ul class="tm-blog-meta">
                                <li><a href="blog.html"><i class="ion-android-person"></i> Anderson</a></li>
                                <li><a href="blog-details.html"><i class="ion-chatbubbles"></i> 3 Comments</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incdidunt ut labore et dolore magna aliqua [....]</p>
                            <a href="blog-details.html" class="tm-readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Blog Single Item -->

                <!-- Blog Single Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="tm-blog tm-scrollanim">
                        <div class="tm-blog-topside">
                            <div class="tm-blog-thumb">
                                <img src="frontend/images/blog/blog-image-4.jpg" alt="blog image">
                            </div>
                            <span class="tm-blog-metahighlight"><span>Apr</span>17</span>
                        </div>
                        <div class="tm-blog-content">
                            <h6 class="tm-blog-title"><a href="blog-details.html">Diamond ring is worn on top of
                                    the
                                    engagement band</a></h6>
                            <ul class="tm-blog-meta">
                                <li><a href="blog.html"><i class="ion-android-person"></i> Anderson</a></li>
                                <li><a href="blog-details.html"><i class="ion-chatbubbles"></i> 3 Comments</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incdidunt ut labore et dolore magna aliqua [....]</p>
                            <a href="blog-details.html" class="tm-readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Blog Single Item -->

                <!-- Blog Single Item -->
                <div class="col-lg-4 col-md-6">
                    <div class="tm-blog tm-scrollanim">
                        <div class="tm-blog-topside">
                            <div class="tm-blog-thumb">
                                <img src="frontend/images/blog/blog-image-5.jpg" alt="blog image">
                            </div>
                            <span class="tm-blog-metahighlight"><span>Apr</span>17</span>
                        </div>
                        <div class="tm-blog-content">
                            <h6 class="tm-blog-title"><a href="blog-details.html">White gold engagement rings
                                    for
                                    couples</a></h6>
                            <ul class="tm-blog-meta">
                                <li><a href="blog.html"><i class="ion-android-person"></i> Anderson</a></li>
                                <li><a href="blog-details.html"><i class="ion-chatbubbles"></i> 3 Comments</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incdidunt ut labore et dolore magna aliqua [....]</p>
                            <a href="blog-details.html" class="tm-readmore">Read more</a>
                        </div>
                    </div>
                </div>
                <!--// Blog Single Item -->

            </div>
        </div>
    </div>
    <!--// Latest Blogs Area -->

    <!-- Brand Logos -->
    <div class="tm-section tm-brandlogo-area tm-padding-section bg-grey">
        <div class="container">
            <div class="row tm-brandlogo-slider">

                <!-- Brang Logo Single -->
                <div class="col-12 tm-brandlogo">
                    <a href="#">
                        <img src="frontend/images/brandlogo-1.png" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="col-12 tm-brandlogo">
                    <a href="#">
                        <img src="frontend/images/brandlogo-2.png" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="col-12 tm-brandlogo">
                    <a href="#">
                        <img src="frontend/images/brandlogo-3.png" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="col-12 tm-brandlogo">
                    <a href="#">
                        <img src="frontend/images/brandlogo-4.png" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="col-12 tm-brandlogo">
                    <a href="#">
                        <img src="frontend/images/brandlogo-5.png" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="col-12 tm-brandlogo">
                    <a href="#">
                        <img src="frontend/images/brandlogo-1.png" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="col-12 tm-brandlogo">
                    <a href="#">
                        <img src="frontend/images/brandlogo-2.png" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="col-12 tm-brandlogo">
                    <a href="#">
                        <img src="frontend/images/brandlogo-3.png" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="col-12 tm-brandlogo">
                    <a href="#">
                        <img src="frontend/images/brandlogo-4.png" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="col-12 tm-brandlogo">
                    <a href="#">
                        <img src="frontend/images/brandlogo-5.png" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

            </div>
        </div>
    </div>
    <!--// Brand Logos -->

</main>
@endsection