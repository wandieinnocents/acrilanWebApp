
@include('frontend.includes_frontend.header_frontend')
<body>
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>
<!-- Start of header section
	============================================= -->
	<header id="ft-header" class="ft-header-section header-style-three">
		<div class="container">
			<div class="ft-header-content position-relative">
				<div class="ft-header-top d-flex justify-content-end ul-li">
					<ul>
						<li><i class="fas fa-map-marker-alt"></i> 380 St Kilda Road, Australia</li>
						<li><i class="fas fa-clock"></i> 380 St Kilda Road, Australia</li>
						<li><i class="fas fa-phone"></i> 380 St Kilda Road, Australia</li>
					</ul>
				</div>
				<div class="ft-header-main-menu d-flex align-items-center justify-content-between">
					<div class="ft-brand-logo">
						<a href="#"><img src="assets/frontend_assets/assets/img/logo/logo5.png" alt=""></a>
					</div>
					<div class="ft-header-main-menu-cta  d-flex align-items-center">
						<nav class="ft-main-navigation clearfix ul-li">
							<ul id="ft-main-nav" class="nav navbar-nav clearfix">
								<li>
									<a href="%21.html#">Home</a>
								
								</li>
								<li class="dropdown">
									<a href="#">Know Us</a>
									<ul class="dropdown-menu clearfix">
										<li><a href="/about">About Us </a></li>
										<li><a href="/projects">Projects</a></li>
										<li><a href="company_profile">Company Profile</a></li>
										<li><a href="/team">Team</a></li>

									</ul>
								</li>
								<li>
									<a href="/works">Services</a>
								</li>
								<li>
									<a href="/pictures">Gallery</a>
								</li>
								<li>
									<a href="{{ route('contact.create') }}">Contact</a>
								</li>
							</ul>
						</nav>
						<div class="ft-header-cta-btn">
							<a class="d-flex justify-content-center align-items-center" href="contact.html">Get a quote now!</a>
						</div>
					</div>
				</div>
				<div class="mobile_menu position-relative">
					<div class="mobile_menu_button open_mobile_menu">
						<i class="fal fa-bars"></i>
					</div>
					<div class="mobile_menu_wrap">
						<div class="mobile_menu_overlay open_mobile_menu"></div>
						<div class="mobile_menu_content">
							<div class="mobile_menu_close open_mobile_menu">
								<i class="fal fa-times"></i>
							</div>
							<div class="m-brand-logo">
								<a href="%21.html#"><img src="assets/frontend_assets/assets/img/logo/logo4.png" alt=""></a>
							</div>
							<nav class="mobile-main-navigation  clearfix ul-li">
								<ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
									<li class="dropdown">
										<a href="%21.html#">Home</a>
										<ul class="dropdown-menu clearfix">
											<li><a href="index-1.html">Home Page 1</a></li>
											<li><a href="index-2.html">Home Page 2</a></li>
											<li><a href="index-3.html">Home Page 3</a></li>
										</ul>
									</li>
									<li><a href="about.html">About</a></li>
									<li class="dropdown">
										<a href="%21.html#">Service</a>
										<ul class="dropdown-menu clearfix">
											<li><a href="service.html">Service Page </a></li>
											<li><a href="service-single.html">Service Details</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="%21.html#">Project</a>
										<ul class="dropdown-menu clearfix">
											<li><a href="project.html">Services</a></li>
											<li><a href="project-single.html">Team Page</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="%21.html#">News</a>
										<ul class="dropdown-menu clearfix">
											<li><a href="blog.html">News </a></li>
											<li><a href="blog-single.html">News Details</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="%21.html#">Others</a>
										<ul class="dropdown-menu clearfix">
											<li><a href="team.html">Team Page </a></li>
											<li><a href="team-single.html">Team  Details </a></li>
											<li><a href="coming-soon.html">Coming Soon</a></li>
											<li><a href="faq.html">Faq Page</a></li>
											<li><a href="contact.html">Contact Page</a></li>
											<li><a href="pricing.html">Pricing Page</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- /Mobile-Menu -->
				</div>
			</div>
		</div>
	</header>
<!-- End of header section
	============================================= -->

<!-- Start of Slider section
	============================================= -->
@include('frontend.includes_frontend.slider')
<!-- End of Slider section
	============================================= -->

