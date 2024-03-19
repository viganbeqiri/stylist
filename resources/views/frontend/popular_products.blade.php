<div id="tm-popular-products-area" class="tm-section tm-popular-products-area tm-padding-section bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="tm-sectiontitle text-center">
                    <h3>POPULAR PRODUCTS</h3>
                    <p>Our popular products are so beautyful to see that the shoppers are easily attracted
                        to them.</p>
                </div>
            </div>
        </div>
        <div class="row tm-products-slider">

            <!-- Single Product -->
            @foreach ($popular_products as $product)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
                <div class="tm-product tm-scrollanim">
                    <div class="tm-product-topside">
                        <div class="tm-product-images">
                            <img src="{{ asset('images/' . $product->images[0]) }}" alt="product image" style="width:270px; height:360px">
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
                            <a href="{{ route('product-details', ['product_id' => $product->id]) }}">{{ $product->name }}</a>
                        </h6>
                        <div class="tm-ratingbox">
                            @for ($i = 1; $i <= 5; $i++) @if($i <=$product->rating)
                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                @else
                                <span><i class="ion-android-star-outline"></i></span>
                                @endif
                                @endfor
                        </div>
                        <span class="tm-product-price">${{ $product->selling_price }}</span>
                    </div>
                </div>
            </div>
            @endforeach
            <!--// Single Product -->

        </div>
    </div>
</div>