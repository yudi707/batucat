@extends('layouts.sales')

@section('sales')
  <section id="about" class="access clearfix">
    <div id="cover"></div> {{-- <div id="cover"> --}}
      @section('field', trans('sales.sales-header'))
      @include('pages.sales.breadcrumb')
    <div class="comTtl">
      <div class="pho" ></div> {{-- <div class="pho"> --}}
    </div> {{-- <div class="comTtl"> --}}
    <div class="whiteBox">
    <h5 class="lato">
              {{trans('sales.sales-dis')}}
              <!-- <img src="{{url('assets/img/about/icon01.png')}}" alt=""> -->
    </h5>
    <div class="row">

     <div class="column">
      <div class="card ">
       <img src="{{ url('assets/img/about/RPI2.jpg') }}" style="width: 100%" alt="">
        <div class="container">
          <h6 style="color: #005E48">{{trans('KAERO PRIMA INDONESIA')}}</h6>
          <br>
          <p>{{trans('Kawasan The Central 88unit TG831, Jl. Trembes Blok D3')}}</p>
          <p>{{trans('Pademangan Timur, Jakarta Utara')}}</p>
          <br>
          <p style="font-size: 20px; font-weight: bold; color: #005E48">{{('Contact')}}</p>
          <p>{{trans('Email: Kaeroprima@gmail.com')}}</p>
               <a href="mailto: Kaeroprima@gmail.com" target="_blank">
                <button>
                  <br>
                  <span>
                    <img src="{{ url('assets/img/about/mail.png') }}" style="width: 10%"> 
                  </span>
                </button>
            </a>
            <p>{{trans('TEL: +62-21-2260-8352')}}
              <a href="tel:021-2260-8352" target="_blank">
                <button>
                  <br>
                  <span>
                    <img src="{{ url('assets/img/about/phone.png') }}" style="width: 10%">
                  </span>
                </button>
            </a>
            </p>
            <p>{{trans('WA: +62-819-5317-0533')}}
              <a href="https://api.whatsapp.com/send?phone=+6281953170533&text=Halo, saya ingin bertanya tentang produk rockpaint." target="_blank">
                <button>
                  <br>
                  <span>
                    <img src="{{ url('assets/img/about/wa.png') }}" style="width: 10%">
                  </span>
                </button>
            </a>
            </p> 
        </div>
      </div> 
    </div>

    <div class="column">
      <div class="card">
       <img src="{{ url('assets/img/about/RPI2.jpg') }}" style="width: 100%" alt="">
        <div class="container">
          <h6 style="color: #005E48">{{trans('PT. MADJU UTAMA')}}</h6>
          <br>
          <p>{{trans('JL. Raya Kalimalang No.9 D-E Kayuringin-Bekasi')}}</p>
          <p>{{trans('Jawa Barat, Indonesia')}}</p>
          <br>
          <p style="font-size: 20px; font-weight: bold; color: #005E48">{{('Contact')}}</p>
          <p>{{trans('Email: rtriyanggono@gmail.com')}}</p>
              <a href="mailto: rtriyanggono@gmail.com" target="_blank">
                <button>
                  <br>
                  <span>
                    <img src="{{ url('assets/img/about/mail.png') }}" style="width: 10%"> 
                  </span>
                </button>
            </a>
          <p>{{trans('TEL : +62-21-886-8461')}}
              <a href="tel:021-886-8461" target="_blank">
                <button>
                  <br>
                  <span>
                    <img src="{{ url('assets/img/about/phone.png') }}" style="width: 10%"> 
                  </span>
                </button>
            </a>
            </p>
            <p>{{trans('WA : +62-812-1999-883')}}</p>
            <p>{{trans('+62-812-9034-5437')}}</p>
            <p>{{trans('+62-812-9433-6468')}}</p>
          
             <a href="https://api.whatsapp.com/send?phone=+628121999883&text=Halo, saya ingin bertanya tentang produk rockpaint." target="_blank">
                <button>
                  <br>
                  <span>
                    <img src="{{ url('assets/img/about/wa.png') }}" style="width: 10%">
                  </span>
                </button>
            </a>
       
        </div>
      </div>
    </div>

  <!--       <div class="column">
      <div class="card">
       <img src="{{ url('assets/img/about/RPI2.jpg') }}" style="width: 100%" alt="">
        <div class="container">
          <h6>{{trans('INDO RAYA PAINT')}}</h6>
          <br>
          <p>{{trans('JL. Ahmad Dahlan No.25, Sleman')}}</p>
          <p>{{trans('Yogyakarta, Indonesia')}}</p>
          <p>{{trans('Email: rayapaint@gmail.com')}}</p>
            <p>{{trans('Telp: (021) 09028334')}}</p>
             <a href="tel:123-456-7890" target="_blank">
                <button>
                  <br>
                  <span>
                    <img src="{{ url('assets/img/about/phone.png') }}" style="width: 10%"> 
                  </span>
                </button>
            </a>
        </div>
      </div>
    </div> -->

    </div>

    </div> {{-- <div class="whiteBox"> --}}
  </section> {{-- <section id="about" class="access"> --}}
@endsection