@extends('template')
@section('content')
    <!-- About Section Start -->
    <div class="rs-about pt-10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style2"><a class="active" href="{{ url('/') }}">Home</a><span> / </span><a class="active" href="{{ url('/') }}"> Services</a><span> / IT Facility Management</span></div>
                            <h2 class="title pb-10">
                                IT Facility Management
                            </h2>
                            <div class="pb-10 li-bold">
                                Over 25 years working in Networking Installation services.
                            </div>
                            <p class="margin-0 pb-15 li-bold">
                                We provide specialist networking services that include, structured network cabling, 
                                data cabling, voice cabling, wireless networking, fibre optics systems and in building 
                                cellular cell phone boosters. We are pleased to say that our many years of providing hands 
                                on experience in these field has enabled us to deliver a consistent level of quality and service to all of our clients.
                            </p>
                            <p class="margin-0 li-bold">
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
    <div class="rs-services-single pt-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="{{ asset('images/s-network/fiber3.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5 zero-padding">
                    <h3 class="txt-blue">CAT-6 cabling and Fiber cabling</h3>
                    <img src="{{ asset('images/s-network/fiber3.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>We are able to design, install a unique cabling system which will suit your business needs.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>Cat6 cable and fiber optic cable are going to be two of the more common types your internet service provider offers.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We provide a customized cableing installation based on the specific site conditions  and customer requirements.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>Our fiber optic network facilitates the internet connection your business needs to remain competitive in your market.</span>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-lg-6 px-5 py-5 zero-padding">
                    <h3 class="txt-blue">Fiber Optic Networking</h3>
                    <img src="{{ asset('images/s-network/cable2.jpg')}}" class="d-lg-none image-3da" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>Our fiber optic network facilitates the internet connection your business needs to remain competitive in your market.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We Providing the flexibility, control and upgradability of a long-haul fibre network.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>To connect everyone and everything with Gigabit speeds.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>IP67,IP68 cable connection and water and dust protection</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 d-none d-lg-block">
                    <img src="{{ asset('images/s-network/cable2.jpg')}}" class="mx-auto d-block image-3da" alt="itirepaire">
                </div> -->
                <div class="col-lg-6 px-5 py-5 zero-padding">
                    <h3 class="txt-blue">Rack Cabinet & Service Management</h3>
                    <img src="{{ asset('images/s-network/rack4.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>We provide Router Setup, VLANS and Firewalls.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We provide a LAN management, Server and NAS setups</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We provide customers with comprehensive assembly and installation of server cabinets.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>Customers can be guaranteed proper assembly and installation based on the project design, ensuring that the product warranty will be honored. </span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 d-none d-lg-block">
                    <img src="{{ asset('images/s-network/rack4.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div><hr/></div>
            </div>
        </div>
    </div>
    <!-- Services Single End -->

    <!-- Service Carousel Section Start -->
    <div class="rs-why-choose style2 pt-40 pb-40 md-pt-20 md-pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 md-mb-50">
                    @if(count($images) == 0)
                    <div class="services-img">
                        <img src="{{ asset('images/services/single/1.jpg') }}" alt="">
                    </div>
                    @else
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($images as $image)
                                @if($image->is_main == 1)
                                    <div class="carousel-item active">
                                        <img src="{{asset($image->image)}}" class="d-block w-100 caroimage" alt="itirepaire">
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <img src="{{asset($image->image)}}" class="d-block w-100 caroimage" alt="itirepaire">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    @endif
                </div>
                <div class="col-xl-5 col-lg-4 md-mb-30">
                    <div class="rs-contact mod1">
                        <div class="contact-wrap">
                            <div class="content-part mb-25">
                                <h2 class="title mb-15">Speak With Our Experts</h2>
                                <p class="desc">We here to help you 24/7 with experts</p>
                            </div>
                            <div class="services-wrap mb-25">
                                <div class="services-icon">
                                    <img src="{{ asset('images/choose/icons/style2/1.png') }}" alt="">
                                </div>
                                <div class="services-text">
                                    <h5 class="title">Email</h5>
                                    <p class="services-txt"><a href="mailto:info@ITiRepairs.co.uk">info@ITiRepairs.co.uk</a></p>
                                </div>
                            </div>
                            <div class="services-wrap mb-25">
                                <div class="services-icon">
                                    <img src="{{ asset('images/choose/icons/style2/2.png') }}" alt="">
                                </div>
                                <div class="services-text">
                                    <h5 class="title">Call Us</h5>
                                    <p class="services-txt"><a href="#">07889 121 609</a></p>
                                </div>
                            </div>
                            <div class="services-wrap">
                                <div class="services-icon">
                                    <img src="{{ asset('images/choose/icons/style2/3.png') }}" alt="">
                                </div>
                                <div class="services-text">
                                    <h5 class="title">Office Address</h5>
                                    <p class="services-txt"><a href="#">302 High Street North,<span>EastHam. E12 6SA</span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Carousel Section End -->

    <!-- Cta section start -->
    <div class="rs-cta style1 bg7 pt-40 pb-40" style="background-image: url('{{ asset('images/bg/cta-bg.jpg')}}');">
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
                            <a class="readon learn-more" href="{{ url('/contact') }}">Let's Talk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta section end -->
@endsection