<ul id="pagePath">
	<li>
		<a href="{{  route('home',['lang'=>app('translator')->getLocale()])
          }}">{{trans('product.product-home')}}</a> &gt;
	</li>
	<li>
		<a href="{{  route('news',['lang'=>app('translator')->getLocale()])
          }}">{{trans('product.product-adhesive')}}</a> &gt;
	</li>
	<li>@yield('field')</li>
</ul>