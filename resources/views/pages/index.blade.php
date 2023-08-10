@extends('layouts.app')

@section('content')
<main>
    <!-- hero area start here -->
    <section class="tp-slider-area fix">
        <div class="tp-slider-active swiper-container common-dots">
            <div class="swiper-wrapper">
                <div class="tp-single-slider tp-slider-height d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                    <div class="slide-bg" data-background="assets/img/slider/slider-bg-1.jpg"></div>
                    <div class="slider-img" id="first-slider-img">
                        <img src="assets/img/about/carr (3).jpg" class="img-fluid" alt="img not found" class="slide-image-1">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tp-slider-wrapper mt-60 position-relative">
                                    <div class="tp-slider-video-btn play_btn">
                                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/o4GuSJYSzrY"><i class="fas fa-play"></i></a>
                                    </div>
                                    <div class="tp-slider z-index">
                                        <h2 class="tp-slider-subtitle common-yellow-shape w-80 mb-35" data-animation="fadeInUp" data-delay=".5s">Reo Mobile efficient service</h2>
                                        <h1 class="tp-slider-title mb-45" data-animation="fadeInUp" data-delay=".8s"  style="color: white;
                                        text-shadow: 1px 1px 2px black, 0 0 25px rgb(255, 38, 0), 0 0 5px rgb(170, 6, 6);"><span style="color: rgb(224, 4, 4); text-shadow: 1px 1px 2px black, 0 0 25px rgb(255, 254, 253), 0 0 5px rgb(211, 210, 210);">Reo</span> <br>Mobile  Car <br>Cleaning Service.</h1>
                                        <div class="tp-slider-btn" data-animation="fadeInUp" data-delay="1.1s">
                                            <a href="about.html" class="theme-btn"><i class="flaticon-enter"></i> Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-single-slider tp-slider-height d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                    <div class="slide-bg" data-background="assets/img/slider/slider-bg-1.jpg"></div>
                    <div class="slider-img" id="second-slider-img">
                        <img src="assets/img/about/carr (6).jpg" class="img-fluid" alt="img not found">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tp-slider-wrapper mt-60 position-relative">
                                    <div class="tp-slider-video-btn play_btn">
                                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/o4GuSJYSzrY"><i class="fas fa-play"></i></a>
                                    </div>
                                    <div class="tp-slider z-index">
                                        <h5 class="tp-slider-subtitle common-yellow-shape w-80 mb-35" data-animation="fadeInUp" data-delay=".5s">Reo Mobile</h5>
                                        <h1 class="tp-slider-title mb-45" data-animation="fadeInUp" data-delay=".8s"  style="color: white;   text-shadow: 1px 1px 2px black, 0 0 25px rgb(255, 38, 0), 0 0 5px rgb(170, 6, 6);">We <br>Offer Express <br>Car Wash Service.</h1>
                                        <div class="tp-slider-btn" data-animation="fadeInUp" data-delay="1.1s">
                                            <a href="about.html" class="theme-btn"><i class="flaticon-enter"></i> Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-single-slider tp-slider-height d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                    <div class="slide-bg" data-background="assets/img/slider/slider-bg-1.jpg"></div>
                    <div class="slider-img" id="third-slider-img">
                        <img src="assets/img/about/car (5).jpg" class="img-fluid" alt="img not found">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tp-slider-wrapper mt-60 position-relative">
                                    <div class="tp-slider-video-btn play_btn">
                                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/o4GuSzrY"><i class="fas fa-play"></i></a>
                                    </div>
                                    <div class="tp-slider z-index">
                                        <h5 class="tp-slider-subtitle common-yellow-shape w-80 mb-35" data-animation="fadeInUp" data-delay=".5s">Reo Mobile efficient service</h5>
                                        <h1 class="tp-slider-title mb-45" data-animation="fadeInUp" data-delay=".8s"  style="color: white;   text-shadow: 1px 1px 2px black, 0 0 25px rgb(255, 38, 0), 0 0 5px rgb(170, 6, 6);">Lasting <br>Cleaning <br>Experience.</h1>
                                        <div class="tp-slider-btn" data-animation="fadeInUp" data-delay="1.1s">
                                            <a href="about.html" class="theme-btn"><i class="flaticon-enter" "></i> Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-paginations slide-dots"></div>
        </div>
    </section>
    <!-- hero area end here -->

    <!-- cta area start here -->
    <section class="tp-appoint-cta-area yellow-dark-bg pt-80 pb-65" style="background-color: #c90d00;">
        <div class="container">
            <div class="row align-items-center custom-mar-20">
                <div class="col-xl-2 col-lg-12 custom-pad-20">
                    <div `class="tp-appoint wow fadeInUp" data-wow-delay=".1s">
                        <h4 class="tp-appoint-title" style="color: white;">Book <br> Appointment </h4>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9 custom-pad-20">
                    <div class="row align-items-center custom-mar-20">
                        <div class="col-lg-4 custom-pad-20">
                            <div class="tp-appoint wow fadeInUp" data-wow-delay=".3s">
                                <input type="text" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-lg-4 custom-pad-20">
                            <div class="tp-appoint wow fadeInUp" data-wow-delay=".5s">
                                <input type="text" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-4 custom-pad-20">
                            <div class="tp-appoint select-field-arrow wow fadeInUp" data-wow-delay=".7s">
                                <select>
                                    <option value="">Service Name</option>
                                    <option value="">Car Interior</option>
                                    <option value="">Car Exterior</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 custom-pad-20">
                    <div class="tp-appoint text-end wow fadeInUp" data-wow-delay=".9s">
                        <button type="submit" class="theme-btn" id="theme-btn"><i class="flaticon-enter";></i> Submit Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end here -->

    <!-- about area start here -->
    <section class="tp-about-area position-relative pt-120 pb-90 fix">
        <div class="tp-about-shape">
            <img src="assets/img/about/about-shape-1.jpg" class="img-fluid" alt="img not found">
        </div>
        <div class="container">
            <div class="row justify-content-xl-between justify-content-md-center">
                <div class="col-xl-5 col-12">
                    <div class="tp-about-img z-index wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/img/about/carr (5).jpg" alt="img not found">
                    </div>
                </div>
                <div class="col-xl-6 col-md-10">
                    <div class="tp-about-text z-index wow fadeInUp" data-wow-delay=".6s">
                        <div class="section-title-wrapper mb-30">
                            <h5 class="tp-section-subtitle common-yellow-shape mb-20"  style="color: rgb(224, 3, 3)">About our Company</h5>
                            <h2 class="tp-section-title" style="color: rgb(77, 74, 74);">Convinient <br>Cleaning Experience</h2>
                        </div>
                        <p class="mb-40" style="color: rgb(77, 74, 74);">At <span style="color: rgb(202, 9, 9);">REO</span> we are dedicated to providing quality services, customer satisfaction at great value for every customer.</p>
                        <div class="row mb-10">
                            <div class="col-sm-6">
                                <div class="tp-about-service mb-30">
                                    <div class="tp-about-service-icon yellow-circle-shape mb-15">
                                         <img src="assets/img/about/washicon (6).png" alt="">
                                    </div>
                                    <div class="tp-about-service-text">
                                        <h4 class="tp-about-service-text-title mb-15 hover-theme-color"><a href="service.html" style="color: rgb(77, 74, 74);">Engine Cleaning</a></h4>
                                        <p style="color: rgb(77, 74, 74);">Very effective for all kinds of engines. Leaving it shiny, dry & non-greasy.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="tp-about-service mb-30">
                                    <div class="tp-about-service-icon yellow-circle-shape mb-15">
                                         <img src="assets/img/about/washicon (3).png" alt="">
                                    </div>
                                    <div class="tp-about-service-text">
                                        <h4 class="tp-about-service-text-title mb-15 hover-theme-color"><a href="service.html" style="color: rgb(77, 74, 74);">Exterior Detailing</a></h4>
                                        <p style="color: rgb(77, 74, 74);">We restore that sparkling, glow effect on your car, using modern technologies.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="tp-about-author mb-30">
                                    <div class="tp-about-author-img">
                                        <img src="assets/img/about/CEO.jpg" class="img-fluid" alt="img not found">
                                    </div>
                                    <div class="tp-about-author-text">
                                        <h4 class="tp-about-author-text-title"> Ruth Erhabor Osarenoma</h4>
                                        <span>CEO</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="tp-about-number mb-30">
                                    <div class="tp-about-number-icon">
                                        <i class="flaticon-phone-call-1" style="color: rgb(77, 74, 74);"></i>
                                    </div>
                                    <div class="tp-about-number-text">
                                        <span style="color: rgb(77, 74, 74);">Free Consutacy</span>
                                        <a href="tel:+2349041381190" style="color: rgb(77, 74, 74);">+2349041381190</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end here -->

    <!-- brand area start here -->
    <div class="brand-area theme-dark-bg pt-100 pb-100">
        <div class="container">
            <div class="brand-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".3s" data-swiper-autoplay="5000">
                        <a href="#"><img src="assets/img/brand/brand-1.png" class="img-fluid" alt="img"></a>
                    </div>
                    <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".6s" data-swiper-autoplay="5000">
                        <a href="#"><img src="assets/img/brand/brand-2.png" class="img-fluid" alt="img"></a>
                    </div>
                    <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".9s" data-swiper-autoplay="5000">
                        <a href="#"><img src="assets/img/brand/brand-3.png" class="img-fluid" alt="img"></a>
                    </div>
                    <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.2s" data-swiper-autoplay="5000">
                        <a href="#"><img src="assets/img/brand/brand-4.png" class="img-fluid" alt="img"></a>
                    </div>
                    <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.5s" data-swiper-autoplay="5000">
                        <a href="#"><img src="assets/img/brand/brand-5.png" class="img-fluid" alt="img"></a>
                    </div>
                    <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.8s" data-swiper-autoplay="5000">
                        <a href="#"><img src="assets/img/brand/brand-1.png" class="img-fluid" alt="img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand area end here -->

    <!-- service area start here -->
    <section class="tp-services-area theme-dark-bg">
        <div class="tp-custom-container">
            <div class="tp-services-bg grey-bg pt-120 pb-90 z-index">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="tp-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-delay=".1s">
                                <h5 class="tp-section-subtitle common-yellow-shape mb-25">Our Popular Services</h5>
                                <h2 class="tp-section-title" style="color: rgb(77, 74, 74);">Some of our key <br>areas of service</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tp-services-icon yellow-circle-shape">
                                     <img src="assets/img/about/washicon (6).png" alt="">
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service.html" style="color: rgb(77, 74, 74);">Buff and Polish</a></h4>
                                    <p class="mb-20" style="color: rgb(77, 74, 74);">Buffing and Polishing the exterior of the vehicle which removes oxidation, dirt, swirls, light surface scratches and other minor imperfections</p>
                                    <div class="tp-services-text-link">
                                        <a href="service.html"><i class="flaticon-enter"></i> Read Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay=".4s">
                                <div class="tp-services-icon yellow-circle-shape">
                                    <i class="flaticon-vacuum-cleaner"></i>
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service.html" style="color: rgb(77, 74, 74);">Interior Vacuum</a></h4>
                                    <p class="mb-20" style="color: rgb(77, 74, 74);">Using high pressure air to remove any trapped debris throughout the inside of the vehicle, in air vents, carpets, seats and those hard-to-get areas</p>
                                    <div class="tp-services-text-link">
                                        <a href="service.html"><i class="flaticon-enter"></i> Read Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay=".6s">
                                <div class="tp-services-icon yellow-circle-shape">
                                    <img src="assets/img/about/washicon (10).png" alt="">
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service.html" style="color: rgb(77, 74, 74);">Stain Removal</a></h4>
                                    <p class="mb-20" style="color: rgb(77, 74, 74);">Paying key attention to all non-permanent stains, stain removal to maintain a smooth, brighter & glossy experience that brings back the car's shine</p>
                                    <div class="tp-services-text-link">
                                        <a href="service.html"><i class="flaticon-enter" style="color: rgb(77, 74, 74);"></i> Read Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay=".8s">
                                <div class="tp-services-icon yellow-circle-shape">
                                    <img src="assets/img/about/washicon (1).png" alt="">
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service.html" style="color: rgb(77, 74, 74);">Dashboard Shine</a></h4>
                                    <p class="mb-20" style="color: rgb(77, 74, 74);">Thoroughly Clean all the door panels, dash, center console, cup holders, vents , door jambs and steering column</p>
                                    <div class="tp-services-text-link">
                                        <a href="service.html"><i class="flaticon-enter" style="color: rgb(77, 74, 74);"></i> Read Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay="1s">
                                <div class="tp-services-icon yellow-circle-shape">
                                    <i class="flaticon-cleaning"></i>
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service.html" style="color: rgb(77, 74, 74);">Engine Wash</a></h4>
                                    <p class="mb-20" style="color: rgb(77, 74, 74);">Degrease the engine and engine bay, after thorough washing</p>
                                    <div class="tp-services-text-link">
                                        <a href="service.html"><i class="flaticon-enter" style="color: rgb(77, 74, 74);"></i> Read Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay="1.2s">
                                <div class="tp-services-icon yellow-circle-shape">
                                   <img src="assets/img/about/washicon (7).png" alt="">
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service.html" style="color: rgb(77, 74, 74);">Rim & Tire Shine</a></h4>
                                    <p class="mb-20" style="color: rgb(77, 74, 74);">Clean & polish wheels to remove loose dirt and brake dust, and also apply tire dressing</p>
                                    <div class="tp-services-text-link">
                                        <a href="service.html"><i class="flaticon-enter"></i> Read Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end here -->

    <!-- Choose area start here -->
    <section class="tp-choose-area position-relative pt-120 pb-90">
        <div class="tp-choose-yellow-bg"></div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-8">
                    <div class="tp-choose z-index">
                        <div class="tp-section-title-wrapper mb-105 wow fadeInUp" data-wow-delay=".2s">
                            <h5 class="tp-section-subtitle common-yellow-shape common-white-shape mb-20" style="color: rgb(77, 74, 74);">Why Choose REO</h5>
                            <h2 class="tp-section-title" style="color: rgb(77, 74, 74);">Expert Car Cleaning Service you Can Trust</h2>
                        </div>
                        <div class="tp-choose-img mb-40 z-index d-block d-xl-none">
                            <img src="assets/img/about/carrr (10).jpg" alt="img not found">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="tp-choose-timeline ml-15 mb-30">
                                    <div class="tp-choose-timeline-single mb-55 pl-35 wow fadeInUp" data-wow-delay=".4s">
                                        <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service.html">Every Customer <br>is Special</a></h4>
                                        <p style="color: rgb(77, 74, 74);">We treat every REO customer like a family</p>
                                    </div>
                                    <div class="tp-choose-timeline-single mb-55 pl-35 wow fadeInUp" data-wow-delay=".6s">
                                        <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service.html">Customer Support <br>Live Chat</a></h4>
                                        <p style="color: rgb(77, 74, 74);">Our representative is available 24/7 to hear your needs</p>
                                    </div>
                                    <div class="tp-choose-timeline-single pl-35 wow fadeInUp" data-wow-delay=".8s">
                                        <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service.html">Enjoy Discounts <br>in Fees</a></h4>
                                        <p style="color: rgb(77, 74, 74);">We offer huge discounts to a first timer REO member</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="tp-choose-timeline ml-15 mb-30">
                                    <div class="tp-choose-timeline-single mb-55 pl-35 wow fadeInUp" data-wow-delay="1s">
                                        <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service.html">Book Appointment <br>in online</a></h4>
                                        <p style="color: rgb(77, 74, 74);">You can book us down, and we'll come to your location when required</p>
                                    </div>
                                    <div class="tp-choose-timeline-single mb-55 pl-35 wow fadeInUp" data-wow-delay="1.2s">
                                        <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service.html">Information for Any <br>Services</a></h4>
                                        <p style="color: rgb(77, 74, 74);">We also offer free consultancy to our REO family for other cleaning services</p>
                                    </div>
                                    <div class="tp-choose-timeline-single pl-35 wow fadeInUp" data-wow-delay="1.4s">
                                        <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service.html">We Give 24/7 <br>Support</a></h4>
                                        <p style="color: rgb(77, 74, 74);">Our REO family is our top priority</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <img src="assets/img/about/car (7).jpg" alt=""> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-12">
                    <div class="tp-choose-img mb-30 z-index d-none d-xl-block wow fadeInUp" data-wow-delay=".6s">
                        <img src="assets/img/slider/breadcrumb-bg-1.jpg" alt="img not found">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose area end here -->

    <!-- fact area start here -->
    <section class="tp-fact-area theme-dark-bg pt-75 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-fact mb-50 text-center wow fadeInUp" data-wow-delay=".2s">
                        <div class="tp-fact-icon mb-40">
                            <img src="assets/img/icon/fact-bg.png" class="img-fluid" alt="img not found">
                            <i class="flaticon-shuttle"></i>
                        </div>
                        <div class="tp-fact-text">
                            <h2 class="tp-fact-text-title white-color mb-20">2025</h2>
                            <h5 class="tp-fact-text-subtitle white-color">Project Completed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-fact mb-50 text-center wow fadeInUp" data-wow-delay=".4s">
                        <div class="tp-fact-icon mb-40">
                            <img src="assets/img/icon/fact-bg.png" class="img-fluid" alt="img not found">
                            <i class="flaticon-broom"></i>
                        </div>
                        <div class="tp-fact-text">
                            <h2 class="tp-fact-text-title white-color mb-20">3050</h2>
                            <h5 class="tp-fact-text-subtitle white-color">Dedicated Cleaner</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-fact mb-50 text-center wow fadeInUp" data-wow-delay=".6s">
                        <div class="tp-fact-icon mb-40">
                            <img src="assets/img/icon/fact-bg.png" class="img-fluid" alt="img not found">
                            <i class="flaticon-selection"></i>
                        </div>
                        <div class="tp-fact-text">
                            <h2 class="tp-fact-text-title white-color mb-20">8205</h2>
                            <h5 class="tp-fact-text-subtitle white-color">Satisfied Customer</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-fact mb-50 text-center wow fadeInUp" data-wow-delay=".8s">
                        <div class="tp-fact-icon mb-40">
                            <img src="assets/img/icon/fact-bg.png" class="img-fluid" alt="img not found">
                            <i class="flaticon-badge"></i>
                        </div>
                        <div class="tp-fact-text">
                            <h2 class="tp-fact-text-title white-color mb-20">1232</h2>
                            <h5 class="tp-fact-text-subtitle white-color">International Awards</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fact area end here -->

    <!-- pricing area start here -->
    <section class="tp-pricing-area pt-120 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="tp-section-subtitle common-yellow-shape mb-20 heading-color-black" >Our Affordable Packages</h5>
                        <h2 class="tp-section-title heading-color-black"><span style="text-decoration: underline;">Special Pricing Packages</span> <br><span style="color: rgb(197, 15, 15);">No Hidden Charges</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="tp-pricing tp-pricings bg-gray-light text-center wow flipInY" data-wow-delay=".2s">
                        <div class="tp-pricing-icon mb-40">
                            <div class="tp-pricing-icon-inner">
                                <i class="flaticon-mop"></i>
                            </div>
                        </div>
                        <div class="tp-pricing-rate">
                            <div class="tp-pricing-rate-inner text-center">
                                <h4 class="tp-pricing-rate-subtitle mb-30">Routine Wash</h4>
                                <h2 class="tp-pricing-rate-title mb-45"><span>₦</span>10,000</h2>
                                <p>Lagos Island, Ikeja Lagos</p>
                            </div>
                        </div>
                        <div class="tp-pricing-list mb-45">
                            <ul>
                                <li><i class="fas fa-check"></i> Interior Vacuum</li>
                                <li><i class="fas fa-check"></i> Boot Vacuum</li>
                                <li><i class="fas fa-check"></i> Exterior Wash</li>
                                <li><i class="fas fa-check"></i> Dashboard Shine</li>
                                <li><i class="fas fa-check"></i> Rim & Tire Shine</li>
                            </ul>
                        </div>
                        <div class="tp-pricing-btn">
                            <form action="{{ route('page.checkout') }}" method="get">
                                <input type="hidden" name="plan_name" value="routine">
                                <button type="submit" class="theme-btn"><i class="flaticon-enter"></i> Get Service</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="tp-pricing tp-pricings bg-gray-light text-center wow flipInY" data-wow-delay=".2s">
                        <div class="tp-pricing-icon mb-40">
                            <div class="tp-pricing-icon-inner">
                                <i class="flaticon-cleaning-1"></i>
                            </div>
                        </div>
                        <div class="tp-pricing-rate">
                            <div class="tp-pricing-rate-inner text-center">
                                <h4 class="tp-pricing-rate-subtitle mb-30">Premium Detailing</h4>
                                <h2 class="tp-pricing-rate-title mb-45"><span>₦</span>15,000</h2>
                                <p>Across Lagos Island and Mainland</p>
                            </div>
                        </div>
                        <div class="tp-pricing-list mb-45">
                            <ul>
                                 <li><i class="fas fa-check"></i> Interior Vacuum</li>
                                <li><i class="fas fa-check"></i> Boot Vacuum</li>
                                <li><i class="fas fa-check"></i> Stain Removal</li>
                                <li><i class="fas fa-check"></i> Exterior Wash + Snow Foam + Grease Leather & Fabric Deep Clean</li>
                                <li><i class="fas fa-check"></i> Engine Wash</li>
                                <li><i class="fas fa-check"></i> Dashboard Shine</li>
                                <li><i class="fas fa-check"></i> Rim & Tire Shine</li>
                            </ul>
                        </div>
                        <div class="tp-pricing-btn">
                            <form action="{{ route('page.checkout') }}" method="get">
                                <input type="hidden" name="plan_name" value="premium">
                                <button type="submit" class="theme-btn active"><i class="flaticon-enter"></i> Get Service</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="tp-pricing tp-pricings bg-gray-light text-center wow flipInY" data-wow-delay=".2s">
                        <div class="tp-pricing-icon mb-40">
                            <div class="tp-pricing-icon-inner">
                                <i class="flaticon-vacuum-cleaner-1"></i>
                            </div>
                        </div>
                        <div class="tp-pricing-rate">
                            <div class="tp-pricing-rate-inner text-center">
                                <h4 class="tp-pricing-rate-subtitle mb-30">Executive Detailing</h4>
                                <h2 class="tp-pricing-rate-title mb-45"><span>₦</span>20,000</h2>
                                 <p>Lagos Island, Ikeja Lagos</p>
                            </div>
                        </div>
                        <div class="tp-pricing-list mb-45">
                            <ul>
                                 <li><i class="fas fa-check"></i> Interior Vacuum</li>
                                <li><i class="fas fa-check"></i> Boot Vacuum</li>
                                <li><i class="fas fa-check"></i> Stain Removal</li>
                                <li><i class="fas fa-check"></i> Exterior Wash + Snow Foam + Grease Leather & Fabric Deep Clean</li>
                                <li><i class="fas fa-check"></i> Door Jamb Cleaning</li>
                                <li><i class="fas fa-check"></i> Dashboard Shine</li>
                                <li><i class="fas fa-check"></i> Rim & Tire Shine</li>
                            </ul>
                        </div>
                        <div class="tp-pricing-btn">
                            <form action="{{ route('page.checkout') }}" method="get">
                                <input type="hidden" name="plan_name" value="executive">
                                <button type="submit" class="theme-btn"><i class="flaticon-enter"></i> Get Service</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing area end here -->

    <!-- testimonial area start here -->
    <section class="tp-testimonial-area position-relative">
        <div class="container">
            <div class="tp-testimonial-bg white-bg z-index">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="tp-testimonial-img">
                            <img src="assets/img/about/carr (1).jpg" alt="img bot found">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="tp-testimonial ml-70">
                            <div class="section-title-wrapper">
                                <h5 class="tp-section-subtitle common-yellow-shape mb-20" style="color: rgb(77, 74, 74);">Customer Statement</h5>
                                <h2 class="tp-section-title mb-20" style="color: rgb(77, 74, 74);">Our Client Feedback</h2>
                            </div>
                            <div class="tp-testimonial-active swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="tp-testimonial-single swiper-slide z-index">
                                        <p class="mb-45" style="color: rgb(77, 74, 74);">It is my third time working with REO and i can say they offer the best cleaning service you can find around. NO excuses, they just deliver. You should try them out</p>
                                        <div class="tp-testimonial-author">
                                            <div class="tp-testimonial-author-img">
                                                <img src="assets/img/about/testimonial (1).jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-testimonial-author-text">
                                                <h4 class="tp-testimonial-author-text-name">James Simon</h4>
                                                <span class="tp-testimonial-author-text-designation">Chief Web Developer</span>
                                            </div>
                                        </div>
                                        <div class="tp-testimonial-qoute">
                                            <img src="assets/img/icon/test-qoute.png" alt="img not found">
                                        </div>
                                    </div>
                                    <div class="tp-testimonial-single swiper-slide z-index">
                                        <p class="mb-45" style="color: rgb(77, 74, 74);">REO made it go away with just one wash. They use some safe chemicals and modern technologies for their wash. That's rare around</p>
                                        <div class="tp-testimonial-author">
                                            <div class="tp-testimonial-author-img">
                                                <img src="assets/img/about/testimonial (2).jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-testimonial-author-text">
                                                <h4 class="tp-testimonial-author-text-name">Bosede Jessica</h4>
                                                <span class="tp-testimonial-author-text-designation">Chief Marketing Manager</span>
                                            </div>
                                        </div>
                                        <div class="tp-testimonial-qoute">
                                            <img src="assets/img/icon/test-qoute.png" alt="img not found">
                                        </div>
                                    </div>
                                    <div class="tp-testimonial-single swiper-slide z-index">
                                        <p class="mb-45" style="color: rgb(77, 74, 74);">REO has made life easy for me. i am usually tied with work in the Office. So triving to a car wash has always been an issue, then a friend introduced me to REO. All i needed to do was to book an appointment with date & they came down to my location to wash my car. Isn't that marvelous.</p>
                                        <div class="tp-testimonial-author">
                                            <div class="tp-testimonial-author-img">
                                                <img src="assets/img/about/testimonial (3).jpg" class="img-fluid" alt="img not found">
                                            </div>
                                            <div class="tp-testimonial-author-text">
                                                <h4 class="tp-testimonial-author-text-name">Tonya Richard</h4>
                                                <span class="tp-testimonial-author-text-designation">Chief Marketing Officer</span>
                                            </div>
                                        </div>
                                        <div class="tp-testimonial-qoute">
                                            <img src="assets/img/icon/test-qoute.png" alt="img not found">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="tp-testimonial-slider-arrow">
                    <div class="testimonial-button-next slide-next"><i class="far fa-chevron-right"></i></div>
                    <div class="testimonial-button-prev slide-prev"><i class="far fa-chevron-left"></i></div>
                </div>
            </div>
        </div>
        <div class="tp-testimonial-shape"></div>
    </section>
    <!-- testimonial area end here -->

    <!-- project area start here -->
    <section class="tp-project-area white-bg position-relative">
        <div class="tp-project-shape"></div>
        <div class="tp-project-wrapper grey-bg pt-120 wow fadeInUp" data-wow-delay=".2s">
            <div class="section-title-wrapper text-center mb-55 grey-bg">
                <h5 class="tp-section-subtitle common-yellow-shape mb-20" style="color: rgb(77, 74, 74);">Some Completed Project</h5>
                <h2 class="tp-section-title mb-20">Every Project is Different <br>Every Client special</h2>
            </div>
            <div class="tp-project-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="tp-project z-index swiper-slide mb-30 wow fadeInUp" data-wow-delay=".4s">
                        <div class="tp-project-img">
                            <img src="assets/img/about/car (3).jpg" class="img-fluid" alt="img not found">
                        </div>
                        <div class="tp-project-text">
                            <div class="tp-project-text-content">
                                <span class="tp-project-subtitle">Car Cleaning Service</span>
                                <h4 class="tp-project-title"><a href="project-details.html">Extra Tires</a></h4>
                            </div>
                            <div class="tp-project-text-icon">
                                <a href="project-details.html"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-project z-index swiper-slide mb-30 wow fadeInUp" data-wow-delay=".6s">
                        <div class="tp-project-img">
                            <img src="assets/img/about/car (7).jpg" class="img-fluid" alt="img not found">
                        </div>
                        <div class="tp-project-text">
                            <div class="tp-project-text-content">
                                <span class="tp-project-subtitle">Car Cleaning Service</span>
                                <h4 class="tp-project-title"><a href="project-details.html">Dashboard</a></h4>
                            </div>
                            <div class="tp-project-text-icon">
                                <a href="project-details.html"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-project z-index swiper-slide mb-30 wow fadeInUp" data-wow-delay=".8s">
                        <div class="tp-project-img">
                            <img src="assets/img/about/carr (9).jpg" class="img-fluid" alt="img not found">
                        </div>
                        <div class="tp-project-text">
                            <div class="tp-project-text-content">
                                <span class="tp-project-subtitle">Car Cleaning Service</span>
                                <h4 class="tp-project-title"><a href="project-details.html">Interior</a></h4>
                            </div>
                            <div class="tp-project-text-icon">
                                <a href="project-details.html"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-project z-index swiper-slide mb-30 wow fadeInUp" data-wow-delay="1s">
                        <div class="tp-project-img">
                            <img src="assets/img/about/car (1).jpg" class="img-fluid" alt="img not found">
                        </div>
                        <div class="tp-project-text">
                            <div class="tp-project-text-content">
                                <span class="tp-project-subtitle">Car Cleaning Service</span>
                                <h4 class="tp-project-title"><a href="project-details.html">Exterior</a></h4>
                            </div>
                            <div class="tp-project-text-icon">
                                <a href="project-details.html"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-project z-index swiper-slide mb-30 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="tp-project-img">
                            <img src="assets/img/about/car (2).jpg" class="img-fluid" alt="img not found">
                        </div>
                        <div class="tp-project-text">
                            <div class="tp-project-text-content">
                                <span class="tp-project-subtitle">Car Cleaning Service</span>
                                <h4 class="tp-project-title"><a href="project-details.html">Tires</a></h4>
                            </div>
                            <div class="tp-project-text-icon">
                                <a href="project-details.html"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project area end here -->

    <!-- progress area start here -->
    <section class="tp-progress-area pt-90">
        <div class="tp-progress-area-inner position-relative pt-25">
            <div class="tp-progress-shape">
                <img src="assets/img/project/progress-bg.jpg" alt="img not found">
            </div>
            <div class="container z-index">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-progress-img pt-75 mb-30">
                            <img src="assets/img/about/smile.jpg" alt="img not found">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-progress-text mb-30">
                            <div class="section-title-wrapper">
                                <h5 class="tp-section-subtitle common-yellow-shape mb-25">Our work Experience</h5>
                                <h2 class="tp-section-title mb-25">A happy client is <br>our top most priority</h2>
                            </div>
                            <p class="mb-40">A REO family member is a happy person. The grin simply doesn't go away. Our goal is simply to provide our customers with the friendliest environment and also to make life easy for them. Join REO today and share this experience </p>
                            <div class="tp-skill--content">
                                <div class="tp-skill__wrapper mb-45">
                                    <div class="tp-skill--title__wrapper">
                                        <h5 class="tp-skill--title">Repair Quality</h5>
                                        <span style="left:90%">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s" role="progressbar" style="width: 90%; visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: slideInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span></span></div>
                                    </div>
                                </div>
                                <div class="tp-skill__wrapper mb-45">
                                    <div class="tp-skill--title__wrapper">
                                        <h5 class="tp-skill--title">Happy Customer</h5>
                                        <span style="left:80%">80%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s" role="progressbar" style="width: 80%; visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: slideInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span></span></div>
                                    </div>
                                </div>
                                <div class="tp-skill__wrapper">
                                    <div class="tp-skill--title__wrapper">
                                        <h5 class="tp-skill--title">Support Centre</h5>
                                        <span style="left:90%">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s" role="progressbar" style="width: 90%; visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: slideInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- progress area end here -->

    <!-- blog area start here -->
    <section class="tp-blog-area pt-90 pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="tp-section-subtitle common-yellow-shape mb-20">Some Recent Jobs</h5>
                        <h2 class="tp-section-title mb-25">Our track record<br>is there to see</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="tp-blog mb-30 wow fadeInUp" data-wow-delay=".4s">
                        <div class="tp-blog-img mb-25">
                            <a href="#"><img src="assets/img/about/carrr (14).jpg" class="img-fluid" alt="img not found"></a>
                            <span class="tp-blog-badge">REO Cleaning</span>
                        </div>
                        <div class="tp-blog-text">
                            <div class="tp-blog-meta mb-10">
                                <ul>
                                    <!-- <li><a href="blog-details.html">// By Jhon Cardo</a></li> -->
                                    <li><a href="#">Jun 02 - 2023</a></li>
                                </ul>
                            </div>
                            <h4 class="tp-blog-title mb-20"><a href="#">we strive to demonstrate complete concern for all details of cleaning your vehicle</a></h4>
                            <div class="tp-blog-link">
                                <a href="#"></i> VICTORIAL IRELAND</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-blog mb-30 wow fadeInUp" data-wow-delay=".6s">
                        <div class="tp-blog-img mb-25">
                            <a href="#"><img src="assets/img/about/carrr (15).jpg" class="img-fluid" alt="img not found"></a>
                            <span class="tp-blog-badge">REO Cleaning</span>
                        </div>
                        <div class="tp-blog-text">
                            <div class="tp-blog-meta mb-10">
                                <ul>
                                    <!-- <li><a href="blog-details.html">// By Jhon Cardo</a></li> -->
                                    <li><a href="#">// Jan 04 - 2023</a></li>
                                </ul>
                            </div>
                            <h4 class="tp-blog-title mb-20"><a href="#">Our crew is dedicated to serving you 100%</a></h4>
                            <div class="tp-blog-link">
                                <a href="#"></i> LEKKI PHASE 1</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-blog mb-30 wow fadeInUp" data-wow-delay=".8s">
                        <div class="tp-blog-img mb-25">
                            <a href="#"><img src="assets/img/about/carrr (3).jpg" class="img-fluid" alt="img not found"></a>
                            <span class="tp-blog-badge">REO Cleaning</span>
                        </div>
                        <div class="tp-blog-text">
                            <div class="tp-blog-meta mb-10">
                                <ul>
                                    <!-- <li><a href="blog-details.html">// By Jhon Cardo</a></li> -->
                                    <li>Feb 04 <script>document.write(new Date().getFullYear());</script></li>
                                </ul>
                            </div>
                            <h4 class="tp-blog-title mb-20"><a href="#">From the car washing agents to vacuuming</a></h4>
                            <div class="tp-blog-link">
                                <a href="#"></i> IKEJA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end here -->

</main>
@endsection