<!-- Start of Service section
	============================================= -->
	<section id="ft-service-3" class="ft-service-section-3">
		<div class="container">
			<div class="ft-section-title-3 headline text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
				<span class="text-uppercase">We specialise in the transportation</span>
				<h2>Specialist Logistics Services</h2>
			</div>

			<!-- grid icons  -->
			<div class="ft-goodness-featured-content">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="ft-goodness-featured-innerbox text-center">
							<div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
								<i class="fal fa-anchor"></i>
							</div>
							<div class="ft-goodness-featured-text headline pera-content">
								<h3>Trusted Franchise</h3>
								<p>Dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan  vel facilisis. </p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="ft-goodness-featured-innerbox text-center">
							<div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
								<i class="fal fa-user-headset"></i>
							</div>
							<div class="ft-goodness-featured-text headline pera-content">
								<h3>Customer Support</h3>
								<p>Dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan  vel facilisis. </p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="ft-goodness-featured-innerbox text-center">
							<div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
								<i class="fal fa-badge-sheriff"></i>
							</div>
							<div class="ft-goodness-featured-text headline pera-content">
								<h3>Reliability &amp; Punctuality</h3>
								<p>Dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan  vel facilisis. </p>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- grid icons  -->
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="ft-goodness-featured-innerbox text-center">
							<div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
								<i class="fal fa-anchor"></i>
							</div>
							<div class="ft-goodness-featured-text headline pera-content">
								<h3>Trusted Franchise</h3>
								<p>Dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan  vel facilisis. </p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="ft-goodness-featured-innerbox text-center">
							<div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
								<i class="fal fa-user-headset"></i>
							</div>
							<div class="ft-goodness-featured-text headline pera-content">
								<h3>Customer Support</h3>
								<p>Dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan  vel facilisis. </p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="ft-goodness-featured-innerbox text-center">
							<div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
								<i class="fal fa-badge-sheriff"></i>
							</div>
							<div class="ft-goodness-featured-text headline pera-content">
								<h3>Reliability &amp; Punctuality</h3>
								<p>Dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan  vel facilisis. </p>
							</div>
						</div>
					</div>
			</div>




















			
		</div>
	</section>
<!-- End of Service section
	============================================= -->

<!-- Start of About section
	============================================= -->
	<section id="ft-about-3" class="ft-about-section-3">
		<div class="container">
			<div class="ft-about-content-3">
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="ft-about-img-wrapper-3 position-relative">
							<div class="ft-about-img-3">
								<img src="assets/frontend_assets/assets/img/about/ab2.png" alt="">
							</div>
							<div class="ft-about-sign-img-text">
								<span class="sign-shape"><img src="assets/frontend_assets/assets/img/shape/sign-sh.png" alt=""></span>
								<div class="ft-about-sign-img">
									<img src="assets/frontend_assets/assets/img/about/sign.png" alt="">							
								</div>
								<div class="ft-about-sign-text">
									<span>Chris Hamlet</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ft-about-text-3">
							<div class="ft-section-title-3 headline wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
								<span class="text-uppercase">We specialise in the transportation</span>
								<h2>We are proud of our
									workforce and have
								worked hard.</h2>
							</div>
							<div class="ft-about-sub-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
								This in turn has created a culture we have become respected for, and one that our clients regularly commend us for, feeding back what a pleasure it is to work with both our service staff and the crew members.
							</div>
							<div class="ft-about-feature-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
								<div class="row">
									<div class="col-md-6">
										<div class="ft-about-feature-text">
											We are very proud of our workforce and have worked hard to create a business that attracts those people who want to appreciate the importance.
										</div>
									</div>
									<div class="col-md-6">
										<div class="ft-about-feature-text">
											This in turn has created a culture we have become respected for, and one that our clients regularly commend us for feeding back crew members.
										</div>
									</div>
								</div>
							</div>
							<div class="ft-about-btn-group text-uppercase d-flex wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
								<a class="d-flex justify-content-center align-items-center" href="contact.html">Get a quote now!  <i class="fas fa-arrow-right"></i></a>
								<a class="d-flex justify-content-center align-items-center" href="about.html">About Us  <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of About section
	============================================= -->  	

<!-- Start of Case Study section
	============================================= -->
	<section id="ft-case-study" class="ft-case-study-section">
		<div class="ft-case-study-content d-flex">
			<div class="ft-case-study-items position-relative">
				<div class="ft-case-study-img position-relative">
					<img src="assets/frontend_assets/assets/img/project/cs1.jpg" alt="">
				</div>
				<div class="ft-case-study-text headline pera-content">
					<span class="serial-no">01</span>
					<h3><a href="project-single.html">CT Scanner from Italy to the UK</a></h3>
					<p>Before anything’s loaded up, there’s de-racking, packing and tracking. There’s surveying and risk assessment. </p>
				</div>
				<a class="more-btn d-flex align-items-center justify-content-center" href="project-single.html"><i class="fas fa-arrow-right"></i></a>
			</div>
			<div class="ft-case-study-items position-relative">
				<div class="ft-case-study-img position-relative">
					<img src="assets/frontend_assets/assets/img/project/cs2.jpg" alt="">
				</div>
				<div class="ft-case-study-text headline pera-content">
					<span class="serial-no">02</span>
					<h3><a href="project-single.html">Specialist transport services.</a></h3>
					<p>Before anything’s loaded up, there’s de-racking, packing and tracking. There’s surveying and risk assessment. </p>
				</div>
				<a class="more-btn d-flex align-items-center justify-content-center" href="project-single.html"><i class="fas fa-arrow-right"></i></a>
			</div>
			<div class="ft-case-study-items position-relative">
				<div class="ft-case-study-img position-relative">
					<img src="assets/frontend_assets/assets/img/project/cs3.jpg" alt="">
				</div>
				<div class="ft-case-study-text headline pera-content">
					<span class="serial-no">03</span>
					<h3><a href="project-single.html">Cash Counters to Paddington Station.</a></h3>
					<p>Before anything’s loaded up, there’s de-racking, packing and tracking. There’s surveying and risk assessment. </p>
				</div>
				<a class="more-btn d-flex align-items-center justify-content-center" href="project-single.html"><i class="fas fa-arrow-right"></i></a>
			</div>
			<div class="ft-case-study-items position-relative">
				<div class="ft-case-study-img position-relative">
					<img src="assets/frontend_assets/assets/img/project/cs4.jpg" alt="">
				</div>
				<div class="ft-case-study-text headline pera-content">
					<span class="serial-no">04</span>
					<h3><a href="project-single.html">UK Exhibition support for TENESO Italy.</a></h3>
					<p>Before anything’s loaded up, there’s de-racking, packing and tracking. There’s surveying and risk assessment. </p>
				</div>
				<a class="more-btn d-flex align-items-center justify-content-center" href="project-single.html"><i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
	</section>
