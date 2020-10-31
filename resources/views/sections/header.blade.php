<header id="gheader" class="sc">
	<h1> 
		<a href="#">
			<!-- <img src="{{url('assets/img/common/logo.png')}}" width="70" height="59" 
				alt=""> -->
		</a>
	</h1>
	<button class="menu_btn" type="button">
		<b>
			<span></span>
			<span></span>
			<span></span>
		</b>
	</button>
	{{-- section navigation --}}
	@include('sections.navigation')
	<div class="pclang pc">
		<ul id="h_lang_" class="h_lang_ clearfix">
			<li class="en">
				<a href="{{ url('/en'.str_replace(
						app('request')->segment(1),'',
						app('request')->path())) }}">
					EN
				</a>
			</li>
			<li class="id">
				<a href="{{ url('/id'.str_replace(
						app('request')->segment(1),'',
						app('request')->path())) }}">
					ID
				</a>
			</li>
			<li class="jp">
				<a href="{{ url('/jp'.str_replace(
						app('request')->segment(1),'',
						app('request')->path())) }}" >
					JP
				</a>
			</li>
		</ul>
	</div>
</header>