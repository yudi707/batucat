<ul id="pagePath">
	<li>
		<a href="{{	route('home',['lang'=>app('translator')->getLocale()])}}">{{trans('about.menu1')}}</a> &gt;
	</li>
	<li>
		<a href="{{	route('about',['lang'=>app('translator')->getLocale()])}}">{{trans('about.menu2')}}</a> &gt;
	</li>
	<li>@yield('field')</li>
</ul>