@extends('template')
@section('content')
    <!-- About Section Start -->
    <div class="rs-about pt-10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style2"><a class="active" href="{{ url('/') }}">Home</a><span> / </span><a class="active" href="{{ url('/') }}"> Services</a><span> / WiFi Solutions</span></div>
                            <h2 class="title pb-10">
                                Commercial WiFi Solutions and Access control
                            </h2>
                            <div class="pb-10 li-bold">
                                Over 25 years working in Networking Installation services.
                            </div>
                            <p class="margin-0 pb-15 li-bold">
                                Many organizations today need a reliable Internet connection to conduct their business, 
                                and most choose to use a company Wi-Fi network. A fast, reliable connection can help your business remain productive. 
                                we use a tried-and-true process to assist organizations with setting up the fastest and most reliable WiFi solution available.
                            </p>
                            <p class="margin-0 li-bold">
                                We install the following types of commercial WiFi solution to all of our clients.
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
                    <img src="{{ asset('images/s-wifi/wifi2.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5 zero-padding">
                    <h3>Indoor/Outdoor WiFi</h3>
                    <img src="{{ asset('images/s-wifi/wifi2.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>If a key portion of your business is conducted outside your business’s location, we can install outdoor wireless connectivity.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We can map the signal and see where the blind spots are. In smaller buildings it is possible to use certain routers to manage access point extensions.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>
                                We make sure these access points are wired separately rather than daisy chain back to the central switch through repeaters. 
                                In larger buildings and multi floor a local controller would be required.
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 px-5 zero-padding">
                    <h3>Business WiFi Solutions</h3>
                    <img src="{{ asset('images/s-wifi/wifi4.jpg')}}" class="d-lg-none image-3da" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>We understand that businesses in certain industries such as hospitality, construction, and warehousing have specific needs concerning WiFi.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>If your organization belongs to any of these industries, we can provide flexible WiFi solutions that help it meet its goals.</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 d-none d-lg-block">
                    <img src="{{ asset('images/s-wifi/wifi4.jpg')}}" class="mx-auto d-block image-3da" alt="itirepaire">
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="{{ asset('images/s-wifi/wifi3.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5 zero-padding">
                    <h3>Wireless Network Installation</h3>
                    <img src="{{ asset('images/s-wifi/wifi3.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>Whatever your requirements we can advise on your WiFi network and how we can integrate it with your existing infrastructure.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We can help your organization stay connected by providing switching and routing installation. </span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>
                                High quality Wifi routers and switches are used. 
                                Our systems are from leading manufacturers such as <span style="color:red;">Cisco Meraki</span>, <span style="color:red;">Aruba</span> and <span style="color:red;">Ubiquity</span>.
                            </span>
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
                        <li><a href="{{ url('/network-infrastucture') }}">Network Infrastucture and Installation</a></li>
                        <li><a href="{{ url('/surveillance-system') }}">Surveillance System Installation</a></li>
                        <li><a href="{{ url('/digital-display') }}">Digital Display and Advertisement Screens</a></li>
                        <li><a href="{{ url('/speech-system') }}">Speech Transfer System</a></li>
                        <li><a class="active" href="{{ url('/wifi-solution') }}">Commercial WiFi Solutions and Access control</a></li>
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