@extends('template')
@section('content')

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs d-none d-md-block" style="background-image: url('{{ asset('images/breadcrumbs/1.jpg')}}');">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">About</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>About</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Breadcrumbs Start -->
    <div class="d-md-none text-center gray-color">
            <h2 class="pt-5 hm">About</h2>
            <ul>
                <li class="hm">
                    <a class="active" href="index.html"><u>Home</u> / </a>About
                </li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 md-mb-30">
                    <div class="rs-animation-shape">
                        <div class="images">
                            <img src="{{ asset('images/about/about-3.png') }}" alt="">
                        </div>
                        <div class="middle-image2">
                            <img class="dance3" src="{{ asset('images/about/effect-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-60 md-pl-15">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style-bg">About Us</div>
                            <h2 class="title pb-38">
                                We Are Increasing Business Success With Technology
                            </h2>
                            <div class="desc pb-35">
                            ITi Repairs© Ltd is located on the High Street in East Ham, a popular town situated in East London. 
                            Our customers are from all over England, allowing us to gradually expand our business through the word 
                            of mouth and through the recommendations from our valued customers. Our dedicated and experienced staff 
                            will restore your laptop or desktop to optimal condition, as it deserves a second chance. With a multi-facility 
                            lab and an in-house workshop, we ensure that your repair work is completed smoothly and efficiently. 
                            </div>
                            <p class="margin-0 pb-15">
                            Additionally, ITi Repairs© Ltd offers an excellent level of services for our customers other than computer repairs. 
                            We also install CCTV systems, set up remote surveillance systems, and provide bespoke web design as well as small business networking.
                            Our new wing of educational services provides a hands-on experience for students in electronic design and simulation software. 
                            We request students to register for a hands-on session for Raspberry Pi designs/developments and programming*. 
                            </p>
                            <p class="atext">
                            *Some of these services require tutor guided classes which may be chargeable.
                            </p>
                        </div>
                        <div class="btn-part">
                            <a class="readon learn-more" href="{{ url('/contact') }}">Learn-More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-image">
                <img class="top dance" src="{{ asset('images/about/dotted-3.png') }}" alt="">
            </div>
        </div>
    </div>
    <!-- About Section End -->
@endsection