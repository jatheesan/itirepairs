@extends('template')
@section('content')
    <!-- About Section Start -->
    <div class="rs-about pt-10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style2"><a class="active" href="{{ url('/') }}">Home</a><span> / </span><a class="active" href="{{ url('/') }}"> Services</a><span> / Web Development</span></div>
                            <h2 class="title pb-10">
                                Web Development And Hosting
                            </h2>
                            <div class="pb-15 li-bold">
                                Over 25 years working in Web development.
                            </div>
                            <p class="margin-0 pb-10 li-bold">
                            Our expert designers focus on modern web design practices that facilitate the growth of your business.
                            Take a look at what goes behind in creating award winning websites that take
                            your business to the next level.
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
                    <img src="{{ asset('images/s-web/web5.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5 pb-30 md-pb-0 xs-30 zero-padding">
                    <img src="{{ asset('images/s-web/web5.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>we take the time to learn about the objectives you want to achieve.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We research your needs, brand, and corporate identity before deciding on the best strategy for online success.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>our professional website designers will sketch up the fundamental design concepts.</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 px-5 pt-30 md-pt-40 sm-pt-30 zero-padding">
                    <img src="{{ asset('images/s-web/web6.jpg')}}" class="d-lg-none image-3da" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>Our lead web designers will then work on transforming your blueprints into completed design layouts once the basic version has been developed.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>If you are unable to supply specific content, we will complete the layout using dummy content while our content team works on producing top quality content for your website.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>Our web development team will work on building a gorgeous website while focusing on usability and responsive web design.</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 d-none d-lg-block">
                    <img src="{{ asset('images/s-web/web6.jpg')}}" class="mx-auto d-block image-3da" alt="itirepaire">
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="{{ asset('images/s-web/web3.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5 pt-30 md-pt-40 sm-pt-30 zero-padding">
                    <img src="{{ asset('images/s-web/web3.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>After you are completely satisfied with all aspects of your website, our team will set your new website live for the world to see.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We will continue to monitor your site post-launch to ensure all is working as it should be & handover the project to you after the official closure.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>Customers can be guaranteed proper assembly and installation based on the project design, ensuring that the product warranty will be honored. </span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 px-5 pt-80 md-pt-40 sm-pt-30 zero-padding" style="line-height: 40px;">
                <img src="{{ asset('images/s-web/host4.jpg')}}" class="d-lg-none img-show image-3da" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>Laravel, PHP, Pyton with LEMP, LAMP or AWS</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>Domains and Hosting Packages</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>Emails</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>Payment Gateways</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 d-none d-lg-block">
                    <img src="{{ asset('images/s-web/host4.jpg')}}" class="mx-auto d-block image-3da" alt="itirepaire">
                </div>
                <div class="md-pt-10 xs-pt-0"><hr/></div>
            </div>
        </div>
    </div>
    <!-- Services Single End -->


    <!-- Service Carousel Section Start -->
    <div class="rs-why-choose style2 pb-40 md-pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 md-mb-0">
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
                <div class="col-xl-5 col-lg-4 md-mb-30 d-none d-lg-block">
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