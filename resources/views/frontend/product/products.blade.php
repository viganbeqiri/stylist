@extends('frontend.layouts.app')
@section('frontend-content')
<main class="page-content">

    <!-- Products Wrapper -->
    <div class="tm-products-area tm-section tm-padding-section bg-white">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-12 order-1 order-lg-2">
                    <form action="#" class="tm-shop-header">
                        <div class="tm-shop-productview">
                            <span>View:</span>
                            <button data-view="grid" class="active"><i class="ion-android-apps"></i></button>
                            <button data-view="list"><i class="ion-android-menu"></i></button>
                        </div>
                        <p class="tm-shop-countview">Showing 1 to 9 of 16 </p>
                        <select>
                            <option value="value">Default Sorting</option>
                            <option value="value">Name A-Z</option>
                            <option value="value">Date</option>
                            <option value="value">Best Sellers</option>
                            <option value="value">Trending</option>
                        </select>
                    </form>

                    <div class="tm-shop-products">
                        <div class="row mt-30-reverse">

                            <!-- Single Product -->
                            @foreach ($products as $product)
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 mt-50">
                                <div class="tm-product tm-scrollanim">
                                    <div class="tm-product-topside">
                                        <div class="tm-product-images">
                                            @if($product->images)
                                            <img src="{{ asset('images/' . $product->images[0]) }}" alt="product image" style="width:270px; height:360px">
                                            @endif
                                        </div>
                                        <ul class="tm-product-actions">
                                            <li>
                                                <form method="POST" action="{{ route('add-to-cart') }}" class="tm-form tm-login-form">
                                                    @csrf
                                                    <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                    <input type="hidden" value="1" name="product_quantity">
                                                    <button class="add-to-cart" id="add-to-cart">
                                                        <i class="ion-android-cart"></i> Add to cart
                                                    </button>
                                                </form>
                                            </li>
                                            <li><a href="{{ route('product-details', ['product_id' => $product->id]) }}">
                                                    <i class="ion-eye"></i>
                                                </a></li>
                                            <li><a href="#"><i class="ion-heart"></i></a></li>
                                        </ul>
                                        <div class="tm-product-badges">
                                            <span class="tm-product-badges-new">New</span>
                                            <span class="tm-product-badges-sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="tm-product-bottomside">
                                        <h6 class="tm-product-title">
                                            <a href="product-details.html">{{ $product->name}}</a>
                                        </h6>
                                        <div class="tm-ratingbox">
                                            @for ($i = 1; $i <= 5; $i++) @if($i <=$product->rating)
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                @else
                                                <span><i class="ion-android-star-outline"></i></span>
                                                @endif
                                                @endfor
                                        </div>
                                        <span class="tm-product-price">${{ $product->selling_price}}</span>
                                        <div class="tm-product-content">
                                            <p>{{ $product->description }}</p>
                                            <ul class="tm-product-actions">
                                                <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('product-details', ['product_id' => $product->id]) }}">
                                                        <i class="ion-eye"></i>
                                                    </a>
                                                </li>
                                                <li><a href="#"><i class="ion-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--// Single Product -->

                        </div>
                    </div>

                    <div class="tm-pagination mt-50">
                        <ul>
                            {{ $products->links('custom-pagination', ['foo' => 'bar']) }}
                        </ul>
                    </div>
                </div>

                <!-- Widgets -->
                <div class="col-lg-3 col-12 order-2 order-lg-1">
                    <div class="widgets">

                        <!-- Single Widget -->
                        <div class="single-widget widget-categories">
                            <h6 class="widget-title">Categories</h6>
                            <ul>
                                @foreach ($categories as $category )
                                <li>
                                    <a href="{{ route('products', ['category' => $category->id]) }}">{{ $category->cat_name }}</a>
                                </li>
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
    <!--// Products Wrapper -->

</main>
@endsection