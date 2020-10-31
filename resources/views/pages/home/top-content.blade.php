<div id="top_content" class="clearfix">
	<article id="service_index">
		<div class="tc">
			<h1>{{trans('home.product')}}</h1>
			<!-- <hr /> -->
			<p>
				<!-- {{trans('home.product-exp1')}}<br>
				{{trans('home.product-exp2')}}<br> -->
				<!-- {{ucfirst(trans('also we manufacture adhesive for lamintaion'))}} -->
			</p>
			<a href="{{route('product',['lang' => app('translator')->getLocale()])}}" class="more">
				{{trans('home.product-more')}}
			</a>
		</div>
	</article>
	<article id="product_index">
		<div class="tc">
			<h1>{{trans('home.about')}}</h1>
			<p>
				<!-- {{trans('home.about-exp1')}}<br>
				{{trans('home.about-exp2')}}<br> -->
			</p>
			<a href="{{route('about',['lang' => app('translator')->getLocale()])}}"class="more">
				{{trans('home.about-more')}}
			</a>
		</div>
	</article>
	<article id="about_index">
		<div class="bg_c">
			<div class="tc">
				<h1>{{trans('home.sales')}}</h1>
				<p>
				<!-- 	{{trans('home.sales-exp1')}}<br>
					{{trans('home.sales-exp2')}} -->
				</p>
				<a href="{{route('sales',['lang' => app('translator')->getLocale()])}}" class="more">
					{{trans('home.sales-more')}}
				</a>
			</div>
		</div>
	</article>
 	<article id="paint_index">
		<div class="bg_c">
			<div class="tc">
				<h1>{{ucwords(trans('home.paint'))}}</h1>
				<p>
					<!-- {{ucfirst(trans('home.paint-exp1'))}}<br>
					{{ucfirst(trans('home.paint-exp2'))}} -->
				</p>
				<br>
				<a href="{{route('paint',['lang' => app('translator')->getLocale()])}}">
					<button class="button">
					<span>
						{{strtoupper(trans('home.paint-more'))}}
					</span>
					</button>
				</a> 
			</div>
		</div>
	</article> 
</div>