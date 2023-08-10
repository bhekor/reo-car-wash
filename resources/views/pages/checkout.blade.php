@extends('layouts.app')

@section('content')
<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="assets/img/slider/slider-bg-1.jpg">
        <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title">Free <span>Contact</span></h2>
                        <div class="breadcrumb-menu">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.html">Home</a>
                                    </li>
                                    <li class="trail-item trail-end"><span>Contact us</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- map area start here -->
    <!-- <div class="tp-map-area pt-120 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830894612!2d-74.11976383964465!3d40.69766374865766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1636888514620!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- map area end here -->

    <!-- contact area start here -->
    <section class="tp-contact-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="section-title-wrapper-two mb-50 wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="tp-section-subtitle common-yellow-shape mb-20 heading-color-black">Get Free Estimate</h5>
                        <h2 class="tp-section-title heading-color-black">{{ $plan }} </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="row custom-mar-20">
                        <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                            <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".4s">
                                <div class="tp-contact-info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="tp-contact-info-text">
                                    <h4 class="tp-contact-info-title mb-15">Address</h4>
                                    <p>45 Jimoh Sobowale Street,<br>Magodo road, Isheri Lagos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                            <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".6s">
                                <div class="tp-contact-info-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="tp-contact-info-text">
                                    <h4 class="tp-contact-info-title mb-15">Phone</h4>
                                    <a href="tel:+2349041381190">+2349041381190</a>
                                    <a href="tel:+2349041381190">+2349041381190</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                            <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".8s">
                                <div class="tp-contact-info-icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="tp-contact-info-text">
                                    <h4 class="tp-contact-info-title mb-15">Email</h4>
                                    <a href="#"><span class="__cf_email__" data-cfemail="01686f676e417569646c64717473642f626e6c">reoraborglobal@gmail.com</span></a>
                                    <a href="#"><span class="__cf_email__" data-cfemail="3e575058517e4a565b535b4e4b4c5b105d5153">reoraborglobal@gmail.com</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tp-contact-form">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul style="padding-left: 15px">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('page.pay') }}" method="post">@csrf
                            <div class="row custom-mar-20">
                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="text" name="name" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="email" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="text" name="location" placeholder="Location">
                                    </div>
                                </div>
                                {{-- <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field select-field-arrow mb-20">
                                        <select>
                                            <option value="">Choose Subject</option>
                                            <option value="">House Cleaning</option>
                                            <option value="">Office Cleaning</option>
                                            <option value="">Kitchen Cleaning</option>
                                            <option value="">Club Cleaning</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-md-12 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <textarea placeholder="Additional Notes:" rows="3" name="notes"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 custom-pad-20">
                                    <input type="hidden" name="plan_name" value="{{ $plan_name }}" >
                                    <input type="hidden" name="amount" value="{{ $amount }}">
                                    <h4>You are to pay the sum of: <strong>N{{ number_format($amount, 2) }}</strong></h4>
                                    <div class="tp-contact-form-field" style="display: flex;gap: 20px;">
                                        <button type="submit" class="theme-btn"><i class="flaticon-enter"></i> Pay Now</button>
                                        {{-- <button type="submit" class="yellow-btn">Pay Later <i class="flaticon-enter"></i></button> --}}
                                        <input class="theme-btn" type="submit" name="payment_type" value="Pay Later" style="height: 60px;width: max-content;padding-left: 50px;padding-right: 50px;">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end here -->


</main>
@endsection
