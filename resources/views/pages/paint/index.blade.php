@extends('layouts.about')

@section('about')
  <section id="about" class="access clearfix">
    <div id="cover"></div>
        @section('field', trans('paint.paint-sim'))
        @include('pages.paint.breadcrumb')
    <div class="comTtl">
      <div class="pho" ></div>
    </div>
    <div class="whiteBox">
        <h5 class="lalo">{{trans('about.paint-head')}}
        <div class="raw">
            <div class="calumn">
                <div class="cord ">
                <img src="{{ url('assets/img/feature/pic-ext.png') }}"  style="width: 100%" alt="">
                    <div class="container">
                        <a href="{{ route('paint.exterior',['lang'=>app('translator')->getLocale()])}}">{{trans('about.paint-eks')}}</a>
                    </div>
                </div>
            </div>
            <div class="calumn">
                <div class="cord">
                    <img src="{{ url('assets/img/feature/pic-int.png') }}" style="width: 100%" alt="">
                    <div class="container">
                        <a href="{{ route('paint.interior',['lang'=>app('translator')->getLocale()])}}">{{trans('about.paint-int')}}</a>
                    </div>
              </div>
            </div>
        </div>
        </h5>
    </div>
  </section>
@endsection
