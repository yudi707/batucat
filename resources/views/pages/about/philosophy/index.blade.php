@extends('layouts.about')

@section('about')
  <section id="about" class="access clearfix">
    <div id="cover"></div> {{-- <div id="cover"> --}}
      @section('field', trans('Company Philosophy'))
      @include('pages.about.breadcrumb')
    <div class="comTtl">
      <div class="pho" ></div> {{-- <div class="pho"> --}}
    </div> {{-- <div class="comTtl"> --}}
    <div class="whiteBox">
    <h5 class="lato">
              {{trans('about.company-philo')}}
              <!-- <img src="{{url('assets/img/about/icon01.png')}}" alt=""> -->
    </h5>
  <div class="wrap fadeInUp">
      <div class="card-com">
       <!-- <img src="{{ url('assets/img/about/RPI2.jpg') }}" style="width: 100%" alt=""> -->
        <div class="container">
          <h6 style="color: #005E48">{{trans('about.philo-header1')}}</h6>
          <br>
          <p>{{trans('about.header1-content')}}</p>
      <!--     <p>{{trans('Jakarta Barat, Indonesia')}}</p>
          <p>{{trans('Email: saripacific@gmail.com')}}</p>
            <p>{{trans('Telp: (021) 21213434')}}</p> -->
             <!-- <a href="tel:123-456-7890" target="_blank">
                <button>
                  <br>
                  <span>
                    <img src="{{ url('assets/img/about/phone.png') }}" style="width: 10%">
                  </span>
                </button>
            </a> -->
        </div>
      </div> 
      <br>
      <br>
    <!-- <div class="wrap fadeInUp"> -->
      <div class="card-com">
       <!-- <img src="{{ url('assets/img/about/RPI2.jpg') }}" style="width: 100%" alt=""> -->
        <div class="container">
          <h6 style="color: #005E48">{{trans('about.philo-header2')}}</h6>
          <br>
          <p>{{trans('about.header2-content1')}}</p>
          <p>{{trans('about.header2-content2')}}</p>
          <p>{{trans('about.header2-content3')}}</p>
            <!-- <p>{{trans('Telp: (021) 09028345')}}</p> -->
             <!-- <a href="tel:123-456-7890" target="_blank">
                <button>
                  <br>
                  <span>
                    <img src="{{ url('assets/img/about/phone.png') }}" style="width: 10%"> 
                  </span>
                </button>
            </a> -->
        </div>
      </div>

      <div class="card-com">
       <!-- <img src="{{ url('assets/img/about/RPI2.jpg') }}" style="width: 100%" alt=""> -->
        <div class="container">
          <h6 style="color: #005E48">{{trans('about.philo-header3')}}</h6>
          <br>
          <p>{{trans('about.header3-content1')}}</p>
          <p>{{trans('about.header3-content2')}}</p>
          <p>{{trans('about.header3-content3')}}</p>
          <p>{{trans('about.header3-content4')}}</p>
          <p>{{trans('about.header3-content5')}}</p>
          <p>{{trans('about.header3-content6')}}</p>
            <!--  <a href="tel:123-456-7890" target="_blank">
                <button>
                  <br>
                  <span>
                    <img src="{{ url('assets/img/about/phone.png') }}" style="width: 10%"> 
                  </span>
                </button>
            </a> -->
        </div>
      </div>

        </div> {{-- <div class="comBox textBox clearfix"> --}}
      </div> {{-- <div class="wrap fadeInUp" id="a01"> --}}
       @include('pages.about.menu')
    </div> {{-- <div class="whiteBox"> --}}
  </section> {{-- <section id="about" class="access"> --}}
@endsection