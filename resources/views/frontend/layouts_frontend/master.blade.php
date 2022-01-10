
@include('frontend.includes_frontend.header_frontend')

<body>
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>
<!-- Start of header section
	============================================= -->
@include('frontend.includes_frontend.nav')
<!-- End of header section
	============================================= -->


@yield('content')



<!-- Start Of Footer section
	============================================= -->
	@include('frontend.includes_frontend.footer')
	
<!-- End of Footer section
	============================================= -->
	<!-- For Js Library -->
	<script src="{{ asset('assets/frontend_assets/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/jquery.ui.touch-punch.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/appear.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/slick.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/jquery.filterizr.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/jquery.cssslider.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/rbtools.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/rs6.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/script.js') }}"></script>
</body>

</html>			