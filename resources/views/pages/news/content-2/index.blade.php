@extends('layouts.about')

@section('about')
<section id="about" class="outline">
  <div id="cover"></div> {{-- <div id="cover"> --}}
   @section('field', trans('news.news2-title'))
<!--   <h2 class="heading02 lato">
    @yield('field')<br/><i class="fas fa-building"></i>
  </h2>
 -->  @include('pages.news.content-2.breadcrumb')
  <div class="comTtl">
    <div class="pho"></div> {{-- <div class="pho"> --}}
  </div> {{-- <div class="comTtl"> --}}
  <div class="whiteBox">
    <div class="wrap comBox">


 <body>

<div class="baris">
  <div class="kolom">
    <div class="cardo">
      <h3>{{trans('news.news2-title')}}</h3>
      <!-- <div class="fakeimg" style="height:200px;"></div> -->
      <img src="{{ url('assets/img/news/news-2.jpg') }}">
       <p style="text-align: left;color: #005E48; font-style: italic; font-size: 10px"> 
      Created : Sunday,03-01-2019
      </p> 
      <p style="text-align: justify;">

        {{trans('news.news1-content1')}}
          <br>
        {{trans('news.news1-content2')}}
          <br>
        {{trans('news.news1-content3')}}
          <br>
        {{trans('news.news1-content4')}}
          <br>
        {{trans('news.news1-content5')}}
      </p>

      </div>

  </div>
</div>

</body>
    </div> 

  </div> 
</section> 
@endsection