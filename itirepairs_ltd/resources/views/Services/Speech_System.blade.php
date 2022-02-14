@extends('template')
@section('content')
    <!-- About Section Start -->
    <div class="rs-about pt-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style2"><a class="active" href="{{ url('/') }}">Home</a><span> / </span><a class="active" href="{{ url('/') }}"> Services</a><span> / Speech Transfer</span></div>
                            <h2 class="title pb-38">
                            Speech Transfer System
                            </h2>
                            <div class="pb-15 li-bold">
                                Over 5 years working in Speech Transfer System Installation services.
                            </div>
                            <p class="margin-0 pb-15 li-bold">
                                A speech transfer system enables you to communicate clearly with customers through a booth, 
                                security screen or across a speech counter. These two-way intercom systems operate using a bridge bar system, 
                                where one person can communicate through a gooseneck microphone to speak with customers on the other side of a speech counter.
                            </p>
                            <p class="margin-0 pb-15 li-bold">
                                We offer the following Speech Transfer System to all of our clients.
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
                    <img src="{{ asset('images/s-speech/speech1.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5">
                    <h3>Contacta</h3>
                    <ul class="listing-style li-bold">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>The Contacta Surface Mount speech transfer system is a two-way intercom specifically designed to enable clear voice communication between customers and staff through glass security screens.</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Conversations and transactions can therefore be conducted efficiently without difficulty or delay, even in noisy environments.</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Easy to use, offers excellent voice reproduction, and enables hands-free operation for both the member of staff and the customer..</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 px-5">
                    <h3>Amptronic Windows Intercom</h3>
                    <ul class="listing-style li-bold">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Enable your workforce to work safely and communicate effectively using window intercoms.</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Intercom window systems ensure seamless communication and at the same time maintain social distancing and general safe working practices.</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5">
                    <img src="{{ asset('images/s-speech/speech2.png')}}" class="mx-auto d-block image-3da" alt="itirepaire">
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
                        <li><a href="{{ url('/network-infrastucture') }}">Network Infrastucture and Installation</a></li>
                        <li><a href="{{ url('/surveillance-system') }}">Surveillance System Installation</a></li>
                        <li><a href="{{ url('/digital-display') }}">Digital Display and Advertisement Screens</a></li>
                        <li><a class="active" href="{{ url('/speech-system') }}">Speech Transfer System</a></li>
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