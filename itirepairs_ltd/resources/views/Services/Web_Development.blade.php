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
                <div class="col-lg-6 px-5 pt-4 zero-padding">
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
                <div class="col-lg-6 py-5 px-5 pt-4 zero-padding">
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
                <div class="col-lg-6 px-5 pt-4 zero-padding">
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
                <div class="col-lg-6 py-5 px-5 pt-4" style="margin-top: 50px; line-height: 50px;">
                <img src="{{ asset('images/s-web/host4.jpg')}}" class="d-lg-none image-3da" alt="itirepaire">
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
                <div><hr/></div>
            </div>
        </div>
    </div>
    <!-- Services Single End -->


    <!-- Services Single Start -->
    <div class="rs-services-single pt-20 pb-20 md-pt-10 md-pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 md-mb-50">
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
                <div class="col-lg-4 pl-32 md-pl-15">
                    <ul class="services-list">
                        <li><a href="{{ url('/network-infrastucture') }}">Network Infrastucture and Installation</a></li>
                        <li><a href="{{ url('/surveillance-system') }}">Surveillance System Installation</a></li>
                        <li><a href="{{ url('/digital-display') }}">Digital Display and Advertisement Screens</a></li>
                        <li><a href="{{ url('/speech-system') }}">Speech Transfer System</a></li>
                        <li><a href="{{ url('/wifi-solution') }}">Commercial WiFi Solutions and Access control</a></li>
                        <li><a class="active" href="{{ url('/web-development') }}">Web Development</a></li>
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
                            <a class="readon learn-more" href="{{ url('/contact') }}">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta section end -->
@endsection