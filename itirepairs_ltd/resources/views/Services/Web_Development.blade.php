@extends('template')
@section('content')

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3" style="background-image: url('{{ asset('images/breadcrumbs/3.jpg')}}');">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Web Development</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="index.html">Home</a>
                </li>
                <li title="Go To Services">
                    <a class="active" href="index.html">Services</a>
                </li>
                <li>Web Development</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Services Single Start -->
    <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 md-mb-50">
                    <div class="services-img">
                        <img src="{{ asset('images/services/single/1.jpg') }}" alt="">
                    </div>
                    <h2 class="mt-34">CCTV And Video Surveillance Systems</h2>
                    <p>
                    Surveillance systems are an essential part of securing your home or business. 
                    These systems can range from wireless home security cameras to sophisticated 
                    alarm systems that notify law enforcement at the first sign of trouble. 
                    The presence of security cameras can serve as a deterrent to would-be thieves, while hidden cameras can protect discretely.
                    </p>

                    <p>
                    Whether you want to keep an eye on employees at nearby facilities or document 
                    every person approaching your home's front door, the right equipment for the job can offer the necessary protection.
                    </p>
                    <h3>Installation & Maintenance</h3>
                    <ul class="listing-style">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>We provide bespoke installation packages for our customers.</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Both IP and Analogue HD CCTV Systems are installed which protect your premises with 24/7 recording.</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>High quality cameras are used and most of them carry up to a 3 year manufacturer's warranty*. 
                                  Our systems are from leading manufacturers such as HikVision, etc. </span>
                        </li>
                    </ul>
                    <h3>Cabelings</h3>
                    <ul class="listing-style">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>We use CAT6 or Coax-Cables for CCTV Installations.</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>NVRs/ DVRs are capable of minimum H265 or H265+ compression so that customers can have double the length of recordings in their hard drives.</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Leading standards such as POE or POC installations are performed by experienced installers.</span>
                        </li>
                    </ul>
                    <h3>Remote Viewings</h3>
                    <ul class="listing-style">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>As a part of the installation, we provide a one year free Dynamic DNS service worth £25/Year</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>All our cameras feature night vision.(minimum 20m IR)</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>We set up remote viewing on your mobile device or PC to view live and/or playbacks of the recordings.</span>
                        </li>
                    </ul>
                    <div class="row mb-80">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                            <img class="bdru-4" src="{{ asset('images/services/single/2.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <img class="bdru-4" src="{{ asset('images/services/single/3.jpg') }}" alt="">
                        </div>
                    </div>
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
                    <div class="services-add mb-50 mt-50" style="background-image: url('{{ asset('images/services/single/contact-phone.jpg')}}');">
                        <div class="address-item mb-35">
                            <div class="address-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <h2 class="title">Have any Questions? <br> Call us Today!</h2>
                        <div class="contact">
                            <a href="tel:123222-8888">(123) 222-8888</a>
                        </div>
                    </div>
                    <div class="brochures">
                        <h3>Brochures</h3>
                        <p>
                            Cras enim urna, interdum nec por ttitor vitae, sollicitudin eu erosen. Praesent eget mollis
                            nulla sollicitudin.
                        </p>
                        <div class="pdf-btn">
                            <a class="readon learn-more pdf" href="contact.html">Download Now<i class="fa fa-file-pdf-o"></i></a>
                        </div>
                    </div>
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