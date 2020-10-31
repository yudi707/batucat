@extends('layouts.about')

@section('about')
<section id="about" class="outline">
  <div id="cover"></div> {{-- <div id="cover"> --}}
   @section('field', trans('csr.csr-header'))
<!--   <h2 class="heading02 lato">
    @yield('field')<br/><i class="fas fa-building"></i>
  </h2>
 -->  @include('pages.csr.breadcrumb')
  <div class="comTtl">
    <div class="pho"></div> {{-- <div class="pho"> --}}
  </div> {{-- <div class="comTtl"> --}}
  <div class="whiteBox">
    <div class="wrap comBox">


 <body>

<div class="baris">
  <div class="kolom">
    <div class="cardo">
      <h3>{{trans('csr.csr-header')}}</h3>
      <!-- <div class="fakeimg" style="height:200px;"></div> -->
      <img src="{{ url('assets/img/about/csr-banner.jpg') }}">
      <h4>{{trans('csr.csr-body1')}}</h4>
      <p style="text-align: justify;">{{trans('csr.csr-content1')}}</p>

      <h4>{{trans('csr.csr-body2')}}</h4>
      <p style="text-align: justify;">{{trans('csr.csr-content2')}}.</p>

    </div>

  </div>
</div>

</body>
    </div> 

  </div> 
</section> 
@endsection