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
                <div class="col-lg-6 px-5 pb-30 md-pb-0 xs-30 zero-padding">
                    <h3 class="line txt-blue">Indoor/Outdoor WiFi</h3>
                    <img src="{{ asset('images/s-wifi/wifi2.jpg')}}" class="d-lg-none img-show image-3db" alt="itirepaire">
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
                <div class="col-lg-6 px-5 pt-30 md-pt-40 sm-pt-30 zero-padding">
                    <h3 class="line txt-blue">Business WiFi Solutions</h3>
                    <img src="{{ asset('images/s-wifi/wifi4.jpg')}}" class="d-lg-none img-show image-3da" alt="itirepaire">
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
                <div class="col-lg-6 px-5 pt-30 md-pt-40 sm-pt-30 zero-padding">
                    <h3 class="line txt-blue">Wireless Network Installation</h3>
                    <img src="{{ asset('images/s-wifi/wifi3.jpg')}}" class="d-lg-none img-show image-3db" alt="itirepaire">
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