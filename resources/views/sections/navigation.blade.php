<nav class="clearfix h_nav_box">
	<div class="in_relative">
		<div class="in_center h_nav">
			<ul class="cate_l">
				<li>
					<a href="{{
						route('home',['lang' => app('translator')->getLocale()])
					}}">
						{{trans('menu.home')}}
					</a>
				</li>
				<li>
					<a href="{{
						route('about',['lang' => app('translator')->getLocale()])
					}}">
						{{trans('menu.about')}}
					</a>
				</li>
				<li>
					<a href="{{
						route('product',['lang' => app('translator')->getLocale()])
					}}">
						{{trans('menu.product')}}
					</a>
				</li>
				<li>
					<a href="{{
						route('paint',['lang' => app('translator')->getLocale()])
					}}">
						{{trans('menu.paint')}}
					</a>
				</li>
			</ul>
			<ul class="cate_s">
				<!-- <li>
					<a href="#">
						{{trans('career.title')}}
					</a>
				</li> -->
				<li>
					<a href="{{
						route('sales',['lang' => app('translator')->getLocale()])
					}}">
						{{trans('menu.sales')}}
					</a>
				</li>
				<li>
					<a href="{{route('news',['lang' => app('translator')->getLocale()])}}">
						{{trans('menu.news')}}
					</a>
				</li>
				<li>
					<a href="{{route('csr',['lang' => app('translator')->getLocale()])}}">
						{{trans('menu.csr')}}
					</a>
				</li>
				<li>
					<a href="{{	route('contact',['lang' => app('translator')->getLocale()])}}">
						{{trans('menu.contact')}}
					</a>
				</li>

				
			</ul>
			<!-- <ul id="h_links">
				<li>
					<a href="#" target="_blank" class="exlink">
						{{trans('menu.news')}}
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="exlink">
						{{trans('menu.blog')}}
					</a>
				</li> 
				<li>
					<a href="#" target="_blank" class="exlink">
						{{trans('nav.link-3-title')}}
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="exlink">
						{{trans('nav.link-4-title')}}
					</a>
				</li> 
			</ul> -->
		
			<ul id="h_sns" class="clearfix">
				<li>
					<p>{{trans('menu.sns')}}</p>
				</li>
				<li>
					<a href="https://www.facebook.com/Rock-Paint-Indonesia-101352098154028" target="_blank">
						<img alt="facebook" src="{{url('assets/img/common/sns_facebook.svg')}}" width="20">
					</a>
				
				</li>
				<li>
					<a href="https://instagram.com/rockpaintidn/" target="_blank">
						<img alt="instagram" src="{{url('assets/img/common/sns_instagram.svg')}}" height="20">
					</a>
				</li>
			</ul>
			<ul id="h_lang" class="h_lang_ clearfix">
				<li class="en">
					<a href="{{ url('/en'.str_replace(
						app('request')->segment(1),'',
						app('request')->path())) }}"  class="lang_active">
						EN
					</a>
				</li>
				<li class="sp">｜</li>
				<li class="en">
					<a href="{{ url('/id'.str_replace(
						app('request')->segment(1),'',
						app('request')->path())) }}">
						ID
					</a>
				</li>
				<li class="sp">｜</li>
				<li class="jp">
					<a href="{{ url('/jp'.str_replace(
						app('request')->segment(1),'',
						app('request')->path())) }}">
						JP
					</a>
				</li>	
			</ul>
			<!--  <p id="h_policy" class="pc">
				<a href="#">
					{{trans('menu.policy')}}
				</a>
			</p> -->
		</div>
	</div>
</nav>