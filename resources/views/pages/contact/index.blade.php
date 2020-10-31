@extends('layouts.contact')

@section('contact')
<section id="contact">
	<div id="cover"></div> {{-- <div id="cover"> --}}
	<div class="sec01">
		<h2 class="heading01 roboto">{{trans('contact.title')}}</h2>
		<iframe style="border: 0" width="100%" height="1650px" 
				frameborder="0" allowtransparency="true" type="text/html" 
				src="https://docs.google.com/forms/d/e/1FAIpQLSeRLh0oB6qSX67J9tmXVJxHXlnnmzSmVvAwbtw05G17-uX-qg/viewform">
		</iframe>
	</div> {{-- <div class="sec01"> --}}
	 <!-- @include('pages.contact.shortcut') -->
</section> {{-- <section id="contact"> --}}
@endsection