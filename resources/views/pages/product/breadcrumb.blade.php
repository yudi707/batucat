<ul id="pagePath">
	<li>
		<a href="{{  route('home',['lang'=>app('translator')->getLocale()])
          }}">{{trans('product.product-home')}}</a> &gt;
	</li>

	<li>@yield('field')</li>
</ul>



<!-- <ul id="pagePath" class="cms_ly_pagePath">
	<li>
		<a href="{{	route('home',['lang'=>app('translator')->getLocale()])}}">{{trans('home.title')}}</a> &gt; 
	</li>
	<li>
		<a href="{{	route('product',['lang'=>app('translator')->getLocale()])}}">{{trans('service.title')}}</a> &gt; 
	</li>
	<li>@yield('field')</li>
</ul> -->