@extends('layouts.about')

@section('about')
	<section id="about">
		<div id="cover"></div>
		<div class="pageTitle">
			<div class="pho"></div>
		</div>
		<div class="whiteBox">
			<ul class="itemList oneShow clearfix">
				<li>
					<a href="{{
						route('about.company',['lang' => app('translator')->getLocale()])}}">
						<h3 class="lato">
							{{trans('about.outline')}}
							<img src="{{url('assets/img/about/icon01.png')}}" alt="">
						</h3>
						
						<!-- <h4>トップメッセージ</h4> -->
						<p class="txt">
							<span>
								{{trans('about.outline2')}}
								<br class="pc">
								{{trans('about.outline3')}}
							</span>
						</p>
						<p class="more lato">
							<span>
								{{trans('about.outline-more')}}
							</span>
						</p>
					</a>
				</li>
				<li>
					<a href="{{
						route('about.philosophy',['lang' => app('translator')->getLocale()])
					}}">
						<h3 class="lato">
							{{trans('about.philosophy')}}
							<img src="{{url('assets/img/about/icon05.png')}}" alt="">
						</h3>
						<!-- <h4>会社概要</h4> -->
						<p class="txt">
							<span>
								<br>
								{{trans('about.philosophy2')}}
								<br class="pc">
								{{trans('')}}
							</span>
						</p>
						<p class="more lato">
							<span>
								{{trans('about.philosophy-more')}}
							</span>
						</p>
					</a>
				</li>
				
				<li>
					<a href="{{
						route('about.access',['lang' => app('translator')->getLocale()])
					}}">
						<h3 class="lato">
							{{trans('about.access')}}
							<img src="{{url('assets/img/about/icon06.png')}}" alt="">
						</h3>
						<!-- <h4>経営理念</h4> -->
						<p class="txt">
							<span>
								<br>
								{{trans('about.access2')}}
								<br class="pc">
								{{trans('about.access3')}}
							</span>
						</p>
						<p class="more lato">
							<span>
								{{trans('about.access-more')}}
							</span>
						</p>
					</a>
				</li>
			</ul>
			</div>
		</div>
	</section>
@endsection