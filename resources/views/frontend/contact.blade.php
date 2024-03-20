@extends('frontend.layouts.app')
@section('frontend-content')
<main class="page-content">

    <!-- Google Map -->
    <div id="google-map" class="google-map"></div>
    <!--// Google Map -->

    <!-- Contact Area -->
    <div class="tm-section tm-contact-area tm-padding-section bg-white">
        <div class="container">
            <div class="tm-contact-blocks">
                <div class="row mt-30-reverse justify-content-center">

                    <!-- Contact block -->
                    <div class="col-lg-4 col-md-6  mt-30">
                        <div class="tm-contact-block text-center">
                            <i class="ion-android-call"></i>
                            <h6>Call Us</h6>
                            <p>Phone : <a href="tel:+177299997">177299997</a></p>
                            <p>Whatsapp : <a href="tel:+177299997">177299997</a></p>
                        </div>
                    </div>
                    <!--// Contact block -->

                    <!-- Contact block -->
                    <div class="col-lg-4 col-md-6  mt-30">
                        <div class="tm-contact-block text-center">
                            <i class="ion-location"></i>
                            <h6>Our Location</h6>
                            <p>BLANCPAIN Moda Mall, Manama, Bahrain</p>
                        </div>
                    </div>
                    <!--// Contact block -->

                    <!-- Contact block -->
                    <div class="col-lg-4 col-md-6  mt-30">
                        <div class="tm-contact-block text-center">
                            <i class="ion-email"></i>
                            <h6>Email</h6>
                            <p><a href="mailto:surose@gmail.com">info@digitalgate.ae</a></p>
                            <p><a href="mailto:info@surose.com">contact@digitalgate.ae</a></p>
                        </div>
                    </div>
                    <!--// Contact block -->

                </div>
            </div>

            <div class="tm-contact-forms tm-padding-section-top">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="tm-sectiontitle text-center">
                            <h3>SEND US A MESSAGE</h3>
                            <p>You can contact us for any of your requirements. We’ll help you meet your needs.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form  action="{{ route('contact.store') }}" class="tm-contact-forminner tm-form" method="POST">
                            @csrf
                            <div class="tm-form-inner">
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="contact-form-name">Name</label>
                                    <input type="text" id="contact-form-name" placeholder="Your name here" name="name" required>
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="contact-form-email">Email</label>
                                    <input type="email" id="contact-form-email" placeholder="surose@example.com" name="email" required>
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="contact-form-phone">Phone</label>
                                    <input type="text" id="contact-form-phone" placeholder="Your phone number here" name="phone" required>
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="contact-form-subject">Subject</label>
                                    <input type="text" id="contact-form-subject" placeholder="Your subjert" name="subject">
                                </div>
                                <div class="tm-form-field">
                                    <label for="contact-form-message">Message</label>
                                    <textarea cols="30" rows="5" id="contact-form-message" placeholder="Write your message" name="message"></textarea>
                                </div>
                                <div class="tm-form-field text-center">
                                    <button type="submit" class="tm-button">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                        @if(isset($send_message))
                        <div style="text-align: center;padding: 10px;color: green;">
                            <h1 style="color:green">{{ $send_message }}</h1>
                        </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Contact Area -->

</main>
@endsection
