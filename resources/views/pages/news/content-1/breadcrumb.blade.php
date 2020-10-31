<ul id="pagePath">
	<li>
		<a href="{{  route('home',['lang'=>app('translator')->getLocale()])
          }}">{{trans('news.news-home')}}</a> &gt;
	</li>
	<li>
		<a href="{{  route('news',['lang'=>app('translator')->getLocale()])
          }}">{{trans('news.news-header')}}</a> &gt;
	</li>
	<li>@yield('field')</li>
</ul>