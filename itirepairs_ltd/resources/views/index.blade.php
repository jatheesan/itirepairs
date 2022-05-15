<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itirepairs</title>
    <link rel="shortcut icon" href="{{ asset('images/itislide-5.png')}}">

    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/flaticon.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/off-canvas.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rsmenu-main.css') }}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <!-- cookie css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cookie-style1.css') }}">
</head>
<body class="defult-home">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container"></div>
        </div>
        <!--Preloader area End here--> 
     
		<!-- Main content Start -->
        <div class="main-content">
            
            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header style2">
                    <!-- Topbar Area Start -->
                    <div class="topbar-area style2">
                       <div class="container">
                           <div class="row y-middle">
                               <div class="col-lg-7">
                                   <ul class="topbar-contact">
                                        <li>
                                           <i class="flaticon-email"></i>
                                           <a href="mailto:info@ITiRepairs.co.uk">info@ITiRepairs.co.uk</a>
                                        </li>
                                        <li>
                                           <i class="flaticon-call"></i>
                                           <a href="tel:07889 121 609"> 07889 121 609</a>
                                        </li>
                                        <li>
                                           <i class="flaticon-location"></i>
                                           302 High Street North
                                           EastHam
                                           E12 6SA
                                        </li>
                                   </ul>
                               </div>
                               <div class="col-lg-5 text-right">
                                   <div class="toolbar-sl-share">
                                       <ul>
                                            <li class="opening"> <em><i class="flaticon-clock"></i> 11AM - 3:30PM everyday(except Tuesdays)</em> </li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                    <!-- Topbar Area End -->
                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="logo-part">
                                        <a href="{{ url('/') }}" class="mobile-logo"><img class="headerlogo" src="{{ asset('images/itislide-3.png') }}" alt="itirepaire"></a>
                                    </div>
                                    <div class="mobile-menu">
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close secondary">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-right">                                    
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <nav class="rs-menu pr-100 lg-pr-50 md-pr-0">
                                               <ul class="nav-menu">
                                                    <li>
                                                        <a href="{{ url('/') }}">Home</a>
                                                    </li>
                                                    <li class="menu-item-has-children current-menu-item">
                                                       <a href="#">Services</a>
                                                       <ul class="sub-menu">
                                                        <li><a href="{{ url('/network-infrastucture') }}">IT Facility Management</a></li>
                                                        <li><a href="{{ url('/security-system') }}">Security System Installation</a></li>
                                                        <li><a href="{{ url('/digital-display') }}">Digital Display and Advertisement Screens</a></li>
                                                        <li><a href="{{ url('/speech-system') }}">Speech Transfer System</a></li>
                                                        <li><a href="{{ url('/wifi-solution') }}">Commercial WiFi Solutions and Access control</a></li>
                                                        <li><a href="{{ url('/web-development') }}">Web Development</a></li>
                                                       </ul>
                                                    </li>
                                                    <li>
                                                       <a href="{{ url('/about') }}">About</a>
                                                    </li>
                                                    <li>
                                                      <a href="{{ url('/contact') }}">Contact</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/gallery') }}">Gallery</a>
                                                    </li>
                                               </ul> <!-- //.nav-menu -->
                                            </nav>                                        
                                        </div> <!-- //.main-menu -->
                                        <div class="expand-btn-inner search-icon hidden-md">
                                            <ul>
                                                <li class="sidebarmenu-search">
                                                    <a class="hidden-xs rs-search pr-0" data-target=".search-modal" data-toggle="modal" href="#">
                                                        <i class="flaticon-search"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End --> 
                </header>
                <!--Header End-->
            </div>
            <!--Full width header End-->
         
            <!-- Slider Section Start -->
            <div class="rs-slider style1">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                    <div class="slider-content slide1" style="background-image: url('{{ asset('images/slider/slider-1-1.jpg')}}');">
                        <div class="container">
                            <div class="content-part text-center">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Enabling The Success of</div>
                                <h1 class="sl-title mb-mb-10 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Your Business</h1>
                                <div class="sl-desc wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                by Taking Care of Your IT Needs
                                </div>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                                    <a class="readon learn-more slider-btn" href="{{ url('/about') }}">Get in touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-content slide2" style="background-image: url('{{ asset('images/slider/slider-2.jpg')}}');">
                        <div class="container">
                            <div class="content-part text-center">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">We Increase Your</div>
                                <h1 class="sl-title mb-mb-10 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Business Success</h1>
                                <div class="sl-desc fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    Using modern technogoly and IT Services
                                </div>
                                <ul class="slider-btn wow fadeInRight" data-wow-delay="200ms" data-wow-duration="3000ms">
                                    <li><a class="readon learn-more slider-btn" href="{{ url('/contact') }}">Free Consultation</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Section End -->

            <!-- Services Section Start -->
            <div class="rs-services main-home style1 pt-100 md-pt-0">
                <div class="container">
                    <div class="row pb-35 pl-25 pr-25 md-pl-0 md-pr-0">
                        <div class="col-lg-4 col-md-6 md-mb-10">
                            <div class="services-item">
                                <div class="services-icon">
                                   <div class="image-part">
                                       <img src="{{ asset('images/services/style1/4.png') }}" alt="itirepaire"> 
                                   </div>
                                </div>
                                <div class="services-content">
                                    <div class="services-text">
                                       <h3 class="services-title"><a href="{{ url('/network-infrastucture') }}">IT Facility Management</a></h3>
                                    </div>
                                    <div class="services-desc">
                                        <p><strong>CAT6 cabling & Fibre cabling</strong></p>
                                        <p><strong>Instead of Rack Cabinet & Service Management</strong>-</p>
                                       <p>Router Setup/VLANS and Firewalls</p>
                                       <p>LAN management, server & NAS setup</p>
                                       <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-10">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="{{ asset('images/services/style1/10.png') }}" alt="itirepaire">  
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="{{ url('/security-system') }}">Security System Installation</a></h3>
                                   </div>
                                   <div class="services-desc">
                                        <p>
                                           <strong>Commercial Security System & Domestic Security System</strong>
                                       </p>
                                       <p>
                                           <strong>Hikvision</strong> - [ANPR, Thermal imaging & temperature monitoring, ColorVU]
                                       </p>
                                       <p>
                                           <strong>Axis</strong> - [CCTV, Thermal imaging cameras, video management & analytics, IP audio & access control systems]
                                       </p>
                                   </div>
                               </div>
                           </div> 
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-10">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="{{ asset('images/services/style1/9.png') }}" alt="itirepaire">  
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="{{ url('/digital-display') }}">Digital Display and Advertisement Screens</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                         LED Display modules,
                                       </p>
                                       <p>samsung and LG commercial TV installation and services</p>
                                       <br>
                                       <br>
                                   </div>
                               </div>
                           </div> 
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-10">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="{{ asset('images/services/style1/3.png') }}" alt="itirepaire"> 
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="{{ url('/wifi-solution') }}">Commercial WiFi Solutions and Access control</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                          Cisco Meraki, Aruba and Ubiquity networks Wifi solutions
                                       </p>
                                       <br>
                                   </div>
                               </div>
                           </div> 
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-10">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="{{ asset('images/services/style1/5.png') }}" alt="itirepaire"> 
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="{{ url('/speech-system') }}">Speech Transfer System</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                          Contacta and Amptronics Windows Intercom
                                       </p>
                                       <br>
                                       <br>
                                   </div>
                               </div>
                           </div> 
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-10">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="{{ asset('images/services/style1/2.png') }}" alt="itirepaire"> 
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="{{ url('/web-development') }}">Web Development and Hosting</a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
                                        Laravel, PHP, Pyton with LEMP, LAMP or AWS, Domains and Hosting Packages, Personal Emails,Payment Gateways
                                       </p>
                                   </div>
                               </div>
                           </div> 
                        </div>
                    </div>
                </div>
                <!-- <div class="shape-part d-none d-sm-block">
                    <div class="left-side">
                        <img src="{{ asset('images/services/shape-2.png') }}" alt="itirepaire"> 
                    </div>
                    <div class="right-side">
                        <img src="{{ asset('images/services/shape-3.png') }}" alt="itirepaire"> 
                    </div>
                </div> -->
            </div>
            <!-- Services Section End -->

            <!-- why choose us Start -->
              <div class="rs-process modify1 pt-160 pb-120 md-pt-75 md-pb-80">
                  <div class="shape-animation">
                      <div class="shape-process">
                          <img class="dance2" src="{{ asset('images/process/circle.png') }}" alt="itirepaire" width="60%">
                      </div>
                  </div>
                  <div class="container">
                      <div class="row align-items-center">
                          <!-- <div class="col-lg-4 pr-40 md-pr-15 md-pb-80">
                              <div class="process-wrap md-center">
                                  <div class="sec-title mb-30">
                                      <h2 class="title white-color uppercase">
                                      5 reasons why you should choose ITIrepairs
                                      </h2>
                                  </div>
                                  <div class="btn-part mt-40">
                                      <a class="readon started" href="#">Contact Us</a>
                                  </div>
                              </div>
                          </div> -->
                          <div class="col-lg-12 sm-pl-40 sm-pr-20">
                              <div class="row">
                                <div class="col-md-4 mb-70" style="display: flex; align-items: center; justify-content: center;">
                                    <div class="process-wrap md-center">
                                        <div class="sec-title mt-30">
                                            <h3 class="title white-color uppercase">
                                            5 reasons why you should choose ITIrepairs
                                            </h3>
                                        </div>
                                        <div class="sec-title mb-30" style="margin-top: -20px;">
                                            <div class="sub-text style2"></div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4 mb-70">
                                      <div class="rs-addon-number">
                                          <div class="number-text">
                                              <div class="number-area">
                                                  1
                                              </div>
                                              <div class="number-title">
                                                  <h3 class="title">Expert CCTV Advisors</h3>
                                              </div>
                                              <p class="number-txt">  Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor theo lacus egestas.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-70">
                                      <div class="rs-addon-number">
                                          <div class="number-text">
                                              <div class="number-area green-bg">
                                                  2
                                              </div>
                                              <div class="number-title">
                                                  <h3 class="title">Attention to Detail</h3>
                                              </div>
                                              <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor theo lacus egestas.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-70">
                                      <div class="rs-addon-number">
                                          <div class="number-text">
                                              <div class="number-area plum-bg">
                                                  3
                                              </div>
                                              <div class="number-title">
                                                  <h3 class="title">Highly Qualified Engineers</h3>
                                              </div>
                                              <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor theo lacus egestas.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-70">
                                      <div class="rs-addon-number">
                                          <div class="number-text">
                                              <div class="number-area pink-bg">
                                                  4
                                              </div>
                                              <div class="number-title">
                                                  <h3 class="title">No Compromise on Quality</h3>
                                              </div>
                                              <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor theo lacus egestas.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="rs-addon-number">
                                          <div class="number-text">
                                              <div class="number-area orange-bg">
                                                  5
                                              </div>
                                              <div class="number-title">
                                                  <h3 class="title">Unrivalled Customer Care</h3>
                                              </div>
                                              <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor theo lacus egestas.</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            <!-- why choose us End -->

            <!-- our relations Start -->
            <div class="rs-services style4 modify1 services3 mt-30">
                <div class="container">
                   <div class="sec-title2 text-center mb-45 md-mb-30 pl-40 pr-40 md-pl-25 md-pr-25 sm-pl-0 sm-pr-0">
                       <!-- <span class="sub-text white-color">Project</span> -->
                    <h2 class="title txt-blue">
                        MOST COMPANIES HAVE CLIENTS WE HAVE RELATIONSHIPS!
                    </h2>
                    <div class="sec-title mb-30" style="margin-left: 47%; margin-top: -20px;">
                        <div class="sub-text style2"></div>
                    </div>
                    <div class="row box md-pl-0 md-pr-0 mt-80">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-6 sm-p-10">
                            <div class="relation-box">
                                <div class="partner-item">
                                    <div class="logo-img">
                                        <a href="https://www.costcutter.co.uk/">
                                            <!-- <img class="hover-logo" src="{{ asset('images/partners/1.png') }}" alt="itirepaire"> -->
                                            <img class="main-logo" src="{{ asset('images/partners/1.png') }}" title="Costcutter" alt="itirepaire">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-6 sm-p-10">
                            <div class="relation-box">
                                <div class="partner-item">
                                    <div class="logo-img">
                                        <a href="https://www.bp.com/">
                                            <!-- <img class="hover-logo" src="{{ asset('images/partners/2.png') }}" alt="itirepaire"> -->
                                            <img class="main-logo" src="{{ asset('images/partners/2.png') }}" title="British Petroleum" alt="itirepaire">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-6 sm-p-10">
                            <div class="relation-box">
                                <div class="partner-item">
                                    <div class="logo-img">
                                        <a href="https://texaco.co.uk/">
                                            <!-- <img class="hover-logo" src="{{ asset('images/partners/3.png') }}" alt="itirepaire"> -->
                                            <img class="main-logo" src="{{ asset('images/partners/3.png') }}" title="Texaco" alt="itirepaire">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-6 sm-p-10">
                            <div class="relation-box">
                                <div class="partner-item">
                                    <div class="logo-img">
                                        <a href="https://www.esso.co.uk/en-gb/">
                                            <!-- <img class="hover-logo" src="{{ asset('images/partners/4.png') }}" alt="itirepaire"> -->
                                            <img class="main-logo" src="{{ asset('images/partners/4.png') }}" title="Esso" alt="itirepaire">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-6 sm-p-10">
                            <div class="relation-box">
                                <div class="partner-item">
                                    <div class="logo-img">
                                        <a href="https://www.shell.co.uk/">
                                            <!-- <img class="hover-logo" src="{{ asset('images/partners/5.png') }}" alt="itirepaire"> -->
                                            <img class="main-logo" src="{{ asset('images/partners/5.png') }}" title="Shell" alt="itirepaire">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-6 sm-p-10">
                            <div class="relation-box">
                                <div class="partner-item">
                                    <div class="logo-img">
                                        <a href="https://www.thesouthernco-operative.co.uk/">
                                            <!-- <img class="hover-logo" src="{{ asset('images/partners/6.png') }}" alt="itirepaire"> -->
                                            <img class="main-logo" src="{{ asset('images/partners/6.png') }}" title="Southernco-operative" alt="itirepaire">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-6 sm-p-10">
                            <div class="relation-box">
                                <div class="partner-item">
                                    <div class="logo-img">
                                        <a href="https://www.londis.co.uk/">
                                            <!-- <img class="hover-logo" src="{{ asset('images/partners/7.png') }}" alt="itirepaire"> -->
                                            <img class="main-logo" src="{{ asset('images/partners/7.png') }}" title="Londis" alt="itirepaire">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-6 sm-p-10">
                            <div class="relation-box">
                                <div class="partner-item">
                                    <div class="logo-img">
                                        <a href="https://www.nisalocally.co.uk/">
                                            <!-- <img class="hover-logo" src="{{ asset('images/partners/8.png') }}" alt="itirepaire"> -->
                                            <img class="main-logo" src="{{ asset('images/partners/8.png') }}" title="Nisa locally" alt="itirepaire">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
            <!-- our relations End -->
            
            <!-- Call Us Section Start -->
            <div class="rs-call-us bg1 pt-120 md-pt-80" style="background-image: url('{{ asset('images/bg/testimonial-bg.png')}}');">                
                <div class="container">
                    <div class="row rs-vertical-middle">
                        <div class="col-lg-6">
                            <div class="image-part">
                              <img src="{{ asset('images/call-us/contact-here.png') }}" alt="itirepaire">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rs-contact-box text-center">
                                <div class="address-item mb-25">
                                    <div class="address-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="sec-title3">
                                    <span class="sub-text">CALL US</span>
                                    <h2 class="title">07889 121 609</h2>
                                    <p class="desc">Have any idea or project for in your mind call us or schedule a appointment. Our representative will reply you shortly.</p>
                                </div>
                                <div class="btn-part mt-40 md-mb-60">
                                    <a class="readon lets-talk" href="{{ url('/contact') }}">Let's Talk</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div>
            <!-- Call Us Section Start -->

            <!-- Counter Section Start -->
            <!-- <div class="rs-counter main-counter-home">
                 <div class="counter-top-area text-center bg2" style="background-image: url('{{ asset('images/bg/counter-bg.png')}}');">
                     <div class="row">
                         <div class="col-lg-4 md-mb-40">
                             <div class="counter-list">
                                 <div class="counter-text">
                                     <div class="count-number">
                                         <span class="rs-count k">80</span>
                                     </div>
                                     <h3 class="title">Happy Clients</h3>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 md-mb-40">
                             <div class="counter-list">
                                 <div class="counter-text">
                                     <div class="count-number">
                                         <span class="rs-count plus">50</span>
                                     </div>
                                     <h3 class="title">Companies</h3>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4">
                             <div class="counter-list">
                                 <div class="counter-text">
                                     <div class="count-number">
                                         <span class="rs-count plus">230</span>
                                     </div>
                                     <h3 class="title">Projects Done</h3>
                                 </div>
                             </div>
                         </div>
                     </div> 
                 </div>
            </div> -->
            <!-- Counter Section End -->

            <!-- Partner Start -->
            <div class="rs-partner pt-20 pb-20">
                <div class="container">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" 
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" 
                    data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" 
                    data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" 
                    data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" 
                    data-ipad-device2="3" data-ipad-device-nav2="false" data-ipad-device-dots2="false" 
                    data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="partner-item" style="text-align: center;">
                            <div class="logo-img">
                                <a href="http://itirepairs.co.uk/">
                                    <img class="hover-logo" src="{{ asset('images/brands/1.png') }}" alt="">
                                    <img class="main-logo" src="{{ asset('images/brands/1.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item" style="text-align: center;">
                            <div class="logo-img">
                                <a href="http://itirepairs.co.uk/">
                                    <img class="hover-logo" src="{{ asset('images/brands/2.png') }}" alt="">
                                    <img class="main-logo" src="{{ asset('images/brands/2.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item" style="text-align: center;">
                            <div class="logo-img">
                                <a href="http://itirepairs.co.uk/">
                                    <img class="hover-logo" src="{{ asset('images/brands/3.png') }}" alt="">
                                    <img class="main-logo" src="{{ asset('images/brands/3.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item" style="text-align: center;">
                            <div class="logo-img">
                                <a href="http://itirepairs.co.uk/">
                                    <img class="hover-logo" src="{{ asset('images/brands/4.png') }}" alt="">
                                    <img class="main-logo" src="{{ asset('images/brands/4.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item" style="text-align: center;">
                            <div class="logo-img">
                                <a href="http://itirepairs.co.uk/">
                                    <img class="hover-logo" src="{{ asset('images/brands/5.1.png') }}" alt="">
                                    <img class="main-logo" src="{{ asset('images/brands/5.1.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item" style="text-align: center;">
                            <div class="logo-img">
                                <a href="http://itirepairs.co.uk/">
                                    <img class="hover-logo" src="{{ asset('images/brands/6.png') }}" alt="">
                                    <img class="main-logo" src="{{ asset('images/brands/6.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner End -->

        </div> 
        <!-- Main content End -->
     
        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer" style="background-image: url('{{ asset('images/bg/footer-bg.png')}}');">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="index-2.html"><img src="{{ asset('images/itislide-3.png') }}" alt="itirepaire"></a>
                            </div>
                              <div class="textwidget pb-30"><p>We help free up your time, money and valuable resources, allowing you to focus on taking your business to the next level of efficiency and strategic value.</p>
                              </div>
                              <ul class="footer-social md-mb-30">  
                                  <li> 
                                      <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a> 
                                  </li>
                                  <li> 
                                      <a href="# " target="_blank"><span><i class="fa fa-twitter"></i></span></a> 
                                  </li>

                                  <li> 
                                      <a href="# " target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a> 
                                  </li>
                                  <li> 
                                      <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a> 
                                  </li>
                                                                           
                              </ul>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 pl-45 md-pl-15 md-mb-30">
                            <h3 class="widget-title">Our Services</h3>
                            <ul class="site-map">
                            <li><a href="{{ url('/network-infrastucture') }}">IT Facility Management</a></li>
                            <li><a href="{{ url('/security-system') }}">Security System Installation</a></li>
                            <li><a href="{{ url('/digital-display') }}">Digital Display and Advertisement Screens</a></li>
                            <li><a href="{{ url('/speech-system') }}">Speech Transfer System</a></li>
                            <li><a href="{{ url('/wifi-solution') }}">Commercial WiFi Solutions and Access control</a></li>
                            <li><a href="{{ url('/web-development') }}">Web Development</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                            <h3 class="widget-title">Contact Info</h3>
                            <ul class="address-widget">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">
                                        302 High Street North,
                                        EastHam.
                                        E12 6SA
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                       <a href="tel:07889 121 609">07889 121 609</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:info@ITiRepairs.co.uk">info@ITiRepairs.co.uk</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-clock-1"></i>
                                    <div class="desc">
                                        Opening Hours: 11AM - 3:30PM everyday(except Tuesdays)   
                                    </div>
                                </li>
                            </ul>
                            <!-- <p>
                                <input type="email" name="EMAIL" placeholder="Your email address" required="">
                                <em class="paper-plane"><input type="submit" value="Sign up"></em>
                                <i class="flaticon-send"></i>
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-6 text-right md-mb-10 order-last">
                            <ul class="copy-right-menu">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about') }}">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p>&copy; 2022 All Rights Reserved. Developed By <a href="http://itirepairs.co.uk/">ITIrepairs</a></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- start cookie consent model -->
        <div class="cookie-consent-model">
            <div class="content">
                <img src="{{ asset('images/cookie2.png')}}" alt="itirepaire">
                <h3>Allow Cookies</h3>
                <p>This website use cookies to ensure you get the best experience on our site</p>
                <div class="btns">
                    <button class="btn btn-secondary cancel">Cancel</button>
                    <button class="btn accept">Accept</button>
                </div>
            </div>
        </div>
        <!-- End cookie consent model -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->
    
        <!-- modernizr js -->
        <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Menu js -->
        <script src="{{ asset('js/rsmenu-main.js') }}"></script> 
        <!-- op nav js -->
        <script src="{{ asset('js/jquery.nav.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!-- Skill bar js -->
        <script src="{{ asset('js/skill.bars.jquery.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script> 
        <!-- counter top js -->
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <!-- swiper js -->
        <script src="{{ asset('js/swiper.min.js') }}"></script>   
        <!-- particles js -->
        <script src="{{ asset('js/particles.min.js') }}"></script>  
        <!-- magnific popup js -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>      
        <!-- plugins js -->
        <script src="{{ asset('js/plugins.js') }}"></script>
        <!-- pointer js -->
        <script src="{{ asset('js/pointer.js') }}"></script>
        <!-- contact form js -->
        <script src="{{ asset('js/contact.form.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('js/main.js') }}"></script>
        <!-- cookie js -->
        <script src="{{ asset('js/cookie-style1.js') }}"></script>
</body>
</html>