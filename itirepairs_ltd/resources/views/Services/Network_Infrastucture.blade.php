@extends('template')
@section('content')
    <!-- About Section Start -->
    <div class="rs-about pt-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style2"><a class="active" href="{{ url('/') }}">Home</a><span> / </span><a class="active" href="{{ url('/') }}"> Services</a><span> / Network Infrastucture</span></div>
                            <h2 class="title pb-38">
                                Network Infrastucture and Installation
                            </h2>
                            <div class="pb-15 li-bold">
                                Over 25 years working in Networking Installation services.
                            </div>
                            <p class="margin-0 pb-15 li-bold">
                                We provide specialist networking services that include, structured network cabling, 
                                data cabling, voice cabling, wireless networking, fibre optics systems and in building 
                                cellular cell phone boosters. We are pleased to say that our many years of providing hands 
                                on experience in these field has enabled us to deliver a consistent level of quality and service to all of our clients.
                            </p>
                            <p class="margin-0 pb-15 li-bold">
                                We offer the following services to all of our clients.
                            </p>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Services Single Start -->
    <div class="rs-services-single pt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('images/s-network/fiber3.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5">
                    <h3>Cat6 and Cat7 Cabling</h3>
                    <ul class="listing-style li-bold">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>We are able to design, install a unique cabling system which will suit your business needs.</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Cat7 cable and Cat6 cable are going to be two of the more common types your internet service provider offers.</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>We provide a customized cableing installation based on the specific site conditions  and customer requirements.</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 px-5">
                    <h3>Fiber Optic Networking</h3>
                    <ul class="listing-style li-bold">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>We Providing the flexibility, control and upgradability of a long-haul fibre network.</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Our fiber optic network facilitates the internet connection your business needs to remain competitive in your market.</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>To connect everyone and everything with Gigabit speeds. IP67,IP68 water and dust protection</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>IP67,IP68 cable connection and water and dust protection</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5">
                    <img src="{{ asset('images/s-network/cable2.jpg')}}" class="mx-auto d-block image-3da" alt="itirepaire">
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/s-network/rack4.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5">
                    <h3>Rack Cabinet Installation</h3>
                    <ul class="listing-style li-bold">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>We provide customers with comprehensive assembly and installation of server cabinets.</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>We provide a customized installation based on the specific site conditions  and customer requirements.</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Customers can be guaranteed proper assembly and installation based on the project design, ensuring that the product warranty will be honored. </span>
                        </li>
                    </ul>
                </div>
                <div><hr/></div>
            </div>
        </div>
    </div>
    <!-- Services Single End -->

    <!-- Services Single Start -->
    <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 md-mb-50">
                    <div class="services-img">
                        <img src="{{ asset('images/services/single/1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 pl-32 md-pl-15">
                    <ul class="services-list">
                        <li><a class="active" href="{{ url('/network-infrastucture') }}">Network Infrastucture and Installation</a></li>
                        <li><a href="{{ url('/surveillance-system') }}">Surveillance System Installation</a></li>
                        <li><a href="{{ url('/digital-display') }}">Digital Display and Advertisement Screens</a></li>
                        <li><a href="{{ url('/speech-system') }}">Speech Transfer System</a></li>
                        <li><a href="{{ url('/wifi-solution') }}">Commercial WiFi Solutions and Access control</a></li>
                        <li><a href="{{ url('/web-development') }}">Web Development</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Single End -->

    <!-- Cta section start -->
    <div class="rs-cta style1 bg7 pt-80 pb-80" style="background-image: url('{{ asset('images/bg/cta-bg.jpg')}}');">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-12 md-mb-30">
                        <span>Plan to Start a Project</span>
                        <div class="title-wrap">
                            <h2 class="epx-title">Our Experts Ready to Help You</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-12">
                        <div class="button-wrap">
                            <a class="readon learn-more" href="contact.html">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta section end -->
@endsection