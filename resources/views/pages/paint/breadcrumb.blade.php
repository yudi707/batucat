<ul id="pagePath">
	<li>
		<a href="{{  route('home',['lang'=>app('translator')->getLocale()])
          }}">{{trans('paint.paint-home')}}</a> &gt;
	</li>

	<li>@yield('field')</li>
</ul>