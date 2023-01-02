<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itirepairs</title>
    <link rel="shortcut icon" href="{{ asset('images/itislide-5.png')}}">

    <!-- Bootstrap v5.1.3 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/flaticon.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rsmenu-main.css') }}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <!-- gallery css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gallery.css') }}">
    <!-- cookie css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cookiestyle.css') }}">
    
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/service-card.css') }}"> -->
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
                <header id="rs-header" class="rs-header">
                    <!-- Topbar Area Start -->
                    <div class="topbar-area">
                        <div class="container">
                            <div class="row rs-vertical-middle">
                                <div class="col-lg-2">
                                    <div class="logo-part">
                                        <a href="{{ url('/') }}"><img class="headerlogo" src="{{ asset('images/itislide-3.png') }}" alt="itirepaire"></a>
                                    </div>
                                </div>
                                <div class="col-lg-10 text-right">
                                    <ul class="rs-contact-info">
                                        <li class="contact-part">
                                            <i class="flaticon-location"></i>
                                            <span class="contact-info">
                                                <span>Address</span>
                                                302 High Street North,
                                                EastHam.
                                                E12 6SA
                                            </span>
                                        </li>
                                        <li class="contact-part">
                                            <i class="flaticon-email"></i>
                                            <span class="contact-info">
                                                <span>E-mail</span>
                                                <a href="mailto:info@ITiRepairs.co.uk"> info@ITiRepairs.co.uk</a>
                                            </span>
                                        </li>
                                        <li class="contact-part no-border">
                                             <i class="flaticon-call"></i>
                                            <span class="contact-info">
                                                <span>Phone</span>
                                                07889 121 609
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Topbar Area End -->

                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="logo-area">
                                <a href="{{ url('/') }}">
                                    <img class="sticky-logo" class="headerlogo" src="{{ asset('images/itislide-3.png') }}" alt="itirepaire" style="padding-bottom: 5px;">
                                </a>
                            </div>
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a href="{{ url('/') }}" class="mobile-logo">
                                            <img class="headerlogo" src="{{ asset('images/itislide-6.png') }}" alt="itirepaire">
                                        </a>
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu">
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
                            </div>
                            <div class="expand-btn-inner search-icon hidden-sticky hidden-md">
                                <!-- <ul>
                                    <li class="sidebarmenu-search">
                                        <a class="hidden-xs rs-search pr-0" data-target=".search-modal" data-toggle="modal" href="#">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul> -->
                                <div class="toolbar-sl-share">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End -->
                </header>
                <!--Header End-->
            </div>
            <!--Full width header End-->

            <!--Page content Start-->
            <section>
                <div>
                    @yield('content')
                </div>
            </section>
            <!--Page content End-->

        </div> 
        <!-- Main content End -->
     
        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer" style="background-image: url('{{ asset('images/bg/footer-bg.png')}}');">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-widget">
                            <div class="footer-logo mb-30 md-mb-10">
                                <a href="{{ url('/') }}"><img src="{{ asset('images/itislide-3.png') }}" alt="itirepaire"></a>
                            </div>
                              <div class="textwidget pb-30 md-pb-10"><p align="justify">ITi Repairs© Ltd is located on the High Street in East Ham, a popular town situated in East London. Our customers are from all over England.</p>
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
                        <div class="col-lg-5 col-md-6 col-sm-12 pl-45 md-pl-15 md-mb-20">
                            <h3 class="widget-title header-bottom">Our Services</h3>
                            <ul class="site-map">
                                <li><a href="{{ url('/network-infrastucture') }}">IT Facility Management</a></li>
                                <li><a href="{{ url('/speech-system') }}">Speech Transfer System</a></li>
                                <li><a href="{{ url('/security-system') }}">Security System Installation</a></li>
                                <li><a href="{{ url('/web-development') }}">Web Development & Hosting</a></li>
                                <li><a href="{{ url('/digital-display') }}">Digital Display & Advertisement Screens</a></li>
                                <li><a href="{{ url('/wifi-solution') }}">Commercial WiFi Solutions & Access control</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 md-mb-20">
                            <h3 class="widget-title header-bottom">Contact Info</h3>
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
                        <!-- <div class="col-lg-6 text-right md-mb-10 order-last">
                            <ul class="copy-right-menu">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about') }}">About</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                            </ul>
                        </div> -->
                        <div class="col-lg-12 text-center">
                            <div class="copyright">
                                <p>&copy; <script>document.write(new Date().getFullYear())</script> All Rights Reserved. Developed By <a style="color: #106eea;" href="http://itirepairs.co.uk/">ITIrepairs</a></p>
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
                <div class="para">
                    <img src="{{ asset('images/cookie2.png')}}" alt="itirepaire">
                    <p>This website use cookies to ensure you get the best experience on our site</p>
                </div>
                <div class="btns">
                    <button class="btn cancel borleft">Cancel</button>
                    <button class="btn accept borright">Accept</button>
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
        <!-- Bootstrap v5.1.3 js -->
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <!-- Menu js -->
        <script src="{{ asset('js/rsmenu-main.js') }}"></script> 
        <!-- op nav js -->
        <script src="{{ asset('js/jquery.nav.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!-- contact form js -->
        <script src="{{ asset('js/contact.form.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('js/main.js') }}"></script>
        <!-- cookie js -->
        <script src="{{ asset('js/cookiestyle.js') }}"></script>
        </body>

</html>