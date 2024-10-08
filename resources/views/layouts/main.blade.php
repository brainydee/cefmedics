<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cefmedics | Medical Appointment Website</title>
	<meta name="keywords" content="Cefmedics" />
	<meta name="description" content="Cefmedics">
	<meta name="author" content="okler.net">
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
	<!-- Vendor CSS -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.compat.css') }}">

	<!-- Simple Line Icons CSS -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">

	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/theme-elements.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/theme-blog.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/theme-shop.css') }}">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/demos/demo-medical.css') }}">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="{{asset('assets/css/skins/skin-medical.css') }}">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/extra.css') }}">

	<style>
		body {
			font-family: "Poppins", sans-serif !important;
		}
	</style>

</head>

<body>
	<div class="body">
		<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
			<div class="header-body border-top-0">
				<div class="header-top header-top-default header-top-borders border-bottom-0">
					<div class="container h-100">
						<div class="header-row h-100">
							<!-- <div class="header-column justify-content-end">
								<div class="header-row">
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="nav-item nav-item-borders py-2">
												<a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> +2348024331403</a>
											</li>
											<li class="nav-item nav-item-borders py-2 pe-1 d-none d-md-inline-flex">
												<a href="mailto:mail@domain.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i>info@cefmedics.com</a>
											</li>
										</ul>
									</nav>
								</div>
							</div> -->
						</div>
					</div>
				</div>
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column">
							<div class="header-row">
								<div class="header-logo">
									@if( env('APP_ENV') == 'local')
									<a href="https://cefmedics.com">
										<img alt="Cefmedics logo" width="143" height="40" src="{{asset('assets/img/logo-copy.png')}}">
									</a>
									@else
									<a href="https://cefmedics.com">
										<img alt="Cefmedics logo" width="143" height="40" src="{{asset('public/assets/img/logo-copy.png')}}">
									</a>
									@endif
								</div>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<div class="header-row">
								<div class="header-nav order-2 order-lg-1">
									<div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
										<nav class="collapse">
											<ul class="nav nav-pills" id="mainNav">
												<!-- <li class="dropdown-full-color dropdown-secondary">
													<a class="nav-link active" href="{{url('/')}}">
														Home
													</a>
												</li> -->
												<!-- <li class="dropdown-full-color dropdown-secondary">
													<a class="nav-link" href="{{route('about')}}">
														About Us
													</a>
												</li> -->
												<!-- <li class="dropdown-full-color dropdown-secondary">
													<a class="nav-link" href="{{route('appointment')}}">
														Appointments
													</a>
												</li>
												<li class="dropdown dropdown-full-color dropdown-secondary">
													<a class="nav-link dropdown-toggle" class="dropdown-toggle" href="#special-section">
														Specialities
													</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item" href="{{route('oncology')}}">Oncology</a></li>
														<li><a class="dropdown-item" href="{{route('psycooncology')}}">Psycho-Oncology</a></li>
													</ul>
												</li> -->
												<!-- <li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="demo-medical-contact.html">
															Contact
														</a>
													</li> -->
												@guest
												<li class="">
													<a href="{{route('login')}}" class="btn btn-secondary text-white btn-rounded btn-with-arrow-solid mb-2" href="{{route('login')}}">Log In<span><i class="fas fa-sign-in"></i></span></a>
												</li>
												<li class="">
													<a href="{{route('register')}}" class="btn btn-secondary text-white btn-rounded btn-with-arrow-solid mb-2" href="{{route('register')}}">Sign Up<span><i class="fas fa-user"></i></span></a>
												</li>
												@else
												<div class="btn-group">
													<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-user" aria-hidden="true"></i>&nbsp;
														{{ auth()->user()->firstname }}
													</button>
													<ul class="dropdown-menu dropdown-menu-end border-0 rounded shadow">
														<form method="POST" action="{{ route('logout') }}">
															@csrf
															<button type="submit" class="dropdown-item"><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp;Log Out</button>
														</form>
														@auth
														<hr class="dropdown-divider">
														<li><a class="dropdown-item" href="{{route('userdashboard')}}"><i class="fa fa-home"></i>&nbsp;Go to Dashboard</a></li>
														@endauth
													</ul>
												</div>
												@endguest
											</ul>
										</nav>
									</div>
									<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		@yield('content')

		<footer id="footer" class="m-0">
			<div class="container">
				<div class="row pt-5 pb-4">
					<div class="col-md-4 col-lg-3 mb-2">
						<h4 class="mb-4">Location</h4>
						<p>
							12b Vincent Eze Street,
							<br>
							Ajao Estate,<br>
							Isolo, Lagos<br>
						</p>
					</div>
					<div class="col-md-4 col-lg-3">
						<h4 class="mb-4">Opening Hours</h4>

						<div class="info custom-info">
							<span>Friday</span>
							<span>2:00pm to 8:00 pm</span>
						</div>

						<div class="info custom-info">
							<span>Saturday</span>
							<span>2:00pm to 8:00 pm</span>
						</div>

						<div class="info custom-info">
							<span>Sunday</span>
							<span>7:00pm to 10:00 pm</span>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="contact-details">
							<h4 class="mb-4">Contact Number</h4>
							<a class="text-decoration-none" style="font-size: 13px;" href="tel:1234567890">
								<strong class="font-weight-light" style="font-size: 14px;">+2348024331403</strong>
							</a>
						</div>
					</div>
					<div class="col-lg-2 text-md-center text-lg-start ms-lg-auto">
						<h4 class="mb-4">Social Media</h4>
						<ul class="social-icons">
							<li class="social-icons-facebook">
								<a href="http://www.facebook.com/" target="_blank" title="Facebook">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li class="social-icons-twitter">
								<a href="http://www.twitter.com/" target="_blank" title="Twitter">
									<i class="fab fa-x-twitter"></i>
								</a>
							</li>
							<li class="social-icons-linkedin">
								<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright pt-3 pb-3">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center m-0">
							<p>© Copyright 2024. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- Vendor -->
	<script src="{{asset('assets/vendor/plugins/js/plugins.min.js') }}"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="{{asset('assets/js/theme.js') }}"></script>

	<!-- Current Page Vendor and Views -->
	<script src="{{ asset('assets/js/views/view.contact.js') }}"></script>

	<!-- Demo -->
	<script src="{{asset('assets/js/demos/demo-medical.js') }}"></script>

	<!-- Theme Custom -->
	<script src="{{asset('assets/js/custom.js') }}"></script>

	<!-- Theme Initialization Files -->
	<script src="{{ asset('assets/js/theme.init.js') }}"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const dateInput = document.getElementById('saturdayDate');

			function isSaturday(date) {
				return date.getDay() === 6;
			}

			function updateToNextSaturday() {
				const today = new Date();
				const currentDay = today.getDay();
				const daysToAdd = currentDay <= 6 ? 6 - currentDay : 6;
				const nearestSaturday = new Date(today.getFullYear(), today.getMonth(), today.getDate() + daysToAdd + 1);
				const nearestSaturdayISO = nearestSaturday.toISOString().split('T')[0];
				dateInput.value = nearestSaturdayISO;
			}


			updateToNextSaturday();


			dateInput.addEventListener('input', function() {
				const selectedDate = new Date(dateInput.value);
				if (!isSaturday(selectedDate)) {
					updateToNextSaturday();
				}
			});
		});
	</script>
</body>

</html>