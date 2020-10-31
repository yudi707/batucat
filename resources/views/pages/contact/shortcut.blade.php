<div class="comContact">
	<div class="comBox">
		<h3>
			{{trans('contact.shortcut-header')}}
		</h3>
		<p>
			{{trans('contact.shortcut-content1')}} <br class="sp">{{trans('contact.shortcut-content2')}}
		</p>
		<div class="link">
			<a class="col_btn" href="{{route('contact',['lang' => app('translator')->getLocale()])}}">
				{{trans('contact.shortcut-form')}}
			</a>
		</div>
	</div>
</div>