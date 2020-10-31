@extends('layouts.home')

@section('home')
	{{-- section slider --}}
	@include('pages.home.slider')
	{{-- section top content --}}
	@include('pages.home.top-content')
@endsection