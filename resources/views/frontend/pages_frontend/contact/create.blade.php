@extends('frontend.layouts_frontend.master')

@section('title')

@endsection

@section('content')


<!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{ asset('assets/frontend_assets/assets/images/truck.jpeg') }}">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="{{ asset('assets/frontend_assets/assets/img/shape/tmd-sh.png') }}" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Contact Us</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="/">Home</a></li>
						<li>Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
<!-- End of Breadcrumb section
	============================================= -->


<!-- Start of contact page section
	============================================= -->
	<section id="ft-contact-page" class="ft-contact-page-section page-padding">
		<div class="container">
			<div class="ft-contact-page-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="ft-contact-page-text-wrapper">
							<div class="ft-section-title-2 headline pera-content">
								<span class="sub-title">Get in Touch</span>
								<p>Get in Touch And We’ll respond in real time
</p>
							</div>
							<div class="ft-contact-page-contact-info">
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="fal fa-map-marker-alt"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Office address</h3>
										<p>P.O.BOX  534 NTINDA</p>
									</div>
								</div>
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="fas fa-phone-alt"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Telephone number</h3>
										<p>0751465363/0779465363</p>
									</div>
								</div>
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="far fa-envelope"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Mail address</h3>
										<p>info@acrilanltd.com</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<!-- success message -->
						@if(session()->has('message'))
							<div class="alert alert-success">
								{{ session()->get('message') }}
							</div>
						@endif
												<div class="ft-contact-page-form-wrapper headline">
							<h3 class="text-center">Leave a Message</h3>
							<form action="{{ route('contact.store') }}" method="POST">
								@csrf
								<div class="row">
									<div class="col-lg-6">
										<input type="text" name="name" placeholder="Your Name">
									</div>
									<div class="col-lg-6">
										<input type="email" name="email" placeholder="Your Email">
									</div>
									<div class="col-lg-6">
										<input type="text" name="phone" placeholder="Phone">
									</div>
									<div class="col-lg-6">
										<input type="text" name="subject" placeholder="Subject">
									</div>
									
									<div class="col-lg-12">
										<textarea name="description" placeholder="Your Message"></textarea>
									</div>
									<div class="col-lg-12">
										<button> Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
<!-- End of contact page section
	============================================= -->	



@endsection