<!-- End of Case Study section
	============================================= -->	

<!-- Start of Fun fact section
	============================================= -->
	<section id="ft-funfact-2" class="ft-funfact-section-2" data-background="assets/frontend_assets/assets/img/bg/shape-bg.jpg">
		<div class="container">
			<div class="ft-section-title-3 headline text-center">
				<span class="text-uppercase">We specialise in the transportation</span>
				<h2>Together, we have your logistical
				challenges covered.</h2>
			</div>
			<div class="ft-funfact-content-2 position-relative">
				<span class="map-bg position-absolute text-center"><img src="assets/frontend_assets/assets/img/bg/map.png" alt=""></span>
				<div class="ft-funfact-inner-items-wrapper position-relative">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="ft-funfact-inner-items text-center">
								<div class="ft-funfact-inner-icon d-flex align-items-center justify-content-center position-relative">
									<i class="flaticon-delivery-truck"></i>
								</div>
								<div class="ft-funfact-inner-text headline pera-content">
									<h3><span class="counter">1656</span></h3>
									<p>Completed Delivery</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="ft-funfact-inner-items text-center">
								<div class="ft-funfact-inner-icon d-flex align-items-center justify-content-center position-relative">
									<i class="flaticon-community"></i>
								</div>
								<div class="ft-funfact-inner-text headline pera-content">
									<h3><span class="counter">1250</span></h3>
									<p>Satisfied Clients</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="ft-funfact-inner-items text-center">
								<div class="ft-funfact-inner-icon d-flex align-items-center justify-content-center position-relative">
									<i class="flaticon-compliance"></i>
								</div>
								<div class="ft-funfact-inner-text headline pera-content">
									<h3><span class="counter">30</span>+</h3>
									<p>Awards Winner</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="ft-funfact-inner-items text-center">
								<div class="ft-funfact-inner-icon d-flex align-items-center justify-content-center position-relative">
									<i class="flaticon-face-detection"></i>
								</div>
								<div class="ft-funfact-inner-text headline pera-content">
									<h3><span class="counter">155</span>+</h3>
									<p>Team Members</p>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<div class="ft-funfact-slug-text text-center">
					<span>Join over 3000 people who engage with sector. <a href="#">Join Now!</a></span>
				</div>
			</div>
		</div>
	</section>	
<!-- End of Fun fact section
	============================================= -->
	
<!-- Start Of Footer section
	============================================= -->
	@include('frontend.includes_frontend.footer')
	
<!-- End of Footer section
	============================================= -->
	<!-- For Js Library -->
	<script src="assets/frontend_assets/assets/js/jquery.min.js"></script>
	<script src="assets/frontend_assets/assets/js/bootstrap.min.js"></script>
	<script src="assets/frontend_assets/assets/js/popper.min.js"></script>
	<script src="assets/frontend_assets/assets/js/jquery-ui.min.js"></script>
	<script src="assets/frontend_assets/assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/frontend_assets/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/frontend_assets/assets/js/appear.js"></script>
	<script src="assets/frontend_assets/assets/js/slick.js"></script>
	<script src="assets/frontend_assets/assets/js/jquery.counterup.min.js"></script>
	<script src="assets/frontend_assets/assets/js/waypoints.min.js"></script>
	<script src="assets/frontend_assets/assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/frontend_assets/assets/js/jquery.filterizr.js"></script>
	<script src="assets/frontend_assets/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/frontend_assets/assets/js/wow.min.js"></script>
	<script src="assets/frontend_assets/assets/js/jquery.cssslider.min.js"></script>
	<script src="assets/frontend_assets/assets/js/rbtools.min.js"></script>
	<script src="assets/frontend_assets/assets/js/rs6.min.js"></script>
	<script src="assets/frontend_assets/assets/js/script.js"></script>
</body>

</html>			