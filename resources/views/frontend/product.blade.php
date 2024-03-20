@extends('frontend.layouts.app')


@section('frontend-content')
<main class="page-content">

    <!-- Product Details Wrapper -->
    <div class="tm-product-details-area tm-section tm-padding-section bg-white">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-12 order-1 order-lg-2">

                    <!-- Product Details -->
                    <div class="tm-prodetails">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-10 col-12">
                                <div class="tm-prodetails-images">
                                    <div class="tm-prodetails-largeimages">
                                        @foreach ($product->images as $image)

                                        <div class="tm-prodetails-largeimage">
                                            @if($product->images)
                                            <a data-fancybox="tm-prodetails-imagegallery" href="{{ asset('images/' . $product->images[0]) }}" data-caption="Product Zoom Image 1">
                                                <img src="{{ asset('images/' . $product->images[0]) }}" alt="product image">
                                            </a>
                                            @endif
                                        </div>
                                        @endforeach

                                    </div>
                                    <div class="tm-prodetails-thumbnails">
                                        @foreach ($product->images as $image)
                                        <div class="tm-prodetails-thumbnail">
                                            <img src="{{ asset('images/' . $product->image) }}" alt="product image">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="tm-prodetails-content">
                                    <h4 class="tm-prodetails-title">{{ $product->name }}</h4>
                                    <span class="tm-prodetails-price"><del>${{ $product->purchase_price }}</del> ${{ $product->selling_price }}</span>
                                    <div class="tm-ratingbox">
                                        @for ($i = 1; $i <= 5; $i++) @if($i <=$product->rating)
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            @else
                                            <span><i class="ion-android-star-outline"></i></span>
                                            @endif
                                            @endfor
                                    </div>
                                    <div class="tm-prodetails-infos">
                                        <div class="tm-prodetails-singleinfo">
                                            <b>Product ID : </b>{{ $product->code }}
                                        </div>
                                        <div class="tm-prodetails-singleinfo">
                                            <b>Category : </b><a href="#">{{$product->category->cat_name}}</a>
                                        </div>
                                        <div class="tm-prodetails-singleinfo tm-prodetails-tags">
                                            <b>Tags : </b>
                                            <ul>
                                                @foreach ($product->tags as $tag)
                                                <li><a href="#">{{$tag->tag_name}}</a></li>
                                                @endforeach

                                            </ul>
                                        </div>
                                        <div class="tm-prodetails-singleinfo">
                                            <b>Available : </b>
                                            <span class="color-theme">
                                                @if($product->qty > 0)
                                                In Stock
                                                @else
                                                Out of Stock
                                                @endif
                                            </span>
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
                                    <p>{!! $product->description !!}</p>
                                    <div class="tm-prodetails-quantitycart">
                                        <h6>Quantity :</h6>
                                        <div class="tm-quantitybox">
                                            <input type="text" value="1">
                                        </div>
                                        <div class="float-right">
                                            <form method="POST" action="{{ route('add-to-cart') }}" class="tm-form tm-login-form">
                                                @csrf
                                                <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                <input type="hidden" value="1" name="product_quantity">
                                                <button class="tm-button tm-button-dark" id="add-to-cart">
                                                    <i class="ion-android-cart"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Product Details -->

                    <!-- Product Details Description & Review -->
                    <div class="tm-prodetails-desreview tm-padding-section-sm-top">
                        <ul class="nav tm-tabgroup2" id="prodetails" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="prodetails-area1-tab" data-toggle="tab" href="#prodetails-area1" role="tab" aria-controls="prodetails-area1" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="prodetails-area2-tab" data-toggle="tab" href="#prodetails-area2" role="tab" aria-controls="prodetails-area2" aria-selected="false">Reviews
                                    (1)</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="prodetails-content">
                            <div class="tab-pane fade show active" id="prodetails-area1" role="tabpanel" aria-labelledby="prodetails-area1-tab">
                                <div class="tm-prodetails-description">
                                    <h4>Product Description</h4>
                                    <p>{!! $product->description !!}</p>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="prodetails-area2" role="tabpanel" aria-labelledby="prodetails-area2-tab">
                                <div class="tm-prodetails-review">
                                    <h5>1 Review For Cosmetic plastic compact powder</h5>
                                    <div class="tm-comment-wrapper mb-50">
                                        <!-- Comment Single -->
                                        <div class="tm-comment">
                                            <div class="tm-comment-thumb">
                                                <img src="assets/images/author-image-1.jpg" alt="author image">
                                            </div>
                                            <div class="tm-comment-content">
                                                <h6 class="tm-comment-authorname"><a href="#">Frida Bins</a>
                                                </h6>
                                                <span class="tm-comment-date">Wednesday, October 17, 2018 at
                                                    4:00PM.</span>
                                                <div class="tm-ratingbox">
                                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                    <span><i class="ion-android-star-outline"></i></span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do
                                                    eiusmod
                                                    tempor incididunt ut labore dolore magna aliqua. Ut enim ad
                                                    minim
                                                    veniam.</p>
                                            </div>
                                        </div>
                                        <!--// Comment Single -->
                                    </div>

                                    <h5>Add a review</h5>
                                    <form action="#" class="tm-form">
                                        <div class="tm-form-inner">
                                            <div class="tm-form-field">
                                                <div class="tm-ratingbox tm-ratingbox-input">
                                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                    <span><i class="ion-android-star-outline"></i></span>
                                                </div>
                                            </div>
                                            <div class="tm-form-field tm-form-fieldhalf">
                                                <input type="text" placeholder="Your Name*" required="required">
                                            </div>
                                            <div class="tm-form-field tm-form-fieldhalf">
                                                <input type="Email" placeholder="Your Email*" required="required">
                                            </div>
                                            <div class="tm-form-field">
                                                <textarea name="product-review" cols="30" rows="5" placeholder="Your Review"></textarea>
                                            </div>
                                            <div class="tm-form-field">
                                                <button type="submit" class="tm-button">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Product Details Description & Review -->

                    <!-- <div class="tm-similliar-products tm-padding-section-sm-top">
                        <h4 class="small-title">Similliar Products</h4>
                        <div class="row tm-products-slider3">

                            
                            <div class="col-12">
                                <div class="tm-product tm-scrollanim">
                                    <div class="tm-product-topside">
                                        <div class="tm-product-images">
                                            <img src="assets/images/products/product-image-1.jpg" alt="product image">
                                            <img src="assets/images/products/product-image-2.jpg" alt="product image">
                                        </div>
                                        <ul class="tm-product-actions">
                                            <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                            </li>
                                            <li><button data-fancybox data-src="#tm-product-quickview"><i class="ion-eye"></i></button></li>
                                            <li><a href="#"><i class="ion-heart"></i></a></li>
                                        </ul>
                                        <div class="tm-product-badges">
                                            <span class="tm-product-badges-new">New</span>
                                            <span class="tm-product-badges-sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="tm-product-bottomside">
                                        <h6 class="tm-product-title"><a href="product-details.html">Stylist
                                                daimond
                                                earring</a></h6>
                                        <div class="tm-ratingbox">
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span><i class="ion-android-star-outline"></i></span>
                                        </div>
                                        <span class="tm-product-price">$29.99</span>
                                        <div class="tm-product-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem
                                                Ipsum has been the industry's standard dummy text ever since the
                                                when an unknown printer took a galley of type and scrambled it
                                                to make a
                                                type specimen book. It has survived not only five centuries, but
                                                also the
                                                leap into electronic typesetting.</p>
                                            <ul class="tm-product-actions">
                                                <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                </li>
                                                <li><button data-fancybox data-src="#tm-product-quickview"><i class="ion-eye"></i></button></li>
                                                <li><a href="#"><i class="ion-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

                            
                            <div class="col-12">
                                <div class="tm-product tm-scrollanim">
                                    <div class="tm-product-topside">
                                        <div class="tm-product-images">
                                            <img src="assets/images/products/product-image-3.jpg" alt="product image">
                                        </div>
                                        <ul class="tm-product-actions">
                                            <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                            </li>
                                            <li><button data-fancybox data-src="#tm-product-quickview"><i class="ion-eye"></i></button></li>
                                            <li><a href="#"><i class="ion-heart"></i></a></li>
                                        </ul>
                                        <div class="tm-product-badges">
                                            <span class="tm-product-badges-sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="tm-product-bottomside">
                                        <h6 class="tm-product-title"><a href="product-details.html">Stylist
                                                daimond
                                                earring</a></h6>
                                        <div class="tm-ratingbox">
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span><i class="ion-android-star-outline"></i></span>
                                        </div>
                                        <span class="tm-product-price">$29.99</span>
                                        <div class="tm-product-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem
                                                Ipsum has been the industry's standard dummy text ever since the
                                                when an unknown printer took a galley of type and scrambled it
                                                to make a
                                                type specimen book. It has survived not only five centuries, but
                                                also the
                                                leap into electronic typesetting.</p>
                                            <ul class="tm-product-actions">
                                                <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                </li>
                                                <li><button data-fancybox data-src="#tm-product-quickview"><i class="ion-eye"></i></button></li>
                                                <li><a href="#"><i class="ion-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-12">
                                <div class="tm-product tm-scrollanim">
                                    <div class="tm-product-topside">
                                        <div class="tm-product-images">
                                            <img src="assets/images/products/product-image-4.jpg" alt="product image">
                                            <img src="assets/images/products/product-image-5.jpg" alt="product image">
                                        </div>
                                        <ul class="tm-product-actions">
                                            <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                            </li>
                                            <li><button data-fancybox data-src="#tm-product-quickview"><i class="ion-eye"></i></button></li>
                                            <li><a href="#"><i class="ion-heart"></i></a></li>
                                        </ul>
                                        <div class="tm-product-badges">
                                            <span class="tm-product-badges-soldout">Sold out</span>
                                        </div>
                                    </div>
                                    <div class="tm-product-bottomside">
                                        <h6 class="tm-product-title"><a href="product-details.html">Stylist
                                                daimond
                                                earring</a></h6>
                                        <div class="tm-ratingbox">
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span><i class="ion-android-star-outline"></i></span>
                                        </div>
                                        <span class="tm-product-price">$29.99</span>
                                        <div class="tm-product-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem
                                                Ipsum has been the industry's standard dummy text ever since the
                                                when an unknown printer took a galley of type and scrambled it
                                                to make a
                                                type specimen book. It has survived not only five centuries, but
                                                also the
                                                leap into electronic typesetting.</p>
                                            <ul class="tm-product-actions">
                                                <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                </li>
                                                <li><button data-fancybox data-src="#tm-product-quickview"><i class="ion-eye"></i></button></li>
                                                <li><a href="#"><i class="ion-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-12">
                                <div class="tm-product tm-scrollanim">
                                    <div class="tm-product-topside">
                                        <div class="tm-product-images">
                                            <img src="assets/images/products/product-image-1.jpg" alt="product image">
                                            <img src="assets/images/products/product-image-2.jpg" alt="product image">
                                        </div>
                                        <ul class="tm-product-actions">
                                            <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                            </li>
                                            <li><button data-fancybox data-src="#tm-product-quickview"><i class="ion-eye"></i></button></li>
                                            <li><a href="#"><i class="ion-heart"></i></a></li>
                                        </ul>
                                        <div class="tm-product-badges">
                                            <span class="tm-product-badges-new">New</span>
                                            <span class="tm-product-badges-sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="tm-product-bottomside">
                                        <h6 class="tm-product-title"><a href="product-details.html">Stylist
                                                daimond
                                                earring</a></h6>
                                        <div class="tm-ratingbox">
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                            <span><i class="ion-android-star-outline"></i></span>
                                        </div>
                                        <span class="tm-product-price">$29.99</span>
                                        <div class="tm-product-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem
                                                Ipsum has been the industry's standard dummy text ever since the
                                                when an unknown printer took a galley of type and scrambled it
                                                to make a
                                                type specimen book. It has survived not only five centuries, but
                                                also the
                                                leap into electronic typesetting.</p>
                                            <ul class="tm-product-actions">
                                                <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                </li>
                                                <li><button data-fancybox data-src="#tm-product-quickview"><i class="ion-eye"></i></button></li>
                                                <li><a href="#"><i class="ion-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div> -->

                </div>

                <!-- Widgets -->
                <div class="col-lg-3 col-12 order-2 order-lg-1">
                    <div class="widgets">

                        <!-- Single Widget -->
                        <div class="single-widget widget-categories">
                            <h6 class="widget-title">Categories</h6>
                            <ul>
                                @foreach ($categories as $category)
                                <li> <a href="{{ route('products', ['category' => $category->id]) }}">{{ $category->cat_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!--// Single Widget -->

                        <!-- Single Widget -->
                        <div class="single-widget widget-pricefilter">
                            <h6 class="widget-title">Filter by Price</h6>
                            <div class="widget-pricefilter-inner">
                                <div class="tm-rangeslider" data-range_min="0" data-range_max="800" data-cur_min="200" data-cur_max="550">
                                    <div class="tm-rangeslider-bar nst-animating"></div>
                                    <span class="tm-rangeslider-leftgrip nst-animating" tabindex="0"></span>
                                    <span class="tm-rangeslider-rightgrip nst-animating" tabindex="0"></span>
                                </div>
                                <div class="widget-pricefilter-actions">
                                    <p class="widget-pricefilter-price">Price: $<span class="tm-rangeslider-leftlabel">308</span>
                                        - $<span class="tm-rangeslider-rightlabel">798</span></p>
                                    <button class="widget-pricefilter-button">Filter</button>
                                </div>
                            </div>
                        </div>
                        <!--// Single Widget -->

                        <!-- Single Widget -->
                        <div class="single-widget widget-popularproduct">
                            <h6 class="widget-title">Popular Product</h6>
                            <ul>
                                @foreach ($popular_products as $popular_product )


                                <li>
                                    <a href="{{ route('product-details', ['product_id' => $popular_product->id]) }}" class="widget-popularproduct-image">
                                        <img src="{{ asset('images/' . $popular_product->images[0]) }}" alt="{{ $popular_product->name }}">
                                    </a>
                                    <div class="widget-popularproduct-content">
                                        <h6>
                                            <a href="{{ route('product-details', ['product_id' => $popular_product->id]) }}">{{ $popular_product->name }}</a>
                                        </h6>
                                        <span>${{ $popular_product->selling_price }}</span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--// Single Widget -->

                        <!-- Single Widget -->
                        <div class="single-widget widget-sizes">
                            <h6 class="widget-title">Sizes</h6>
                            <ul>
                                <li><a href="products.html">Small Size</a></li>
                                <li><a href="products.html">Medium Size</a></li>
                                <li><a href="products.html">Large Size</a></li>
                                <li><a href="products.html">Extra Large Size</a></li>
                            </ul>
                        </div>
                        <!--// Single Widget -->

                    </div>
                </div>
                <!--// Widgets -->

            </div>
        </div>
    </div>
    <!--// Product Details Wrapper -->

</main>
@endsection