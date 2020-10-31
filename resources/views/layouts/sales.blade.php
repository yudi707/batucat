<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app('translator')->getLocale()) }}">
	<head>
		{{-- section meta --}}
		@include('sections.meta')
        {{-- libs css --}}
		<link rel="stylesheet" href="{{ mix('/assets/css/mix-about.min.css') }}" />
		<style type="text/css">
			.broken_link, a.broken_link {text-decoration: line-through;}
		</style>
	</head>
	<body class="">
		{{-- section header --}}
		@include('sections.header')
		{{-- section content --}}
		@yield('sales')
		{{-- section contact --}}
		@include('pages.contact.shortcut')
		{{-- section footer --}}
		@include('sections.footer')
		{{-- libs js --}}
		<script src="{{ mix('/assets/js/mix-about.min.js') }}"></script>
	</body>
</html>

