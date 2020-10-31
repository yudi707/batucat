<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="cms-pg-top">
	<head>
		<!-- meta -->
		@include('sections.meta')
		<!-- libs css -->
		<link rel="stylesheet" type='text/css' href="{{ url('assets/css/original/font.css') }}" />
		<link rel="stylesheet" type='text/css' href="{{ url('assets/css/original/common.css') }}" />
		<link rel="stylesheet" type='text/css' href="{{ url('assets/css/original/slick.css') }}" />
		<link rel="stylesheet" type='text/css' href="{{ url('assets/css/original/products.css') }}" />
		<link rel='stylesheet' type='text/css' href="{{ url('assets/wp-content/themes/uhuru/styleb578.min.css?ver=20171214') }}" id='theme-style-css' media='all' />
		<style type="text/css">.broken_link, a.broken_link{text-decoration: line-through;}</style>
	</head> {{-- <head> --}}
	<body id="body" class="">
		<!-- section header -->
		@include('sections.header')
		<!-- section content -->
		@yield('contact')
		<!-- section footer -->
		@include('sections.footer')
		<!-- libs js -->
	<script type="text/javascript" src="{{ url('assets/js/original/jquery-1.9.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('assets/js/original/TweenMax.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('assets/js/original/jquery.mobile.custom.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('assets/js/original/background-check.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('assets/js/original/jquery.cookie.js') }}"></script>
		<script type="text/javascript" src="{{ url('assets/js/original/jquery.lazyload.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('assets/js/original/common.js') }}"></script>
		<script type="text/javascript" src="{{ url('assets/js/original/lazysizes.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('assets/js/original/slick.js') }}"></script>
		<!-- <script type="text/javascript" src="{{ url('assets/js/original/products.js') }}"></script> -->
		<script type="text/javascript" src="{{ url('assets/plugins/vanta/vendor/three.r95.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('assets/plugins/vanta/dist/vanta.net.min.js') }}"></script>
		<script src="{{ url('assets/plugins/vanta/dist/vanta.net.min.js')}}"></script>
		<!-- <script>
		VANTA.NET({el: "body",  mouseControls: true,
  touchControls: true,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  points: 8.00,
  maxDistance: 25.00,
  spacing: 19.00})
		</script> -->
	</body> {{-- <body id="body" class=""> --}}
</html> {{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="cms-pg-top"> --}}