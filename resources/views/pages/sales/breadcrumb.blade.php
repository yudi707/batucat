<ul id="pagePath">
	<li>
		<a href="{{	route('home',['lang'=>app('translator')->getLocale()])}}">{{trans('sales.sales-home')}}</a> &gt;
	</li>
	<li>@yield('field')</li>
</ul>