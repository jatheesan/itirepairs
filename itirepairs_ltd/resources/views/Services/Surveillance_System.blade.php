@extends('template')
@section('content')
    <!-- About Section Start -->
    <div class="rs-about pt-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style2"><a class="active" href="{{ url('/') }}">Home</a><span> / </span><a class="active" href="{{ url('/') }}"> Services</a><span> / Surveillance System</span></div>
                            <h2 class="title pb-10">
                                Surveillance System Installation
                            </h2>
                            <div class="pb-15 li-bold">
                                Over 25 years working in Surveillance System Installation services.
                            </div>
                            <p class="margin-0 pb-15 li-bold">
                                Surveillance systems are an essential part of securing your home or business. 
                                These systems can range from wireless home security cameras to sophisticated 
                                alarm systems that notify law enforcement at the first sign of trouble. 
                                The presence of security cameras can serve as a deterrent to would-be thieves, while hidden cameras can protect discretely.
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
    <div class="rs-services-single pt-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="{{ asset('images/s-cctv/cctvcam1.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5 zero-padding">
                    <h3>Installation & Maintenance</h3>
                    <img src="{{ asset('images/s-cctv/cctvcam1.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>We specialise in creating bespoke solutions to suit for our customers.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>Both IP and Analogue HD CCTV Systems are installed which protect your premises with 24/7 recording.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>
                                High quality cameras are used and most of them carry up to a 3 year manufacturer's warranty*. 
                                Our systems are from leading manufacturers such as <span style="color:red;">HikVision</span>, <span style="color:red;">Axis</span>, etc.
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 px-5 zero-padding">
                    <h3>Cabelings</h3>
                    <img src="{{ asset('images/s-cctv/cctvcam3.jpg')}}" class="d-lg-none image-3da" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>We use CAT6 or Coax-Cables for CCTV Installations.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>NVRs/ DVRs are capable of minimum H265 or H265+ compression so that customers can have double the length of recordings in their hard drives.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>Leading standards such as POE or POC installations are performed by experienced installers.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>Wireless security cameras are becoming popular, those may need less wiring in the walls but will still require cables to power the security camera separately</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 d-none d-lg-block">
                    <img src="{{ asset('images/s-cctv/cctvcam3.jpg')}}" class="mx-auto d-block image-3da" alt="itirepaire">
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="{{ asset('images/s-cctv/cctv2.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5 zero-padding">
                    <h3>Remote Viewings</h3>
                    <img src="{{ asset('images/s-cctv/cctv2.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>As a part of the installation, we provide a one year free Dynamic DNS service worth £25/Year.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>All our cameras feature night vision.(minimum 20m IR)</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We set up remote viewing on your mobile device or PC to view live and/or playbacks of the recordings. </span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 px-5 zero-padding">
                    <h3>Thermal Imaging & Temperature Monitoring</h3>
                    <img src="{{ asset('images/s-cctv/thermal1.jpg')}}" class="d-lg-none image-3da" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>Thermal imaging systems generally have been shown to accurately measure someone’s surface skin temperature without being physically close to the person being evaluated.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>The person who handles the system should follow all manufacturer instructions to make sure the system is set up properly and located where it can measure surface skin temperature accurately.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>The person who handles the system should be trained to properly prepare both the location where the system will be used, and the person being evaluated.</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 d-none d-lg-block">
                    <img src="{{ asset('images/s-cctv/thermal1.jpg')}}" class="mx-auto d-block image-3da" alt="itirepaire">
                </div>
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
                        <li><a class="active" href="{{ url('/surveillance-system') }}">Surveillance System Installation</a></li>
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
                            <a class="readon learn-more" href="{{ url('/contact') }}">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta section end -->
@endsection