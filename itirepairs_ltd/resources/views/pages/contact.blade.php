@extends('template')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3" style="background-image: url('{{ asset('images/breadcrumbs/3.jpg')}}');">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Contact</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="rs-contact pt-120 md-pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 md-mb-60">
                    <div class="contact-box">
                        <div class="sec-title mb-45">
                            <span class="sub-text new-text white-color">Let's Talk</span>
                            <h2 class="title white-color">Speak With Expert Engineers.</h2>
                        </div>
                        <div class="address-box mb-25">
                            <div class="address-icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="address-text">
                                <span class="label">Email:</span>
                                <a href="mailto:info@ITiRepairs.co.uk">info@ITiRepairs.co.uk</a>
                            </div>
                        </div>
                        <div class="address-box mb-25">
                            <div class="address-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="address-text">
                                <span class="label">Phone:</span>
                                <a href="#">07889 121 609</a>
                            </div>
                        </div>
                        <div class="address-box">
                            <div class="address-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="address-text">
                                <span class="label">Address:</span>
                                <div class="desc">302 High Street North, EastHam. E12 6SA</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl-70 md-pl-15">
                    <div class="contact-widget">
                        <div class="sec-title2 mb-40">
                            <span class="sub-text contact mb-15">Get In Touch</span>
                            <h2 class="title testi-title">Fill The Form Below</h2>
                        </div>
                        <div id="form-messages">
                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
                            </div>
                            @endif

                            @if($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
                            </div>
                             @endif
                        </div>
                        <form action="{{ url('/sendmail/send') }}" method="post">
                        {{ csrf_field() }}
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-12 mb-30 col-md-12 col-sm-12">
                                        <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                    </div>
                                    <input type="hidden" id="subject" name="subject" value="I need your service" required="">
                                    <div class="col-lg-12 mb-30">
                                        <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <div class="form-group mb-0">
                                        <input class="readon learn-more submit" type="submit" value="Submit Now">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-canvas pt-120 md-pt-80">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4295.5522106969!2d0.04747267675281565!3d51.54184897892906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a64c60b0e545%3A0x94c4e728f6e9644e!2sITI%20Repairs%20Ltd!5e0!3m2!1sen!2slk!4v1640517930088!5m2!1sen!2slk" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <!-- Contact Section Start -->
@endsection