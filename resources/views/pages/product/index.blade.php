@extends('layouts.product')
@section('product')
	<section id="service">
		<div id="cover"></div>
		<!-- @section('field', trans('product.product-home'))
        @include('pages.paint.breadcrumb') -->
		<div class="pageTitle">
			<div class="pho"></div> 
		</div>
		<!-- <div class="whiteBox"> -->
			<ul class="itemList oneShow clearfix">
				<li>
					<a href="{{	route('product.decorative',['lang'=>app('translator')->getLocale()])
					}}">
						<h3 class="lato">
							{{trans('Decorative Paint')}}
							<img src="{{ url('assets/img/onemake/product/deco2.png') }}" alt="">
						</h3>
						
						<!-- <h4>トップメッセージ</h4> -->
						
					</a>
				</li>
				<li>
					<a href="{{	route('product.adhesive',['lang'=>app('translator')->getLocale()])
					}}">
						<h3 class="lato">
							{{trans('Adhesive')}}
							<img src="{{ url('assets/img/onemake/product/adhesiv1.png') }}" alt="">
						</h3>
						<!-- <h4>会社概要</h4> -->
					
					</a>
				</li>
			<!--  -->
			</ul>
			</div>
		</div>
	</section>
@endsection