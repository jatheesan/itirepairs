@extends('template')
@section('content')
    <!-- About Section Start -->
    <div class="rs-about pt-10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style2"><a class="active" href="{{ url('/') }}">Home</a><span> / </span><a class="active" href="{{ url('/') }}"> Services</a><span> / Display Screens</span></div>
                            <h2 class="title pb-10">
                                Digital Display and Advertisement Screens
                            </h2>
                            <div class="pb-15 li-bold">
                                Over 10 years working in Networking Installation services.
                            </div>
                            <p class="margin-0 pb-15 li-bold">
                                By combining the use of technology, insights, creativity and analytical expertise, 
                                we gives you the ultimate brand experience in the digital space with 
                                indoor and outdoor screens placed in more than 200+ prime locations.
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
                    <img src="{{ asset('images/s-screen/screen1.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5 zero-padding">
                    <h3 class="txt-blue">Outdoor LED advertising screens</h3>
                    <img src="{{ asset('images/s-screen/screen1.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>Captivate the moving audience with dynamic and targeted advertisingcampaigns on the largest location based outdoor digital display network in London.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We provide a customized screen installation based on the specific site conditions  and customer requirements.</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 px-5 py-5 zero-padding">
                    <h3 class="txt-blue">Indoor LED Advertising Screens</h3>
                    <img src="{{ asset('images/s-screen/screen3.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>Our Indoor Mediums guarantee to transmit your brand message to the righttarget audience.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We are able to design, install a advertising screen which will suit your business needs.</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 d-none d-lg-block">
                    <img src="{{ asset('images/s-screen/screen3.jpg')}}" class="mx-auto d-block image-3da" alt="itirepaire">
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="{{ asset('images/s-screen/screen2.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5 zero-padding">
                    <h3 class="txt-blue">LED Video Wall</h3>
                    <img src="{{ asset('images/s-screen/screen2.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>We provide customers with comprehensive assembly and installation.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We provide a customized installation based on the specific site conditions  and customer requirements.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>Our excellent digital wall screen installation services team provides installing and fitting services for retails, schools, corporate offices, construction project offices, and care homes. </span>
                        </li>
                    </ul>
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