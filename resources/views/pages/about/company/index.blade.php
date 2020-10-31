@extends('layouts.about')

@section('about')
<section id="about" class="outline">
  <div id="cover"></div> {{-- <div id="cover"> --}}
   @section('field', trans('Company Outline'))
<!--   <h2 class="heading02 lato">
    @yield('field')<br/><i class="fas fa-building"></i>
  </h2>
 -->  @include('pages.about.breadcrumb')
  <div class="comTtl">
    <div class="pho"></div> {{-- <div class="pho"> --}}
  </div> {{-- <div class="comTtl"> --}}
  <div class="whiteBox">
    <div class="wrap comBox">
      <table class="fadeInUp" style="margin-bottom: 380px">
        <tbody>
          <tr>
            <th>{{trans('about.company-name')}}</th>
            <td>{{trans('about.name-content')}}</td>
          </tr>
          <tr>
            <th>{{trans('about.company-est')}}</th>
            <td>{{trans('about.est-content')}}</td>
          </tr>
          <tr>
            <th>{{trans('about.company-cap')}}</th>
            <td>{{trans('about.cap-content')}}</td>
          </tr>
          <tr>
            <th>{{trans('about.company-share')}}</th>
            <td>{{trans('about.share-content')}}</td>
          </tr>
          <tr>
            <th>{{trans('about.company-leader')}}</th>
            <td>{{trans('about.leader-content')}}</td>
          </tr>
          <tr>
            <th>{{trans('about.company-land')}}</th>
            <td>{{trans('about.land-content')}}</td>
          </tr>
          <tr>
            <th><!-- {{trans('about.office-loc')}} --></th>
            <td>
              <p>
                <!-- <b>{{trans('Main Office')}}</b><br>  -->
                {{trans('')}}<br class="sp"><!-- </iframe>Google Maps</a> -->
                        <div class="col-xs-4">
                                    <img src="{{ url('assets/img/onemake/campany/RPI.jpg') }}" alt="">
                        </div>
                                <div class="col-xs-8">
                                <h3 style="font-size: 4rem">{{trans('about.office-main')}}</h3>
                                    <!-- <p>{{trans('about.office-main-code')}}<br>  -->
                                    {{trans('about.office-main-add1')}}
                                    <br>
                                    {{trans('about.office-main-add2')}}
                                    <br>
                                    {{trans('about.office-main-add3')}}
                                    <br>
                                    TEL: +62-21-8911-4321
                                    <br>
                                    FAX: +62-267-845-6869<br />
                                    <!-- URL : <a href="https://goo.gl/maps/sYMpPZbXLgoLSgCt5">Map Location</a> -->
                                </div>
                                <br>


                        <div class="col-sm-6">
                            <div class="rep-office">
                                <div class="row">
                                      <div class="col-xs-4">
                                          <!-- <img src="{{ url('assets/img/onemake/campany/rpi2.jpg') }}" alt=""> -->
                                      </div>
                                  <div class="col-xs-8">
                                      <h3 style="font-size: 3rem">{{trans('about.office-rep')}}</h3>
                                    <!--   <p>{{trans('about.office-rep-code')}} <br> -->
                                      {{trans('about.office-rep-add1')}}
                                      <br>
                                      {{trans('about.office-rep-add2')}}
                                      <br>
                                      {{trans('about.office-rep-add3')}}
                                      <br>
                                      TEL: +62-21- 3983-5810
                                      <br>
                                      FAX: +62-21-3983-5812
                                      <br />
                                       <!-- URL : <a href="https://goo.gl/maps/95hajF6G6dSvYNVB8">Map Location</a></p> -->
                                  </div>
                               </div>
                            </div>
                        </div>
                          
                        <br>
                        <div class="col-sm-6">
                            <div class="tokyo-office">
                                <div class="row">
                                      <div class="col-xs-4">
                                         
                                      </div>
                                  <div class="col-xs-8">
                                      <h3 style="font-size: 3rem">{{trans('about.office-jpn')}}</h3>
                                      <!-- <p>{{trans('about.office-jpn-code')}} -->
                              <!--         <br> -->
                                      HP : <a href="www.rockpaint.co.jp">www.rockpaint.co.jp</a>
                                      <br>
                                      <!-- {{trans('about.office-jpn-add2')}} -->
                             
                                   <!--    Telp: 03-3640-6000<br /> -->
                                        <!-- {{trans('about.hq-hq')}} -->

                                <div class="row-about">
                                   <div class="column-about">
                                    <div class="card-about ">
                                     <img src="{{ url('assets/img/onemake/campany/honsya-office.jpg') }}" style="width: 100%" alt="">
                                      <div class="container">
                                        <h6 style="color: #005E48; font-size: 2.1rem">{{trans('about.head-osaka')}}</h6>
                                        <br>
                                        <p>{{trans('about.postal-osaka')}}</p>

                                        <p>{{trans('about.add-osaka')}}</p>
                                        <p>{{trans('Telp: 06-6473-1551')}}</p>
                                      </div>
                                    </div> 
                                  </div>

                                  <div class="column-about">
                                    <div class="card-about">

                                     <img src="{{ url('assets/img/onemake/campany/tokyo-office.jpg') }}" 

                                     style="width: 100%" alt="">
                                      
                                      <div class="container">
                                        <h6 style="color: #005E48;font-size: 2.1rem">{{trans('about.head-tokyo')}}</h6>
                                        <br>
                                        <p>{{trans('about.postal-tokyo')}}</p>
                                        <p>{{trans('about.add-tokyo')}}</p>
                                        <p>{{trans('Telp: 03-3640-6000')}}</p>
                                      </div>
                                    </div>
                                     <!-- <img src="{{ url('assets/img/onemake/campany/headquarter.png') }}" alt=""> -->
                                  </div>
                                 
                                </div>
                               </div>
                            </div>
                        </div>
                  
          </tr>              
        </tbody>
      </table>
    </div> {{-- <div class="wrap comBox"> --}}
    @include('pages.about.menu')
  </div> {{-- <div class="whiteBox"> --}}
</section> {{-- <section id="about" class="outline"> --}}
@endsection