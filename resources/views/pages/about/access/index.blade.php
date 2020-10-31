@extends('layouts.about')

@section('about')
  <section id="about" class="access clearfix">
    <div id="cover"></div> {{-- <div id="cover"> --}}
      @section('field', trans('Access'))

      @include('pages.about.breadcrumb')
    <div class="comTtl">
      <div class="pho"></div> {{-- <div class="pho"> --}}
    </div> {{-- <div class="comTtl"> --}}
    <div class="whiteBox">
      <div class="wrap fadeInUp" id="a01">
        <h4 class="heading04">
          {{trans('about.main-office-01')}}<BR>
          {{trans('about.main-office-02')}}<BR>
          {{trans('about.main-office-03')}}
        </h4>
        <div class="map">
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="820" height="380" id="gmap_canvas" 
                src="https://maps.google.com/maps?q=rockpaint%20indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
              </iframe>
              <a href=""></a>
            </div> {{-- <div class="gmap_canvas"> --}}
            <style>
              .mapouter{position:relative;text-align:right;height:100%;width:100%;}
              .gmap_canvas {overflow:hidden;background:none!important;/*height:380px;width:820px;*/}
            </style>
          </div> {{-- <div class="mapouter"> --}}
        </div> {{-- <div class="map"> --}}
        <p class="link">
          <a class="more" 
            href="https://www.google.com/maps/place/PT.+Rock+Paint+Indonesia+Head+Office+%26+Karawang+Factory/@-6.372029,107.2945303,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6975fbd063370d:0xfae6d1204c44856d!8m2!3d-6.372029!4d107.296719?hl=en-US" 
            target="_blank">
            Google Maps
          </a>
        </p>
        <div class="comBox textBox clearfix">
          <dl class="lBox">
            <!-- <dt>{{trans('about.main-office')}}</dt> -->
            <dd>
             <!--  {{trans('about.main-content1')}} -->
              <br> {{trans('about.main-content2')}}
              <br> {{trans('about.main-content3')}}
              <br> {{trans('about.main-content4')}}
              <br> {{trans('about.main-content5')}}
              <br> {{trans('about.main-content6')}}
            </dd>
          </dl>
        </div> {{-- <div class="comBox textBox clearfix"> --}}
      </div> {{-- <div class="wrap fadeInUp" id="a02"> --}}
          <div class="wrap fadeInUp" id="a02">
        <h4 class="heading04">
            {{trans('about.access-header2')}}<BR>
            {{trans('about.access-header3')}}
        </h4>
        <div class="map">
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="820" height="380" id="gmap_canvas" 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63462.87661248649!2d106.80338378325509!3d-6.2069026777765695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f423d6258cbb%3A0xcf3747570e08633b!2sWisma%20Nusantara!5e0!3m2!1sid!2sid!4v1594284820771!5m2!1sid!2sid" width="820" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
              </iframe>
              <a href=""></a>
            </div> {{-- <div class="gmap_canvas"> --}}
            <style>
              .mapouter{position:relative;text-align:right;height:100%;width:100%;}
              .gmap_canvas {overflow:hidden;background:none!important;/*height:380px;width:820px;*/}
            </style>
          </div> {{-- <div class="mapouter"> --}}
        </div> {{-- <div class="map"> --}}
        <p class="link">
          <a class="more" 
            href="https://www.google.com/maps/place/Wisma+Nusantara/@-6.1934314,106.8216616,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f423d6258cbb:0xcf3747570e08633b!8m2!3d-6.1934314!4d106.8238503?hl=en-US" 
            target="_blank">
            Google Maps
          </a>
        </p>
        <div class="comBox textBox clearfix">
          <dl class="lBox">
            <!-- <dt>{{trans('about.rep-content1')}}</dt> -->
            <dd>
          <!--     {{trans('about.rep-content2')}} -->
              <br> {{trans('about.rep-content3')}}
              <br> {{trans('about.rep-content4')}}
              <br> {{trans('about.rep-content5')}}
              <br> {{trans('about.rep-content6')}}
              <br> {{trans('about.rep-content7')}}
            </dd>
          </dl>
        </div> {{-- <div class="comBox textBox clearfix"> --}}
      </div> {{-- <div class="wrap fadeInUp" id="a01"> --}}
      @include('pages.about.menu')
    </div> {{-- <div class="whiteBox"> --}}
  </section> {{-- <section id="about" class="access"> --}}
@endsection