@extends('layouts.app')

@section('content')
<main>
    <!-- service area start here -->
    <section class="tp-services-area theme-dark-bg">
        <div class="tp-custom-container">
            <div class="tp-services-bg grey-bg pt-120 pb-90 z-index">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="tp-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-delay=".1s">
                                <h2 class="tp-section-title" style="color: rgb(77, 74, 74);">Request could not be Placed!</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay=".2s">
                                <div class="tp-services-icon yellow-circle-shape">
                                     <img src="assets/img/about/washicon (6).png" alt="">
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service.html" style="color: rgb(77, 74, 74);">New Request</a></h4>
                                    <p class="mb-20" style="color: rgb(77, 74, 74);">Your request could not be placed, please restart the process or contact the support team now!</p>
                                    <div class="tp-services-text-link">
                                        <a href="{{ url('/') }}"><i class="flaticon-enter"></i> Home</a>
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
</main>
@endsection
