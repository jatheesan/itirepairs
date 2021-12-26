@extends('template')
@section('content')

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1" style="background-image: url('{{ asset('images/breadcrumbs/1.jpg')}}');">
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

    <!-- About Section Start -->
    <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 md-mb-30">
                    <div class="rs-animation-shape">
                        <div class="images">
                            <img src="{{ asset('images/about/about-3.png') }}" alt="">
                        </div>
                        <div class="middle-image2">
                            <img class="dance3" src="{{ asset('images/about/effect-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-60 md-pl-15">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style-bg">About Us</div>
                            <h2 class="title pb-38">
                                We Are Increasing Business Success With Technology
                            </h2>
                            <div class="desc pb-35">
                                Over 25 years working in IT services developing software applications and mobile apps
                                for clients all over the world.
                            </div>
                            <p class="margin-0 pb-15">
                                We denounce with righteous indignation and dislike men who are so beguiled and
                                demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to
                                those who fail in their duty through weakness of will, which is the same as saying.
                            </p>
                        </div>
                        <div class="btn-part">
                            <a class="readon learn-more" href="contact.html">Learn-More</a>
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