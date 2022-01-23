@extends('frontend.layouts_frontend.master')

@section('title')

@endsection

@section('content')


<!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/frontend_assets/assets/images/truck.jpeg">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="assets/frontend_assets/assets/img/shape/tmd-sh.png" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Gallery</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="/">Home</a></li>
						<li>Gallery</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of Project section
	============================================= -->
	<section id="ft-project-page" class="ft-project-page-section page-padding">
		<div class="container">
			<div class="ft-section-title-2 headline pera-content text-center">
				<span class="sub-title">Gallery</span>
				<h2>Checkout our Works
				</h2>
			</div>
			<div class="ft-project-post-item-content">
				<div class="ft-project-item-filter-btn ul-li">
					<!-- Filters  -->
					<ul id="filters" class="nav-gallery text-center">
						<li class="filtr-button filtr-active" data-filter="all">All</li>
						<li class="filtr-button" data-filter="1">Transport </li>
						<li class="filtr-button" data-filter="2">Car Hire</li>
						<li class="filtr-button" data-filter="3">Airline Transfers </li>
						<li class="filtr-button" data-filter="4">Tracking </li>
						<li class="filtr-button" data-filter="5">Agriculture </li>
					</ul>
				</div>
				<div class="ft-project-item-wrapper filtr-container row">

				<!-- Category 1 -->
				@foreach($transport_category as $transport)
				<div class="col-lg-4 col-sm-6 filtr-item" data-category="1" data-sort="Busy streets">
						<div class="ft-portfoli position-relative">
							<div class="ft-portfolio-img" style="margin-top:20px;">
							<img src="{{ asset($transport->gallery_photo) }}" alt="" 	style="height:450px; width:100%;" >
							</div>
							
						</div>
				</div>

				@endforeach 

					



					<!-- Category 2 -->
					@foreach($car_hire_category as $car_hire)
					<div class="col-lg-4 col-sm-6 filtr-item" data-category="2" data-sort="Busy streets">
					<div class="ft-portfoli position-relative">
							<div class="ft-portfolio-img" style="margin-top:20px;">
							<img src="{{ asset($car_hire->gallery_photo) }}" alt="" 	style="height:450px; width:100%;" >
							</div>
							
						</div>
					</div>
					@endforeach



					<!-- Category 3 -->
					@foreach($airline_category as $airline)
					<div class="col-lg-4 col-sm-6 filtr-item" data-category="3" data-sort="Busy streets">
					<div class="ft-portfoli position-relative">
							<div class="ft-portfolio-img" style="margin-top:20px;">
							<img src="{{ asset($airline->gallery_photo) }}" alt="" 	style="height:450px; width:100%;" >
							</div>
							
						</div>
					</div>
					@endforeach



					<!-- Category 4 -->
					@foreach($tracking as $track)

					<div class="col-lg-4 col-sm-6 filtr-item" data-category="4" data-sort="Busy streets">
					<div class="ft-portfoli position-relative">
							<div class="ft-portfolio-img" style="margin-top:20px;">
							<img src="{{ asset($track->gallery_photo) }}" alt="" 	style="height:450px; width:100%;" >
							</div>
							
						</div>
					</div>
					@endforeach

					<!-- Category 5 -->
					@foreach($agriculture as $agric)

					<div class="col-lg-4 col-sm-6 filtr-item" data-category="5" data-sort="Busy streets">
					<div class="ft-portfoli position-relative">
							<div class="ft-portfolio-img" style="margin-top:20px;">
							<img src="{{ asset($agric->gallery_photo) }}" alt="" 	style="height:450px; width:100%;" >
							</div>
							
						</div>
					</div>

					@endforeach




					
				</div>
				<div class="ft-btn text-center">
					<a class="d-flex justify-content-center align-items-center" href="#">Load More</a>
				</div>
			</div>
		</div>
	</section>
<!-- End of Project section
	============================================= -->	


@endsection