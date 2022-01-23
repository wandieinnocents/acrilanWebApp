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
						<li><a href="#">Home</a></li>
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
			<div class="ft-project-post-item-content">
				
				<div class="ft-project-item-wrapper filtr-container row">
					@foreach($pictures as $picture)
					<div class="col-lg-4 col-sm-6 filtr-item" data-category="1, 3, 4" data-sort="Busy streets">
						<!-- <div class="ft-portfolio-slider-innerbox position-relative"> -->
						<div class="">
							<div class="ft-img" style="margin-top:20px;">
							
								<img src="{{ asset($picture->gallery_photo) }}" alt="" 	style="height:450px; width:100%;" >
							</div>
							<!-- <div class="ft-portfolio-text headline headline pera-content">
							   <h3><a href="project-single.html">Title</a></h3> 
								<p>Description. </p> 
								<div class="ft-btn-3">
									<a class="d-flex justify-content-center align-items-center" href="#">Read More <i class="flaticon-right-arrow"></i></a>
								</div>
							</div> -->
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