@extends('template')
@section('content')
    <!-- About Section Start -->
    <div class="rs-about pt-10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style2"><a class="active" href="{{ url('/') }}">Home</a><span> / </span><a class="active" href="{{ url('/') }}"> Services</a><span> / Display Screens</span></div>
                            <h2 class="title pb-10">
                                Digital Display and Advertisement Screens
                            </h2>
                            <div class="pb-15 li-bold">
                                Over 10 years working in Networking Installation services.
                            </div>
                            <p class="margin-0 pb-15 li-bold">
                                By combining the use of technology, insights, creativity and analytical expertise, 
                                we gives you the ultimate brand experience in the digital space with 
                                indoor and outdoor screens placed in more than 200+ prime locations.
                            </p>
                            <p class="margin-0 li-bold">
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
                    <img src="{{ asset('images/s-screen/screen1.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5 zero-padding">
                    <h3 class="txt-blue">Outdoor LED advertising screens</h3>
                    <img src="{{ asset('images/s-screen/screen1.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>Captivate the moving audience with dynamic and targeted advertisingcampaigns on the largest location based outdoor digital display network in London.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We provide a customized screen installation based on the specific site conditions  and customer requirements.</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 px-5 py-5 zero-padding">
                    <h3 class="txt-blue">Indoor LED Advertising Screens</h3>
                    <img src="{{ asset('images/s-screen/screen3.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>Our Indoor Mediums guarantee to transmit your brand message to the righttarget audience.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We are able to design, install a advertising screen which will suit your business needs.</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-5 d-none d-lg-block">
                    <img src="{{ asset('images/s-screen/screen3.jpg')}}" class="mx-auto d-block image-3da" alt="itirepaire">
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="{{ asset('images/s-screen/screen2.jpg')}}" class="mx-auto d-block image-3db" alt="itirepaire">
                </div>
                <div class="col-lg-6 px-5 zero-padding">
                    <h3 class="txt-blue">LED Video Wall</h3>
                    <img src="{{ asset('images/s-screen/screen2.jpg')}}" class="d-lg-none image-3db" alt="itirepaire">
                    <ul class="listing-style li-bold">
                        <li>
                            <span><i class="fa fa-check-circle"></i>We provide customers with comprehensive assembly and installation.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>We provide a customized installation based on the specific site conditions  and customer requirements.</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check-circle"></i>Our excellent digital wall screen installation services team provides installing and fitting services for retails, schools, corporate offices, construction project offices, and care homes. </span>
                        </li>
                    </ul>
                </div>
                <div><hr/></div>
            </div>
        </div>
    </div>
    <!-- Services Single End -->

    <!-- card -->
    <section class="dark">
	<div class="container py-4">
		<h1 class="h1 text-center" id="pageHeaderTitle">My Cards Dark</h1>

		<article class="postcard dark blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="#">Podcast Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play blue">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard dark red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />	
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="#">Podcast Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play red">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard dark green">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="#">Podcast Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play green">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="#">Podcast Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play yellow">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
	</div>
</section>

<section class="light">
	<div class="container py-2">
		<div class="h1 text-center text-dark" id="pageHeaderTitle">My Cards Light</div>

        <article class="postcard light blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />	
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title red"><a href="#">Podcast Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play red">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard light red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title blue"><a href="#">Podcast Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum , illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play blue">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard light green">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title green"><a href="#">Podcast Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play green">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard light yellow">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title yellow"><a href="#">Podcast Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play yellow">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
	</div>
</section>
    <!-- end card -->

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