@extends('frontend.layouts.app')
@section('frontend-content')
<main class="page-content">

    <!-- Checkout Area -->
    <div class="tm-section tm-checkout-area bg-white tm-padding-section">
        <div class="container">
            <div class="tm-checkout-coupon">
                <a href="#checkout-couponform" data-toggle="collapse"><span>Have a coupon code?</span> Click
                    here and enter your code.</a>
                <div id="checkout-couponform" class="collapse">
                    <form action="#" class="tm-checkout-couponform">
                        <input type="text" id="coupon-field" placeholder="Enter coupon code" required="required">
                        <button type="submit" class="tm-button">Submit</button>
                    </form>
                </div>
            </div>
            <form action="{{ route('create-order') }}" method="post" class="tm-form tm-checkout-form">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="small-title">BILLING INFORMATION</h4>

                        <!-- Billing Form -->
                        <div class="tm-checkout-billingform">
                            <div class="tm-form-inner">
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="billingform-firstname">First name*</label>
                                    <input type="text" name="billing_first_name" value="{{ $billing_info->first_name ?? '' }}" id="billingform-firstname">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="billingform-lastname">Last name*</label>
                                    <input type="text" name="billing_last_name" id="billingform-lastname" value="{{ $billing_info->last_name ?? '' }}">
                                </div>
                                <div class="tm-form-field">
                                    <label for="billingform-companyname">Company name</label>
                                    <input type="text" name="billing_company_name" id="billingform-companyname" value="{{ $billing_info->company_name ?? ''}}">
                                </div>
                                <div class="tm-form-field">
                                    <label for="billingform-email">Email address</label>
                                    <input type="email" name="billing_email" id="billingform-email" value="{{ $billing_info->email ?? '' }}">
                                </div>
                                <div class="tm-form-field">
                                    <label for="billingform-phone">Phone (Optional)</label>
                                    <input type="text" name="billing_phone" id="billingform-phone" value="{{ $billing_info->phone ?? ''}}">
                                </div>
                                <div class="tm-form-field">
                                    <label for="billingform-country">Country</label>
                                    <select name="billing_country" id="billingform-country">
                                        <option value="United States">United States</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="France">France</option>
                                    </select>
                                </div>
                                <div class="tm-form-field">
                                    <label for="billingform-address">Address</label>
                                    <input type="text" name="billing_address" id="billingform-address" placeholder="Apartment, Street Address" value="{{ $billing_info->address ?? '' }}">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="billingform-streetaddress">State</label>
                                    <input type="text" name="billing_state" id="billingform-streetaddress" value="{{ $billing_info->state ?? '' }}">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="billingform-zipcode">Zip / Postcode</label>
                                    <input type="text" name="billing_zip" id="billingform-zipcode" value="{{ $billing_info->zip ?? '' }}">
                                </div>
                                <div class="tm-form-field">
                                    <input type="checkbox" name="billing_another_shippingaddress" name="billform-dirrentswitch" id="billform-dirrentswitch" value="{{ $billing_info->billing_another_shippingaddress ?? '' }}">
                                    <label for="billform-dirrentswitch"><b>Ship to another address</b></label>
                                </div>
                            </div>
                        </div>
                        <!--// Billing Form -->

                        <!-- Different Address Form -->
                        <div class="tm-checkout-differentform">
                            <div class="tm-form-inner">
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="differentform-firstname">First name*</label>
                                    <input type="text" name="shipping_first_name" id="differentform-firstname">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="differentform-lastname">Last name*</label>
                                    <input type="text" name="shipping_last_name" id="differentform-lastname">
                                </div>
                                <div class="tm-form-field">
                                    <label for="differentform-companyname">Company name</label>
                                    <input type="text" name="shipping_company_name" id="differentform-companyname">
                                </div>
                                <div class="tm-form-field">
                                    <label for="differentform-email">Email address</label>
                                    <input type="email" name="shipping_email" id="differentform-email">
                                </div>
                                <div class="tm-form-field">
                                    <label for="differentform-phone">Phone (Optional)</label>
                                    <input type="text" name="shipping_phone" id="differentform-phone">
                                </div>
                                <div class="tm-form-field">
                                    <label for="differentform-country">Country</label>
                                    <select name="shipping_differentform-country" name="shipping_country" id="differentform-country">
                                        <option value="United States">United States</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="France">France</option>
                                    </select>
                                </div>
                                <div class="tm-form-field">
                                    <label for="differentform-address">Address</label>
                                    <input type="text" id="differentform-address" name="shipping_address" placeholder="Apartment, Street Address">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="differentform-streetaddress">State</label>
                                    <input type="text" name="shipping_state" id="differentform-streetaddress">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="differentform-zipcode">Zip / Postcode</label>
                                    <input type="text" name="shipping_zip" id="differentform-zipcode">
                                </div>
                            </div>
                        </div>
                        <!--// Different Address Form -->

                    </div>
                    <div class="col-lg-6">
                        <div class="tm-checkout-orderinfo">
                            <div class="table-responsive">
                                <table class="table table-borderless tm-checkout-ordertable">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
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
                                            <td>{{ $cart->products->name}} * {{ $cart->quantity }}</td>
                                            <td>${{ $cart->products->selling_price * $cart->quantity }}</td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr class="tm-checkout-subtotal">
                                            <td>Cart Subtotal</td>
                                            <td>${{ $total }}</td>
                                        </tr>
                                        <tr class="tm-checkout-shipping">
                                            <td>(+) Shipping Charge</td>
                                            <td>$00</td>
                                        </tr>
                                        <tr class="tm-checkout-total">
                                            <td>Total</td>
                                            <td>${{ $total }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="tm-checkout-payment">
                                <h4>Select Payment Method</h4>
                                <div class="tm-form-inner">
                                    <div class="tm-form-field">
                                        <input type="radio" name="checkout-payment-method" id="checkout-payment-banktransfer">
                                        <label for="checkout-payment-banktransfer">Direct Bank Transfer</label>
                                        <div class="tm-checkout-payment-content">
                                            <p>Make your payment directly into our bank account.</p>
                                        </div>
                                    </div>
                                    <div class="tm-form-field">
                                        <input type="radio" name="checkout-payment-method" id="checkout-payment-checkpayment" checked="checked">
                                        <label for="checkout-payment-checkpayment">Check Payments</label>
                                        <div class="tm-checkout-payment-content">
                                            <p>Please send a check to Store Name, Store Street, Store Town,
                                                Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                    <div class="tm-form-field">
                                        <input type="radio" name="checkout-payment-method" id="checkout-payment-cashondelivery">
                                        <label for="checkout-payment-cashondelivery">Cash On Delivery</label>
                                        <div class="tm-checkout-payment-content">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>
                                    <div class="tm-form-field">
                                        <input type="radio" name="checkout-payment-method" id="checkout-payment-paypal">
                                        <label for="checkout-payment-paypal">PayPal</label>
                                        <div class="tm-checkout-payment-content">
                                            <p>Pay via PayPal.</p>
                                        </div>
                                    </div>
                                    <div class="tm-form-field">
                                        <input type="radio" name="checkout-payment-method" id="checkout-payment-creditcard">
                                        <label for="checkout-payment-creditcard">Credit Card</label>
                                        <div class="tm-checkout-payment-content">
                                            <p>Pay with your credit card via Stripe.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tm-checkout-submit">
                                <p>Your personal data will be used to process your order, support your
                                    experience throughout this website, and for other purposes described in our
                                    privacy policy.</p>
                                <div class="tm-form-inner">
                                    <div class="tm-form-field">
                                        <input type="checkbox" name="checkout-read-terms" id="checkout-read-terms">
                                        <label for="checkout-read-terms">I have read and agree to the website
                                            terms and conditions</label>
                                    </div>
                                    <div class="tm-form-field">
                                        <button type="submit" class="tm-button ml-auto">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--// Checkout Area -->

</main>
@endsection