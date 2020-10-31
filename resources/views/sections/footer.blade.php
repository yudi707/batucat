<footer id="gfooter">
	<div class="in_relative">
		<div class="in_center f_nav clearfix">
			<ul class="cate_l">
				<li>
					<a href="{{route('home',['lang' => app('translator')->getLocale()])}}">
						{{trans('menu.home'	)}}
					</a>
				</li>

				<li>
					<a href="{{route('about',['lang' => app('translator')->getLocale()])}}">
						{{trans('menu.about')}}
					</a>
				</li>
				<li>
					<a href="{{route('product',['lang' => app('translator')->getLocale()])}}">
						{{trans('menu.product')}}
					</a>
				</li>
				<li>
					<a href="{{route('paint',['lang' => app('translator')->getLocale()])}}">
						{{trans('menu.paint')}}
					</a>
				</li>
			</ul>
			<ul class="cate_s">
				<li>
					<a href="{{route('sales',['lang' => app('translator')->getLocale()])}}">
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
				<!-- <li>
					<a href="#">
						{{trans('csr.title')}}
					</a>
				</li> -->
				<li>
					<a href="{{route('contact',['lang' => app('translator')->getLocale()])}}">
						{{trans('menu.contact')}}
					</a>
				</li>
				
			</ul>
	<!-- 		<ul id="f_links">
				<li>
					<a href="#" target="_blank" class="exlink">
						{{trans('menu.blog')}}
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="exlink">
						{{trans('menu.news')}}
					</a>
				</li> -->
									<!-- <li>
										<a href="#" target="_blank" class="exlink">
											{{trans('nav.link-3-title')}}
										</a>
									</li>
									<li>
										<a href="#">
											{{trans('nav.link-4-title')}}
										</a>
									</li> -->
		<!-- 	</ul> -->
			<ul id="f_sns" class="clearfix">
				<li>
					<p>
						{{trans('menu.sns')}}
					</p>
				</li>
				<li>
					<a href="https://www.facebook.com/Rock-Paint-Indonesia-101352098154028" target="_blank">
						<img alt="facebook" src="{{url('assets/img/common/sns_facebook.svg')}}"  width="20">
					</a>
				
				</li>
				<li>
					<a href="https://instagram.com/rockpaintidn/" target="_blank">
						<img alt="instagram" src="{{url('assets/img/common/sns_instagram.svg')}}" height="20">
					</a>
				</li>
			<!-- 	<li>
					<a href="https://youtube.com/" target="_blank">
						<img alt="youtube" src="{{url('assets/img/common/sns_youtube.svg')}}" height="13">
					</a>
				</li> -->
			</ul>
		<!--<p id="f_policy" class="sp">
				<a href="#">
					{{trans('nav.policy-title')}}
				</a>
			</p> -->
			<ul id="f_lang" class="f_lang_ clearfix">

				<li class="en">
					<a href="{{ url('/en'.str_replace(
						app('request')->segment(1),'',
						app('request')->path())) }}">
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
						app('request')->path())) }}" >
						JP
					</a>
				</li>

			</ul>

			<div class="f_bottom clearfix">
				<div class="f_policy lato pc" >
					<a class="btn_over" href="#">
						{{trans('menu.policy')}}
					</a>
				</div>
				<div class="copyright lato">
					{{trans('menu.copyright')}}
				</div>
			</div>
		</div>
	</div>
</footer>