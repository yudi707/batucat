@extends('layouts.product')

@section('product')
<section id="service" class="entry">
	<div id="cover"></div> {{-- <div id="cover"> --}}
  		@section('field', trans('product.product-title-one'))
        @include('pages.product.adhesive.breadcrumb')
	<header>
		<h1>{{trans('product.adhesive-header')}}</h1>
		<p><br/><i class="fas fa-search"></i></p>
	</header>
	<article class="service_article">
		<div class="entry_body">
			<p>{{trans('product.adhesive-exp')}}</p>
		</div> 

				<img src="{{ url('assets/img/onemake/product/lamisi/lamisi_03.jpg') }}" alt="" width="400" height="300">
					</a>
				<img src="{{ url('assets/img/onemake/product/lamisi/lamisi_02.jpg') }}" alt="" width="400" height="300">	
					</a>
				<img src="{{ url('assets/img/onemake/product/lamisi/adhesiv2.jpg') }}" alt="" width="400" height="300">


		@include('pages.product.menu')
		</div> {{-- <div class="pho"> --}}
	</article> {{-- <article class="service_article"> --}}
</section> {{-- <section id="service" class="entry"> --}}
@endsection