@extends('frontend.layouts.app')

@section('frontend-content')
<main class="page-content">

    <!-- My Account Area -->
    <div class="tm-section tm-my-account-area bg-white tm-padding-section">
        <div class="container">
            <div class="tm-myaccount">
                <ul class="nav tm-tabgroup" id="account" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="account-dashboard-tab" data-toggle="tab" href="#account-dashboard" role="tab" aria-controls="account-dashboard" aria-selected="true">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account-orders-tab" data-toggle="tab" href="#account-orders" role="tab" aria-controls="account-orders" aria-selected="false">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account-address-tab" data-toggle="tab" href="#account-address" role="tab" aria-controls="account-address" aria-selected="false">Address</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account-acdetails-tab" data-toggle="tab" href="#account-acdetails" role="tab" aria-controls="account-acdetails" aria-selected="false">Account Details</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('logout') }}" id="account-logout-tab" href="login-register.html" role="tab" aria-controls="account-address" aria-selected="false" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </li>
                </ul>

                <div class="tab-content" id="account-ontent">
                    <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel" aria-labelledby="account-dashboard-tab">
                        <div class="tm-myaccount-dashboard">
                            <p>Hello <b>{{ auth()->user()->name }}</p>
                            <p>From your account dashboard you can view your recent orders, manage your
                                shipping and billing addresses, and edit your password and account details.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                        <div class="tm-myaccount-orders">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th class="tm-myaccount-orders-col-id">ORDER ID</th>
                                            <th class="tm-myaccount-orders-col-date">DATE</th>
                                            <th class="tm-myaccount-orders-col-status">STATUS</th>
                                            <th class="tm-myaccount-orders-col-total">TOTAL</th>
                                            <th class="tm-myaccount-orders-col-view">VIEW</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order )

                                        <tr>
                                            <td>#{{ $order->id }}</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td>{{ $order->status }}</td>
                                            <td>${{ $order->grand_total }}</td>
                                            <td>View</a>
                                            </td>

                                            @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-address" role="tabpanel" aria-labelledby="account-address-tab">
                        <div class="tm-myaccount-address">
                            <p><b>The following addresses will be used on the checkout page by default.</b></p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="tm-myaccount-address-billing">
                                        <a href="#" class="edit-button">Edit</a>
                                        <h3>Billing Address</h3>
                                        <address>
                                            Jonathon Doe<br>
                                            Example company<br>
                                            516 Wintheiser Circles <br>
                                            Lake Jordanmouth <br>
                                            Jordan
                                        </address>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30 mt-md-0">
                                    <div class="tm-myaccount-address-shipping">
                                        <a href="#" class="edit-button">Edit</a>
                                        <h3>Shipping Address</h3>
                                        <address>
                                            Jonathon Doe<br>
                                            Example company<br>
                                            516 Wintheiser Circles <br>
                                            Lake Jordanmouth <br>
                                            Jordan
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-acdetails" role="tabpanel" aria-labelledby="account-acdetails-tab">
                        <div class="tm-myaccount-acdetails">
                            <form action="#" class="tm-form tm-form-bordered">
                                <h4>Account Details</h4>
                                <div class="tm-form-inner">
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <label for="acdetails-firstname">First name</label>
                                        <input type="text" id="acdetails-firstname">
                                    </div>
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <label for="acdetails-lastname">Last name</label>
                                        <input type="text" id="acdetails-lastname">
                                    </div>
                                    <div class="tm-form-field">
                                        <label for="acdetails-displayname">Dispaly name</label>
                                        <input type="text" id="acdetails-displayname">
                                    </div>
                                    <div class="tm-form-field">
                                        <label for="acdetails-email">Email address</label>
                                        <input type="email" id="acdetails-email">
                                    </div>
                                    <div class="tm-form-field">
                                        <label for="acdetails-password">Old password</label>
                                        <input type="password" id="acdetails-password">
                                    </div>
                                    <div class="tm-form-field">
                                        <label for="acdetails-newpassword">New password</label>
                                        <input type="password" id="acdetails-newpassword">
                                    </div>
                                    <div class="tm-form-field">
                                        <label for="acdetails-confirmpass">Confirm password</label>
                                        <input type="password" id="acdetails-confirmpass">
                                    </div>
                                    <div class="tm-form-field">
                                        <input type="checkbox" name="acdetails-agreeterms" id="acdetails-agreeterms">
                                        <label for="acdetails-agreeterms">I have read and agree to the Privacy
                                            Policy</label>
                                    </div>
                                    <div class="tm-form-field">
                                        <button type="submit" class="tm-button">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// My Account Area -->

</main>
@endsection