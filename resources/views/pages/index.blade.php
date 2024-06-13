@extends('layouts.main')

@section('content')
<div role="main" class="main">
	<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-vertical-center dots-align-right dots-orientation-portrait custom-dots-style-1 show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['650px','650px','650px','550px','500px']" style="height: 650px;">
		<div class="owl-stage-outer">
			<div class="owl-stage">

				<!-- Carousel Slide 1 -->
				<div class="owl-item position-relative overlay overlay-show overlay-op-3" style="background-image: url(assets/img/b2.jpg); background-size: cover; background-position: center;">
					<div class="container position-relative z-index-3 h-100">
						<div class="row align-items-center h-100">
							<div class="col pb-4">
								<h1 class="text-color-light font-weight-extra-bold text-13 line-height-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">SPECIALISTS</h1>
								<h2 class="text-color-light font-weight-extra-bold text-4-5 line-height-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-plugin-options="{'minWindowWidth': 0}">20 YEARS CARING ABOUT YOU</h2>

								<div class="mt-4">
									<a href="{{route('appointments')}}" class="btn btn-modern btn-primary btn-effect-1" type="button"><i class="fa fa-check"></i>&nbsp; Get Started Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Carousel Slide 2 -->
				<div class="owl-item position-relative overlay overlay-show overlay-op-3" style="background-image: url(assets/img/b1.jpg); background-size: cover; background-position: center;">
					<div class="container position-relative z-index-3 h-100">
						<div class="row align-items-center h-100">
							<div class="col pb-4">
								<h1 class="text-color-light font-weight-extra-bold text-13 line-height-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">MEDICAL APPOINTMENT</h1>
								<h2 class="text-color-light font-weight-extra-bold text-4-5 line-height-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-plugin-options="{'minWindowWidth': 0}">SCHEDULE A MEDICAL APPOINTMENT NOW</h2>
								<div class="d-inline-block">
									<p class="text-color-light custom-border-bottom-1 font-weight-light text-4-5 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">Online or Over the Phone</p>
								</div>
								<div class="mt-4">
									<a class="btn btn-modern btn-primary btn-effect-1" type="button"><i class="fa fa-check"></i>&nbsp; Get Started Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="owl-dots mb-5">
			<button role="button" class="owl-dot active"><span></span></button>
			<button role="button" class="owl-dot"><span></span></button>
		</div>
	</div>
	<section class="section-custom-medical" id="about">
		<div class="container">
			<div class="row medical-schedules">
				<div class="col-xl-3 box-one bg-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
					<div class="feature-box feature-box-style-2 align-items-center p-4">
						<div class="feature-box-icon p-0">
							<img src="img/demos/medical/icons/medical-icon-heart.png" alt class="img-fluid pt-1" />
						</div>
						<div class="feature-box-info">
							<h4 class="m-0 p-0">Medical Treatment</h4>
						</div>
					</div>
				</div>
				<div class="col-xl-3 box-two bg-color-tertiary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
					<h5 class="m-0">
						<a href="#special-section" title="">
							SPECIALITIES
							<i class="icon-arrow-right-circle icons"></i>
						</a>
					</h5>
				</div>
				<div class="col-xl-3 box-three bg-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="1200">
					<div class="expanded-info p-4 bg-color-primary">
						<div class="info custom-info">
							<span>Mon-Fri</span>
							<span>8:30 am to 5:00 pm</span>
						</div>
						<div class="info custom-info">
							<span>Saturday</span>
							<span>9:30 am to 1:00 pm</span>
						</div>
						<div class="info custom-info">
							<span>Sunday</span>
							<span>Closed</span>
						</div>
					</div>
					<h5 class="m-0">
						Opening Hours
						<i class="icon-arrow-right-circle icons"></i>
					</h5>
				</div>
				<div class="col-xl-3 box-four bg-color-secondary p-0 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="1800">
					<a href="tel:+008001234567" class="text-decoration-none">
						<div class="feature-box feature-box-style-2 m-0">
							<div class="feature-box-icon">
								<i class="icon-call-out icons"></i>
							</div>
							<div class="feature-box-info">
								<label class="font-weight-light">Phone Number</label>
								<strong class="font-weight-normal">+2348024331403</strong>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row mt-5 mb-5 pt-3 pb-3">
				<div class="col-md-8">
					<h2 class="font-weight-semibold mb-0">About Us</h2>
					<p class="lead font-weight-normal text-justify">At CEF Medics, we understand that navigating the complexities of cancer care can be overwhelming. That's why we're dedicated to providing compassionate and comprehensive telemedicine services to support patients throughout their journey.</p>
					<p class="lead font-weight-normal text-justify">Our mission at CEF Medics is to empower individuals facing cancer with the knowledge, resources, and emotional support they need to thrive. We believe in personalized care that goes beyond medical treatment, encompassing emotional well-being and holistic support.</p>

					<a href="{{route('about')}}" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-4 mb-4 mb-md-0 font-weight-bold">read more</a>
				</div>
				<div class="col-md-4">
					<img src="img/demos/medical/gallery/gallery-1.jpg" alt class="img-fluid box-shadow-custom" />
				</div>
			</div>
		</div>
	</section>
	<section class="section section-no-border mb-0" id="special-section">
		<div class="container">
			<div class="row pt-3">
				<div class="col">
					<h2 class="font-weight-semibold mb-0">Specialities</h2>
					<p class="lead font-weight-normal">CEF Medics doctors are experienced in several medical specialties and are committed to addressing your individual conditions and concerns conveniently from the comfort of your home.</p>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-lg-6">
					<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
						<div class="feature-box-icon" style="min-width: 4.7rem;">
							<img src="img/demos/medical/icons/department-icon-cardiology.png" alt class="img-fluid" />
						</div>
						<div class="feature-box-info">
							<h4 class="font-weight-semibold"><a href="demo-medical-departments-detail.html" class="text-decoration-none">Oncology</a></h4>
							<p>We understand the challenges that come with cancer care, which is why we offer a comprehensive online oncology service.</p>
						</div>
					</div>
					<div class="text-center">
						<a class="btn btn-outline btn-quaternary custom-button text-uppercase mt-4 font-weight-bold" href="{{route('oncology')}}">read more</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
						<div class="feature-box-icon" style="min-width: 4.7rem;">
							<img src="img/demos/medical/icons/department-icon-gastroenterology.png" alt class="img-fluid" />
						</div>
						<div class="feature-box-info">
							<h4 class="font-weight-semibold"><a href="demo-medical-departments-detail.html" class="text-decoration-none">Psycho-Oncology</a></h4>
							<p>We recognize the profound emotional and pyschological impact that a cancer diagnosis can have on individuals and their loved ones.</p>
						</div>
					</div>
					<div class="text-center">
						<a class="btn btn-outline btn-quaternary custom-button text-uppercase mt-4 font-weight-bold" href="{{route('psycooncology')}}">read more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection