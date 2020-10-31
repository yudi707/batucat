<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app('translator')->getLocale()) }}">
	<head>
		<!-- meta -->
		@include('sections.meta')
		<!-- libs css -->
		<link rel="stylesheet" href="{{ mix('/assets/css/mix-product.min.css') }}" />
		<style type="text/css">.broken_link, a.broken_link{text-decoration: line-through;}</style>
	</head> {{-- <head> --}}
	<body id="body" class="service">
		<!-- section header -->
		@include('sections.header')
		<!-- section content -->
		@yield('paint')
		<!-- section contact -->
		@include('pages.contact.shortcut')
		<!-- section footer -->
		@include('sections.footer')
		<!-- libs js -->
		<script src="{{ mix('/assets/js/mix-product.min.js') }}"></script>
		</body> {{-- <body id="body" class=""> --}}
</html> {{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="cms-pg-top"> --}}