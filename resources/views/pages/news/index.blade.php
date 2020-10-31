@extends('layouts.sales')

@section('sales')
  <section id="about" class="access clearfix">
    <div id="cover"></div> {{-- <div id="cover"> --}}
      @section('field', trans('news.news-header'))
      @include('pages.news.breadcrumb')
    <div class="comTtl">
      <div class="pho" ></div> {{-- <div class="pho"> --}}
    </div> {{-- <div class="comTtl"> --}}
    <div class="whiteBox">
    <h5 class="lato">
              <!-- {{trans('news.news-title')}} -->
              <!-- <img src="{{url('assets/img/about/icon01.png')}}" alt=""> -->
    </h5>
    <div class="row">

     <div class="column">
      <div class="card ">
       <img src="{{ url('assets/img/news/news-1.jpg') }}" style="width: 100%" alt="">
        <div class="container">
          <h6>{{trans('news.news1-title')}}</h6>
          <br>
        <!--   <p style="text-align: left;color: #005E48; font-style: italic; font-size: 10px"> Created : Sunday,03-01-2019</p>
          <p style="text-align: justify;">{{trans('news.news1-body')}}
          <a style="color: red" href="{{  route('news.news-1',['lang'=>app('translator')->getLocale()])
          }}"> {{trans('news.news1-more')}}</a> 
          </p> -->
        </div>
      </div> 
    </div>

    <div class="column">
      <div class="card">
       <img src="{{ url('assets/img/news/news-2.jpg') }}" style="width: 100%" alt="">
        <div class="container">
          <h6>{{trans('news.news2-title')}}</h6>
          <br>
          <!-- <p style="text-align: left;color: #005E48; font-style: italic; font-size: 10px"> Created : Sunday,03-01-2019</p>
           <p style="text-align: justify;">{{trans('news.news2-body')}}
         <a style="color: red" href="{{  route('news.news-2',['lang'=>app('translator')->getLocale()])
          }}"> {{trans('news.news2-more')}}</a>  
          </p> -->
        </div>
      </div>
    </div>

     <div class="column">
      <div class="card">
       <img src="{{ url('assets/img/news/news-3.jpg') }}" style="width: 100%" alt="">
        <div class="container">
          <h6>{{trans('news.news3-title')}}</h6>
          <br>
       <!--    <p style="text-align: left;color: #005E48; font-style: italic; font-size: 10px"> Created : Sunday,03-01-2019</p>
            <p style="text-align: justify;">{{trans('news.news3-body')}}
          <a style="color: red" href="{{  route('news.news-3',['lang'=>app('translator')->getLocale()])
          }}"> {{trans('news.news3-more')}}</a> 
          </p> -->
        </div>
      </div>
    </div>  

    </div>

    </div> {{-- <div class="whiteBox"> --}}
  </section> {{-- <section id="about" class="access"> --}}
@endsection