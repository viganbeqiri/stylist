@extends('frontend.layouts.app')
@section('frontend-content')
<main class="page-content">

    <div class="tm-section shopping-cart-area bg-white tm-padding-section">
        <div class="container">

            <div class="tm-cart-table table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th class="tm-cart-col-image" scope="col">Image</th>
                            <th class="tm-cart-col-productname" scope="col">Product</th>
                            <th class="tm-cart-col-price" scope="col">Price</th>
                            <th class="tm-cart-col-quantity" scope="col">Quantity</th>
                            <th class="tm-cart-col-total" scope="col">Total</th>
                            <th class="tm-cart-col-remove" scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $total = 0;
                        @endphp
                        @foreach ($carts as $cart)
                        @php
                        $total += $cart->products->selling_price * $cart->quantity;
                        @endphp
                        <tr>
                            <td>
                                <a href="product-details.html" class="tm-cart-productimage">
                                    <img src="{{ asset('images/' . $cart->products->images[0]) }}" alt="product image">
                                </a>
                            </td>
                            <td>
                                <a href="product-details.html" class="tm-cart-productname">{{ $cart->products->name}}</a>
                            </td>
                            <td class="tm-cart-price">${{ $cart->products->selling_price}}</td>
                            <td>
                                <div class="tm-quantitybox">
                                    <input type="text" class="cart_qty_{{$cart->id}}" value="{{ $cart->quantity }}">
                                </div>
                            </td>
                            <td>
                                <span class="tm-cart-totalprice">
                                    {{
                                    $cart->products->selling_price * $cart->quantity
                                    }}
                                </span>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-primary" style="margin-bottom: 5px; color:white" onclick="updateCart(`{{$cart->id}}`)">Update</a>

                                <a class="btn btn-sm btn-danger" onclick="deleteCart(`{{$cart->id}}`)" style="color:white">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--// Shopping Cart Table -->

            <!-- Shopping Cart Content -->
            <div class="tm-cart-bottomarea">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="tm-buttongroup">
                            <a href="/" class="tm-button">Continue Shopping</a>
                        </div>
                        <form action="#" class="tm-cart-coupon">
                            <label for="coupon-field">Have a coupon code?</label>
                            <input type="text" id="coupon-field" placeholder="Enter coupon code" required="required">
                            <button type="submit" class="tm-button">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tm-cart-pricebox">
                            <h2>Cart Totals</h2>
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr class="tm-cart-pricebox-subtotal">
                                            <td>Cart Subtotal</td>
                                            <td>${{ $total }}</td>
                                        </tr>
                                        <tr class="tm-cart-pricebox-shipping">
                                            <td>(+) Shipping Charge</td>
                                            <td>$0</td>
                                        </tr>
                                        <tr class="tm-cart-pricebox-total">
                                            <td>Total</td>
                                            <td>${{ $total }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{ url('checkout') }}" class="tm-button">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('frontend_js')
<script>
    function updateCart(id) {
        let cart_id = id;
        let new_qty = $('.cart_qty_' + cart_id).val();
        $.get({
            url: "{{ url('update-cart') }}/" + cart_id,
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                quantity: new_qty
            },
            success: function(response) {
                window.location.reload();
            }
        });
    }


    function deleteCart(id) {
        let cart_id = id;
        $.get({
            url: "{{ url('cart/delete') }}/" + cart_id,
            type: "GET",
            success: function(response) {
                window.location.reload();
            }
        });
    }
</script>
@endsection