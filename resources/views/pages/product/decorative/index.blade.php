@extends('layouts.product')

@section('product')
	<section id="service" class="entry">
		<div id="cover"></div> {{-- <div id="cover"> --}}
            @section('field', trans('product.product-title-two'))
            @include('pages.product.decorative.breadcrumb')
        <header>
             <h1>{{trans('product.decorative-header1')}}</h1>
        </header>
    <body>
    <div class="entry_body">
            <p>{{trans('product.decorative-exp')}}</p>
    </div>
    <div class="badan"> 
    		<div class="list-produk">
            	<img src="{{ url ('assets/img/onemake/product/cat/super-vinyrock.jpg') }}" alt="paint5">
 	        	<h5>{{trans('product.deco1-header1')}}</h5>
                    <a class="disabled tombol1 tombol-exterior" > {{trans('product.deco1-tag1')}}</a>
                    <a class="disabled tombol1 tombol-interior" >{{trans('product.deco1-tag2')}}</a>
                    <a class="tombol tombol-detail"href="#popup1">{{trans('product.deco1-button1')}}</a>

                    <a class="tombol tombol-download" href="{{ url ('assets/img/onemake/product/cat/super-vinyrock.pdf') }}" target="_blank" download>{{trans('product.deco1-button2')}}</a>
       
        	</div>
            <div id="popup1" class="overlay">
                <div class="popup">
                    <h2>{{trans('product.deco1-detail2')}}</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <p>{{trans('product.deco1-detail1')}}</p>
                        <h3>{{trans('product.deco1-detail3-1')}} 
                        <br>     
                        {{trans('product.deco1-detail3')}}
                        <br>     
                        {{trans('product.deco1-detail4')}}
                        <br>    
                        {{trans('product.deco1-detail5')}}</h3>
                        <br>

                        <h2>{{trans('product.deco1-detail6')}}</h2>
                         <h3>{{trans('product.deco1-detail7')}}</h3>
                          <h3>{{trans('product.deco1-detail8')}}</h3>
                           <h3>{{trans('product.deco1-detail9')}}</h3>
                            <h3>{{trans('product.deco1-detail10')}}</h3>
                             <h3>{{trans('product.deco1-detail11')}}</h3>
                              <h3>{{trans('product.deco1-detail12')}}</h3>
                        <br>
                        <h2>{{trans('product.deco1-detail13')}}</h2>
                         <h3>{{trans('product.deco1-detail14')}}</h3>
                          <h3>{{trans('product.deco1-detail15')}}</h3>
                           <h3>{{trans('product.deco1-detail16')}}</h3>
                        <br>
                        <h2>{{trans('product.deco1-detail17')}}</h2>
                         <h3>{{trans('product.deco1-detail18')}}</h3>
                          <h3>{{trans('product.deco1-detail19')}}</h3>
                           <h3>{{trans('product.deco1-detail20')}}</h3>
                            <h3>{{trans('product.deco1-detail21')}}</h3>
                             <h3>{{trans('product.deco1-detail22')}}</h3>
                        <br>
                        <h2>{{trans('product.deco1-detail23')}}</h2>
                         <h3>{{trans('product.deco1-detail24')}}</h3>
                          <h3>{{trans('product.deco1-detail25')}}</h3>
                           <h3>{{trans('product.deco1-detail26')}}</h3>
                            <h3>{{trans('product.deco1-detail27')}}</h3>
                             <h3>{{trans('product.deco1-detail28')}}</h3>
                    </div>
                </div>
            </div>

            <div class="list-produk">
                <img src="{{ url ('assets/img/onemake/product/cat/simply-clean.jpg') }}" alt="paint5">
                <h5>{{trans('product.deco2-header1')}}</h5>
                      <a class="disabled tombol1 tombol-exterior"> {{trans('product.deco1-tag1')}}</a>
                        <a class="disabled tombol1 tombol-interior">{{trans('product.deco1-tag2')}}</a>
                        <a class="tombol tombol-detail"href="#popup2">{{trans('product.deco2-button1')}}</a> 
                        <a class="tombol tombol-download" href="{{ url ('assets/img/onemake/product/cat/simply-clean.pdf') }}" target="_blank" download>{{trans('product.deco1-button2')}}</a>
                <!-- simply clean/interior --> 
            </div>
            <div id="popup2" class="overlay">
                <div class="popup">
                    <h2>{{trans('product.deco2-detail2')}}</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <p>{{trans('product.deco2-detail1')}}</p>
                        <h3>{{trans('product.deco2-detail3-1')}} 
                        <br>     
                        {{trans('product.deco2-detail3')}}
                        <br>     
                        {{trans('product.deco2-detail4')}}
                        <br>
                        {{trans('product.deco2-detail4-1')}}
                        <br>    
                        {{trans('product.deco2-detail5')}}</h3>
                        <br>

                        <h2>{{trans('product.deco2-detail6')}}</h2>
                         <h3>{{trans('product.deco2-detail7')}}</h3>
                          <h3>{{trans('product.deco2-detail8')}}</h3>
                           <h3>{{trans('product.deco2-detail9')}}</h3>
                            <h3>{{trans('product.deco2-detail10')}}</h3>
                             <h3>{{trans('product.deco2-detail11')}}</h3>
                              <h3>{{trans('product.deco2-detail12')}}</h3>
                        <br>
                        <h2>{{trans('product.deco2-detail13')}}</h2>
                         <h3>{{trans('product.deco2-detail14')}}</h3>
                          <h3>{{trans('product.deco2-detail15')}}</h3>
                           <h3>{{trans('product.deco2-detail16')}}</h3>
                        <br>
                        <h2>{{trans('product.deco2-detail17')}}</h2>
                         <h3>{{trans('product.deco2-detail18')}}</h3>
                          <h3>{{trans('product.deco2-detail19')}}</h3>
                           <h3>{{trans('product.deco2-detail120')}}</h3>
                            <h3>{{trans('product.deco2-detail21')}}</h3>
                             <h3>{{trans('product.deco2-detail22')}}</h3>
                        <br>
                        <h2>{{trans('product.deco2-detail23')}}</h2>
                         <h3>{{trans('product.deco2-detail24')}}</h3>
                          <h3>{{trans('product.deco2-detail25')}}</h3>
                           <h3>{{trans('product.deco2-detail26')}}</h3>
                            <h3>{{trans('product.deco2-detail27')}}</h3>
                             <h3>{{trans('product.deco2-detail28')}}</h3>
                              <h3>{{trans('product.deco2-detail29')}}</h3>
                    </div>
                </div>
            </div>

            <div class="list-produk">
                <img src="{{ url ('assets/img/onemake/product/cat/stone-tex.jpg') }}" alt="paint5">
                <h5>{{trans('product.deco3-header1')}}</h5>
                      <a class="disabled tombol1 tombol-exterior" > {{trans('product.deco1-tag1')}}</a>
                        <a class="disabled tombol1 tombol-interior">{{trans('product.deco1-tag2')}}</a>
                        <a class="tombol tombol-detail"href="#popup3">{{trans('product.deco3-button1')}}</a> 
                        <a class="tombol tombol-download" href="{{ url ('assets/img/onemake/product/cat/stone-tex.pdf') }}" target="_blank" download>{{trans('product.deco1-button2')}}</a>
                <!-- stone tex/interior --> 
            </div>
            <div id="popup3" class="overlay">
                <div class="popup">
                    <h2>{{trans('product.deco3-detail2')}}</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <p>{{trans('product.deco3-detail1')}}</p>
                        <h3>{{trans('product.deco3-detail3-1')}} 
                        <br>     
                        {{trans('product.deco3-detail3')}}
                        <br>     
                        {{trans('product.deco3-detail4')}}
                        <br>    
                        {{trans('product.deco3-detail5')}}</h3>
                        <br>

                        <h2>{{trans('product.deco3-detail6')}}</h2>
                         <h3>{{trans('product.deco3-detail7')}}</h3>
                          <h3>{{trans('product.deco3-detail8')}}</h3>
                           <h3>{{trans('product.deco3-detail10')}}</h3>
                            <h3>{{trans('product.deco3-detail11')}}</h3>
                             <h3>{{trans('product.deco3-detail12')}}</h3>
                        <br>
                        <h2>{{trans('product.deco3-detail13')}}</h2>
                          <h3>{{trans('product.deco3-detail15')}}</h3>
                           <h3>{{trans('product.deco3-detail16')}}</h3>
                        <br>
                        <h2>{{trans('product.deco3-detail17')}}</h2>
                         <h3>{{trans('product.deco3-detail18')}}</h3>
                          <h3>{{trans('product.deco3-detail19')}}</h3>
                           <h3>{{trans('product.deco3-detail20')}}</h3>
                            <h3>{{trans('product.deco3-detail21')}}</h3>
                             <h3>{{trans('product.deco3-detail22')}}</h3>
                        <br>
                        <h2>{{trans('product.deco3-detail23')}}</h2>
                         <h3>{{trans('product.deco3-detail24')}}</h3>
                          <h3>{{trans('product.deco3-detail25')}}</h3>
                           <h3>{{trans('product.deco3-detail26')}}</h3>
                            <h3>{{trans('product.deco3-detail27')}}</h3>
                             <h3>{{trans('product.deco3-detail28')}}</h3>
                              <h3>{{trans('product.deco3-detail29')}}</h3>
                               <h3>{{trans('product.deco3-detail30')}}</h3>
                                <h3>{{trans('product.deco3-detail31')}}</h3>
                                 <h3>{{trans('product.deco3-detail32')}}</h3>
                                  <h3>{{trans('product.deco3-detail33')}}</h3>
                    </div>
                </div>
            </div>
 

        <div class="list-produk">
                <img src="{{ url ('assets/img/onemake/product/cat/Fancy.jpg') }}" alt="paint5">
                <h5>{{trans('product.deco4-header1')}}</h5>
                      <a class="disabled tombol1 tombol-exterior" > {{trans('product.deco1-tag1')}}</a>
                        <a class="disabled tombol1 tombol-interior">{{trans('product.deco1-tag2')}}</a>
                        <a class="tombol tombol-detail"href="#popup4">{{trans('product.deco4-button1')}}</a> 
                        <a class="tombol tombol-download" href="{{ url ('assets/img/onemake/product/cat/fancy.pdf') }}" target="_blank" download>{{trans('product.deco1-button2')}}</a>
                <!-- fancy / interior --> 
            </div>
            <div id="popup4" class="overlay">
                <div class="popup">
                    <h2>{{trans('product.deco4-detail2')}}</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <p>{{trans('product.deco4-detail1')}}</p>
                        <h3>{{trans('product.deco4-detail3-1')}} 
                        <br>     
                        {{trans('product.deco4-detail3')}}
                        <br>     
                        {{trans('product.deco4-detail4')}}
                        <br>    
                        {{trans('product.deco4-detail5')}}</h3>
                        <br>

                        <h2>{{trans('product.deco4-detail6')}}</h2>
                         <h3>{{trans('product.deco4-detail7')}}</h3>
                          <h3>{{trans('product.deco4-detail8')}}</h3>
                            <h3>{{trans('product.deco4-detail10')}}</h3>
                             <h3>{{trans('product.deco4-detail11')}}</h3>
                              <h3>{{trans('product.deco4-detail12')}}</h3>
                        <br>
                        <h2>{{trans('product.deco4-detail13')}}</h2>
                         <h3>{{trans('product.deco4-detail14')}}</h3>
                          <h3>{{trans('product.deco4-detail15')}}</h3>
                           <h3>{{trans('product.deco4-detail16')}}</h3>
                        <br>
                        <h2>{{trans('product.deco4-detail17')}}</h2>
                         <h3>{{trans('product.deco4-detail18')}}</h3>
                          <h3>{{trans('product.deco4-detail19')}}</h3>
                           <h3>{{trans('product.deco4-detail120')}}</h3>
                            <h3>{{trans('product.deco4-detail21')}}</h3>
                             <h3>{{trans('product.deco4-detail22')}}</h3>
                        <br>
                        <h2>{{trans('product.deco4-detail23')}}</h2>
                         <h3>{{trans('product.deco4-detail24')}}</h3>
                          <h3>{{trans('product.deco4-detail25')}}</h3>
                           <h3>{{trans('product.deco4-detail26')}}</h3>
                            <h3>{{trans('product.deco4-detail27')}}</h3>
                             <h3>{{trans('product.deco4-detail28')}}</h3>
                              <h3>{{trans('product.deco4-detail29')}}</h3>
                    </div>
                </div>
            </div>
 
             <div class="list-produk">
                <img src="{{ url ('assets/img/onemake/product/cat/1k-yumerock.jpg') }}" alt="paint5">
                <h5>{{trans('product.deco5-header1')}}</h5>
                      <a class="disabled tombol1 tombol-exterior" > {{trans('product.deco1-tag1')}}</a>
                        <a class="disabled tombol1 tombol-interior">{{trans('product.deco1-tag2')}}</a>
                        <a class="tombol tombol-detail"href="#popup5">{{trans('product.deco5-button1')}}</a> 
                        <a class="tombol tombol-download" href="{{ url ('assets/img/onemake/product/cat/1k-yumerock.pdf') }}" target="_blank" download>{{trans('product.deco1-button2')}}</a>
                <!-- 1K yumerock / interior--> 
            </div>
            <div id="popup5" class="overlay">
                <div class="popup">
                    <h2>{{trans('product.deco5-detail2')}}</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <p>{{trans('product.deco5-detail1')}}</p>
                        <h3>{{trans('product.deco5-detail3-1')}} 
                        <br>     
                        {{trans('product.deco5-detail3')}}
                        <br>     
                        {{trans('product.deco5-detail4')}}
                        <br>    
                        {{trans('product.deco5-detail5')}}</h3>
                        <br>

                        <h2>{{trans('product.deco5-detail6')}}</h2>
                         <h3>{{trans('product.deco5-detail7')}}</h3>
                          <h3>{{trans('product.deco5-detail8')}}</h3>
                           <h3>{{trans('product.deco5-detail10')}}</h3>
                            <h3>{{trans('product.deco5-detail11')}}</h3>
                             <h3>{{trans('product.deco5-detail12')}}</h3>
                        <br>
                        <h2>{{trans('product.deco5-detail13')}}</h2>
                         <h3>{{trans('product.deco5-detail14')}}</h3>
                          <h3>{{trans('product.deco5-detail15')}}</h3>
                           <h3>{{trans('product.deco5-detail16')}}</h3>
                        <br>
                        <h2>{{trans('product.deco5-detail17')}}</h2>
                         <h3>{{trans('product.deco5-detail18')}}</h3>
                          <h3>{{trans('product.deco5-detail19')}}</h3>
                           <h3>{{trans('product.deco5-detail20')}}</h3>
                            <h3>{{trans('product.deco5-detail21')}}</h3>
                             <h3>{{trans('product.deco5-detail22')}}</h3>
                        <br>
                        <h2>{{trans('product.deco5-detail23')}}</h2>
                         <h3>{{trans('product.deco5-detail24')}}</h3>
                          <h3>{{trans('product.deco5-detail25')}}</h3>
                           <h3>{{trans('product.deco5-detail26')}}</h3>
                            <h3>{{trans('product.deco5-detail27')}}</h3>
                             <h3>{{trans('product.deco-detail28')}}</h3>
                             <br>
                              <h3>{{trans('product.deco5-detail29')}}</h3>
                               <h3>{{trans('product.deco5-detail30')}}</h3>
                               <br>
                                <h3>{{trans('product.deco5-detail31')}}</h3>
                                 <h3>{{trans('product.deco5-detail32')}}</h3>
                              
                    </div>
                </div>
            </div>


            <div class="list-produk">
                <img src="{{ url ('assets/img/onemake/product/cat/hyper-vinirock-shield.jpg') }}" alt="paint5">
                <h5>{{trans('product.deco6-header1')}}</h5>
                      <a class="disabled tombol1 tombol-exterior" > {{trans('product.deco1-tag1')}}</a>
                        <a class="disabled tombol1 tombol-interior" >{{trans('product.deco1-tag2')}}</a>
                        <a class="tombol tombol-detail"href="#popup6">{{trans('product.deco6-button1')}}</a> 
                        <a class="tombol tombol-download" href="{{ url ('assets/img/onemake/product/cat/hyper-vinyrock-seal.pdf') }}" target="_blank" download>{{trans('product.deco1-button2')}}</a>
                <!-- hyper vinirock shield / interior --> 
            </div>
            <div id="popup6" class="overlay">
                <div class="popup">
                    <h2>{{trans('product.deco6-detail2')}}</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <p>{{trans('product.deco6-detail1')}}</p>
                        <h3>{{trans('product.deco6-detail3-1')}} 
                        <br>     
                        {{trans('product.deco6-detail3')}}
                        <br>     
                        {{trans('product.deco6-detail4')}}
                        <br>    
                        {{trans('product.deco6-detail4-1')}}
                        <br>  
                        {{trans('product.deco6-detail5')}}</h3>
                        <br>

                        <h2>{{trans('product.deco6-detail6')}}</h2>
                         <h3>{{trans('product.deco6-detail7')}}</h3>
                          <h3>{{trans('product.deco6-detail8')}}</h3>
                            <h3>{{trans('product.deco6-detail10')}}</h3>
                             <h3>{{trans('product.deco6-detail10-1')}}</h3>
                              <h3>{{trans('product.deco6-detail11')}}</h3>
                               <h3>{{trans('product.deco6-detail12')}}</h3>
                        <br>
                        <h2>{{trans('product.deco6-detail13')}}</h2>
                         <h3>{{trans('product.deco6-detail14')}}</h3>
                          <h3>{{trans('product.deco6-detail15')}}</h3>
                           <h3>{{trans('product.deco6-detail16')}}</h3>
                        <br>
                        <h2>{{trans('product.deco6-detail17')}}</h2>
                         <h3>{{trans('product.deco6-detail18')}}</h3>
                          <h3>{{trans('product.deco6-detail19')}}</h3>
                           <h3>{{trans('product.deco6-detail120')}}</h3>
                            <h3>{{trans('product.deco6-detail21')}}</h3>
                             <h3>{{trans('product.deco6-detail22')}}</h3>
                        <br>
                        <h2>{{trans('product.deco6-detail23')}}</h2>
                         <h3>{{trans('product.deco6-detail24')}}</h3>
                          <h3>{{trans('product.deco6-detail25')}}</h3>
                           <h3>{{trans('product.deco6-detail26')}}</h3>
                            <h3>{{trans('product.deco6-detail27')}}</h3>
                             <h3>{{trans('product.deco6-detail28')}}</h3>
                              <h3>{{trans('product.deco6-detail29')}}</h3>
                    </div>
                </div>
            </div>


      <div class="list-produk">
                <img src="{{ url ('assets/img/onemake/product/cat/vinyrock-1000.jpg') }}" alt="paint5">
                <h5>{{trans('product.deco7-header1')}}</h5>
                        <a class="disabled tombol1 tombol-non1"> <!-- {{trans('product.deco1-tag1')}} --></a>
                        <a class="disabled tombol1 tombol-interior" >{{trans('product.deco1-tag2')}}</a>   
                        <a class="tombol tombol-detail"href="#popup7">{{trans('product.deco7-button1')}}</a> 
                        <a class="tombol tombol-download" href="{{ url ('assets/img/onemake/product/cat/vinyrock-1000.pdf') }}" target="_blank" download>{{trans('product.deco1-button2')}}</a>
                <!-- vinirock1000/interior --> 
            </div>
            <div id="popup7" class="overlay">
                <div class="popup">
                    <h2>{{trans('product.deco7-detail2')}}</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <p>{{trans('product.deco7-detail1')}}</p>
                        <h3>{{trans('product.deco7-detail3-1')}} 
                        <br>     
                        {{trans('product.deco7-detail3')}}
                        <br>     
                        {{trans('product.deco7-detail4')}}
                        <br>    
                        {{trans('product.deco7-detail5')}}</h3>
                        <br>

                        <h2>{{trans('product.deco7-detail6')}}</h2>
                         <h3>{{trans('product.deco7-detail7')}}</h3>
                          <h3>{{trans('product.deco7-detail8')}}</h3>
                            <h3>{{trans('product.deco7-detail10')}}</h3>
                              <h3>{{trans('product.deco7-detail11')}}</h3>
                               <h3>{{trans('product.deco7-detail12')}}</h3>
                        <br>
                        <h2>{{trans('product.deco7-detail13')}}</h2>
                         <h3>{{trans('product.deco7-detail14')}}</h3>
                          <h3>{{trans('product.deco7-detail15')}}</h3>
                           <h3>{{trans('product.deco7-detail16')}}</h3>
                        <br>
                        <h2>{{trans('product.deco7-detail17')}}</h2>
                         <h3>{{trans('product.deco7-detail18')}}</h3>
                          <h3>{{trans('product.deco7-detail19')}}</h3>
                           <h3>{{trans('product.deco7-detail120')}}</h3>
                            <h3>{{trans('product.deco7-detail21')}}</h3>
                             <h3>{{trans('product.deco7-detail22')}}</h3>
                        <br>
                        <h2>{{trans('product.deco7-detail23')}}</h2>
                         <h3>{{trans('product.deco7-detail24')}}</h3>
                          <h3>{{trans('product.deco7-detail25')}}</h3>
                           <h3>{{trans('product.deco7-detail26')}}</h3>
                            <h3>{{trans('product.deco7-detail27')}}</h3>
                             <h3>{{trans('product.deco7-detail28')}}</h3>
                              <h3>{{trans('product.deco7-detail29')}}</h3>
                    </div>
                </div>
            </div>

            <div class="list-produk">
                <img src="{{ url ('assets/img/onemake/product/cat/cationic-sealer.jpg') }}" alt="paint5">
                <h5>{{trans('product.deco8-header1')}}</h5>
                      <a class="disabled tombol1 tombol-exterior" > {{trans('product.deco1-tag1')}}</a>
                        <a class="disabled tombol1 tombol-interior">{{trans('product.deco1-tag2')}}</a>
                        <a class="tombol tombol-detail"href="#popup8">{{trans('product.deco8-button1')}}</a> 
                        <a class="tombol tombol-download" href="{{ url ('assets/img/onemake/product/cat/vinyrock-cationic-sealer.pdf') }}" target="_blank" download>{{trans('product.deco1-button2')}}</a>
                <!-- vinirock cationic sealer/interior --> 
            </div>
            <div id="popup8" class="overlay">
                <div class="popup">
                   <h2>{{trans('product.deco8-detail2')}}</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <p>{{trans('product.deco8-detail1')}}</p>
                        <h3>{{trans('product.deco8-detail3-1')}} 
                        <br>     
                        {{trans('product.deco8-detail3')}}
                        <br>     
                        {{trans('product.deco8-detail4')}}
                        <br>    
                        {{trans('product.deco8-detail5')}}</h3>
                        <br>

                        <h2>{{trans('product.deco8-detail6')}}</h2>
                         <h3>{{trans('product.deco8-detail7')}}</h3>
                          <h3>{{trans('product.deco8-detail8')}}</h3>
                            <h3>{{trans('product.deco8-detail10')}}</h3>
                              <h3>{{trans('product.deco8-detail11')}}</h3>
                               <h3>{{trans('product.deco8-detail12')}}</h3>
                        <br>
                        <h2>{{trans('product.deco8-detail13')}}</h2>
                         <h3>{{trans('product.deco8-detail14')}}</h3>
                          <h3>{{trans('product.deco8-detail15')}}</h3>
                           <h3>{{trans('product.deco8-detail16')}}</h3>
                        <br>
                        <h2>{{trans('product.deco8-detail17')}}</h2>
                         <h3>{{trans('product.deco8-detail18')}}</h3>
                          <h3>{{trans('product.deco8-detail19')}}</h3>
                           <h3>{{trans('product.deco8-detail120')}}</h3>
                            <h3>{{trans('product.deco8-detail21')}}</h3>
                             <h3>{{trans('product.deco8-detail22')}}</h3>
                        <br>
                        <h2>{{trans('product.deco8-detail23')}}</h2>
                         <h3>{{trans('product.deco8-detail24')}}</h3>
                          <h3>{{trans('product.deco8-detail25')}}</h3>
                           <h3>{{trans('product.deco8-detail26')}}</h3>
                            <h3>{{trans('product.deco8-detail27')}}</h3>
                             <h3>{{trans('product.deco8-detail28')}}</h3>
                              <h3>{{trans('product.deco8-detail29')}}</h3>
                               <h3>{{trans('product.deco8-detail30')}}</h3>
                                <h3>{{trans('product.deco8-detail31')}}</h3>
                                 <h3>{{trans('product.deco8-detail32')}}</h3>
                                  <h3>{{trans('product.deco8-detail33')}}</h3>
                    </div>
                </div>
            </div>


            <div class="list-produk">
                <img src="{{ url ('assets/img/onemake/product/cat/elastic-filler.jpg') }}" alt="paint5">
                <h5>{{trans('product.deco9-header1')}}</h5>
                      <a class="disabled tombol1 tombol-exterior" > {{trans('product.deco1-tag1')}}</a>
                        <a class="disabled tombol1 tombol-interior">{{trans('product.deco1-tag2')}}</a>
                        <a class="tombol tombol-detail"href="#popup9">{{trans('product.deco9-button1')}}</a> 
                        <a class="tombol tombol-download" href="{{ url ('assets/img/onemake/product/cat/vinyrock-elastic-filler.pdf') }}" target="_blank" download>{{trans('product.deco1-button2')}}</a>
                <!-- vinirock elastic filler / interior --> 
            </div>
            <div id="popup9" class="overlay">
                <div class="popup">
                   <h2>{{trans('product.deco9-detail2')}}</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <p>{{trans('product.deco9-detail1')}}</p>
                        <h3>{{trans('product.deco9-detail3-1')}} 
                        <br>     
                        {{trans('product.deco9-detail3')}}
                        <br>     
                        {{trans('product.deco9-detail4-1')}}
                        <br>     
                        {{trans('product.deco9-detail4')}}
                        <br>    
                        {{trans('product.deco9-detail5')}}</h3>
                        <br>

                        <h2>{{trans('product.deco9-detail6')}}</h2>
                         <h3>{{trans('product.deco9-detail7')}}</h3>
                          <h3>{{trans('product.deco9-detail8')}}</h3>
                            <h3>{{trans('product.deco9-detail10')}}</h3>
                              <h3>{{trans('product.deco9-detail11')}}</h3>
                               <h3>{{trans('product.deco9-detail12')}}</h3>
                        <br>
                        <h2>{{trans('product.deco9-detail13')}}</h2>
                         <h3>{{trans('product.deco9-detail14')}}</h3>
                          <h3>{{trans('product.deco9-detail15')}}</h3>
                           <h3>{{trans('product.deco9-detail16')}}</h3>
                        <br>
                        <h2>{{trans('product.deco9-detail17')}}</h2>
                         <h3>{{trans('product.deco9-detail18')}}</h3>
                          <h3>{{trans('product.deco9-detail19')}}</h3>
                           <h3>{{trans('product.deco9-detail120')}}</h3>
                            <h3>{{trans('product.deco9-detail21')}}</h3>
                             <h3>{{trans('product.deco9-detail22')}}</h3>
                        <br>
                        <h2>{{trans('product.deco9-detail23')}}</h2>
                         <h3>{{trans('product.deco9-detail24')}}</h3>
                         <br>
                          <h3>{{trans('product.deco9-detail25')}}</h3>
                           <h3>{{trans('product.deco9-detail26')}}</h3>
                            <h3>{{trans('product.deco9-detail27')}}</h3>
                            <br>
                             <h3>{{trans('product.deco9-detail28')}}</h3>
                              <h3>{{trans('product.deco9-detail29')}}</h3>
                               <h3>{{trans('product.deco9-detail30')}}</h3>
                                <h3>{{trans('product.deco9-detail31')}}</h3>
                                 <h3>{{trans('product.deco9-detail32')}}</h3>
                                  <h3>{{trans('product.deco9-detail33')}}</h3>
                    </div>
                </div>
            </div>

            <div class="list-produk">
                <img src="{{ url ('assets/img/onemake/product/cat/sealer-conc.jpg') }}" alt="paint5">
                <h5>{{trans('product.deco10-header1')}}</h5>
                      <a class="disabled tombol1 tombol-exterior" > {{trans('product.deco1-tag1')}}</a>
                        <a class="disabled tombol1 tombol-interior">{{trans('product.deco1-tag2')}}</a>
                        <a class="tombol tombol-detail"href="#popup10">{{trans('product.deco10-button1')}}</a> 
                        <a class="tombol tombol-download" href="{{ url ('assets/img/onemake/product/cat/vinyrock-sealer-conc.pdf') }}" target="_blank" download>{{trans('product.deco1-button2')}}</a>
                <!-- vinirock sealer conc/interior --> 
            </div>
            <div id="popup10" class="overlay">
                <div class="popup">
                   <h2>{{trans('product.deco10-detail2')}}</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <p>{{trans('product.deco10-detail1')}}</p>
                        <h3>{{trans('product.deco10-detail3-1')}} 
                        <br>     
                        {{trans('product.deco10-detail3')}}
                        <br>        
                        {{trans('product.deco10-detail4')}}
                        <br>    
                        {{trans('product.deco10-detail5')}}</h3>
                        <br>

                        <h2>{{trans('product.deco10-detail6')}}</h2>
                         <h3>{{trans('product.deco10-detail7')}}</h3>
                          <h3>{{trans('product.deco10-detail8')}}</h3>
                          <h3>{{trans('product.deco10-detail8-1')}}</h3>
                            <h3>{{trans('product.deco10-detail10')}}</h3>
                              <h3>{{trans('product.deco10-detail11')}}</h3>
                               <h3>{{trans('product.deco10-detail12')}}</h3>
                        <br>
                        <h2>{{trans('product.deco10-detail13')}}</h2>
                         <h3>{{trans('product.deco10-detail14')}}</h3>
                          <h3>{{trans('product.deco10-detail15')}}</h3>
                           <h3>{{trans('product.deco10-detail16')}}</h3>
                        <br>
                        <h2>{{trans('product.deco10-detail17')}}</h2>
                         <h3>{{trans('product.deco10-detail18')}}</h3>
                          <h3>{{trans('product.deco10-detail19')}}</h3>
                           <h3>{{trans('product.deco10-detail120')}}</h3>
                            <h3>{{trans('product.deco10-detail21')}}</h3>
                             <h3>{{trans('product.deco10-detail22')}}</h3>
                        <br>
                        <h2>{{trans('product.deco10-detail23')}}</h2>
                         <h3>{{trans('product.deco10-detail24')}}</h3>
                         <br>
                          <h3>{{trans('product.deco10-detail25')}}</h3>
                           <br>
                           <h3>{{trans('product.deco10-detail26')}}</h3>
                            <h3>{{trans('product.deco10-detail27')}}</h3>
                             <h3>{{trans('product.deco10-detail28')}}</h3>
                              <h3>{{trans('product.deco10-detail29')}}</h3>
                               <h3>{{trans('product.deco10-detail30')}}</h3>
                                <h3>{{trans('product.deco10-detail31')}}</h3>
                                 <h3>{{trans('product.deco10-detail32')}}</h3>
                                  <h3>{{trans('product.deco10-detail33')}}</h3>
                    </div>
                </div>
            </div>

            <div class="list-produk">
                <img src="{{ url ('assets/img/onemake/product/cat/hyper-vinyrock-shield-gloss.jpg') }}" alt="paint5">
                <h5>{{trans('product.deco11-header1')}}</h5>
                      <a class="disabled tombol1 tombol-exterior" > {{trans('product.deco1-tag1')}}</a>
                        <a class="disabled tombol1 tombol-interior">{{trans('product.deco1-tag2')}}</a>
                        <a class="tombol tombol-detail"href="#popup11">{{trans('product.deco11-button1')}}</a> 
                        <a class="tombol tombol-download" href="{{ url ('assets/img/onemake/product/cat/vinyrock-strong-sealer.pdf') }}" target="_blank" download>{{trans('product.deco1-button2')}}</a>
                <!-- vinirock strong sealer --> 
            </div>
            <div id="popup11" class="overlay">
                <div class="popup">
                   <h2>{{trans('product.deco11-detail2')}}</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <p>{{trans('product.deco11-detail1')}}</p>
                        <h3>{{trans('product.deco11-detail3-1')}} 
                        <br>     
                        {{trans('product.deco11-detail3')}}
                        <br>        
                        {{trans('product.deco11-detail4')}}
                        <br>    
                        {{trans('product.deco11-detail5')}}</h3>
                        <br>

                        <h2>{{trans('product.deco11-detail6')}}</h2>
                         <h3>{{trans('product.deco11-detail7')}}</h3>
                          <h3>{{trans('product.deco11-detail8')}}</h3>
                            <h3>{{trans('product.deco11-detail10')}}</h3>
                              <h3>{{trans('product.deco11-detail11')}}</h3>
                               <h3>{{trans('product.deco11-detail12')}}</h3>
                        <br>
                        <h2>{{trans('product.deco11-detail13')}}</h2>
                         <h3>{{trans('product.deco11-detail14')}}</h3>
                          <h3>{{trans('product.deco11-detail15')}}</h3>
                           <h3>{{trans('product.deco11-detail16')}}</h3>
                        <br>
                        <h2>{{trans('product.deco11-detail17')}}</h2>
                         <h3>{{trans('product.deco11-detail18')}}</h3>
                          <h3>{{trans('product.deco11-detail19')}}</h3>
                           <h3>{{trans('product.deco11-detail120')}}</h3>
                            <h3>{{trans('product.deco11-detail21')}}</h3>
                             <h3>{{trans('product.deco11-detail22')}}</h3>
                        <br>
                        <h2>{{trans('product.deco11-detail23')}}</h2>
                         <h3>{{trans('product.deco11-detail24')}}</h3>
                         <br>
                          <h3>{{trans('product.deco11-detail25')}}</h3>
                          <br>
                           <h3>{{trans('product.deco11-detail26')}}</h3>
                            <h3>{{trans('product.deco11-detail27')}}</h3>
                             <h3>{{trans('product.deco11-detail28')}}</h3>
                              <h3>{{trans('product.deco11-detail29')}}</h3>
                               <h3>{{trans('product.deco11-detail30')}}</h3>
                                <h3>{{trans('product.deco11-detail31')}}</h3>
                                 <h3>{{trans('product.deco11-detail32')}}</h3>
                                  <h3>{{trans('product.deco11-detail33')}}</h3>
                    </div>
                </div>
            </div>


             <div class="list-produk">
                <img src="{{ url ('assets/img/onemake/product/cat/crystal-clear.jpg') }}" alt="paint5">
                <h5>{{trans('product.deco13-header1')}}</h5>
                <a class="disabled tombol1 tombol-exterior" >{{trans('product.deco1-tag1')}}</a>
                <a class="disabled tombol1 tombol-non2" ><!-- {{trans('product.deco1-tag3')}} --></a>
                <a class="tombol tombol-detail"href="#popup13">{{trans('product.deco13-button1')}}</a> 
                <a class="tombol tombol-download" href="{{ url ('assets/img/onemake/product/cat/rock-crystal-clear.pdf') }}" target="_blank" download>{{trans('product.deco1-button2')}}</a>
                <!-- rock crystal UV cut / exterior --> 
            </div>
            <div id="popup13" class="overlay">
                <div class="popup">
                   <h2>{{trans('product.deco13-detail2')}}</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <p>{{trans('product.deco13-detail1')}}</p>
                        <h3>{{trans('product.deco13-detail3-1')}} 
                        <br>
                        {{trans('product.deco13-detail3-2')}}      
                        <br>
                        {{trans('product.deco13-detail3')}}
                        <br>        
                        {{trans('product.deco13-detail4')}}
                        <br>    
                        {{trans('product.deco13-detail5')}}</h3>
                        <br>

                        <h2>{{trans('product.deco13-detail6')}}</h2>
                         <h3>{{trans('product.deco13-detail7')}}</h3>
                          <h3>{{trans('product.deco13-detail7-1')}}</h3>
                           <h3>{{trans('product.deco13-detail7-2')}}</h3>
                            <h3>{{trans('product.deco13-detail8')}}</h3>
                             <h3>{{trans('product.deco13-detail10')}}</h3>
                              <h3>{{trans('product.deco13-detail11')}}</h3>
                               <h3>{{trans('product.deco13-detail12')}}</h3>
                        <br>
                        <h2>{{trans('product.deco13-detail13')}}</h2>
                         <h3>{{trans('product.deco13-detail14')}}</h3>
                          <h3>{{trans('product.deco13-detail15')}}</h3>
                           <h3>{{trans('product.deco13-detail16')}}</h3>
                        <br>
                        <h2>{{trans('product.deco13-detail17')}}</h2>
                         <h3>{{trans('product.deco13-detail18')}}</h3>
                          <h3>{{trans('product.deco13-detail19')}}</h3>
                           <h3>{{trans('product.deco13-detail20')}}</h3>
                            <h3>{{trans('product.deco13-detail21')}}</h3>
                             <h3>{{trans('product.deco13-detail22')}}</h3>
                        <br>
                        <h2>{{trans('product.deco13-detail23')}}</h2>
                         <h3>{{trans('product.deco13-detail24')}}</h3>
                         <br>
                          <h3>{{trans('product.deco13-detail25')}}</h3>
                          <br>
                           <h3>{{trans('product.deco13-detail26')}}</h3>
                            <h3>{{trans('product.deco13-detail27')}}</h3>
                             <h3>{{trans('product.deco13-detail28')}}</h3>
                              <br>
                              <h3>{{trans('product.deco13-detail29')}}</h3>
                               <h3>{{trans('product.deco13-detail30')}}</h3>
                               <br>
                                <h3>{{trans('product.deco13-detail31')}}</h3>
           
                    </div>
                </div>
            </div>




            <div class="list-produk">
                <img src="{{ url ('assets/img/onemake/product/cat/rust-proof-primer.jpg') }}" alt="paint5">
                <h5>{{trans('product.deco12-header1')}}</h5>
                      <a class="disabled tombol1 tombol-exterior" > {{trans('product.deco1-tag1')}}</a>
                        <a class="disabled tombol1 tombol-interior">{{trans('product.deco1-tag2')}}</a>
                        <a class="tombol tombol-detail"href="#popup12">{{trans('product.deco12-button1')}}</a> 
                        <a class="tombol tombol-download" href="{{ url ('assets/img/onemake/product/cat/rock-rustproof-primer.pdf') }}" target="_blank" download>{{trans('product.deco1-button2')}}</a> 
                <!-- rock rosuf proof / interior --> 
            </div>
            <div id="popup12" class="overlay">
                <div class="popup">
                   <h2>{{trans('product.deco12-detail2')}}</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <p>{{trans('product.deco12-detail1')}}</p>
                        <h3>{{trans('product.deco12-detail3-1')}} 
                        <br>     
                        {{trans('product.deco12-detail3')}}
                        <br>        
                        {{trans('product.deco12-detail4')}}
                        <br>    
                        {{trans('product.deco12-detail5')}}</h3>
                        <br>

                        <h2>{{trans('product.deco12-detail6')}}</h2>
                         <h3>{{trans('product.deco12-detail7')}}</h3>
                          <h3>{{trans('product.deco12-detail8')}}</h3>
                          <h3>{{trans('product.deco12-detail8-1')}}</h3>
                            <h3>{{trans('product.deco12-detail10')}}</h3>
                              <h3>{{trans('product.deco12-detail11')}}</h3>
                               <h3>{{trans('product.deco12-detail12')}}</h3>
                        <br>
                        <h2>{{trans('product.deco12-detail13')}}</h2>
                         <h3>{{trans('product.deco12-detail14')}}</h3>
                          <h3>{{trans('product.deco12-detail15')}}</h3>
                           <h3>{{trans('product.deco12-detail16')}}</h3>
                        <br>
                        <h2>{{trans('product.deco12-detail17')}}</h2>
                         <h3>{{trans('product.deco12-detail18')}}</h3>
                          <h3>{{trans('product.deco12-detail19')}}</h3>
                           <h3>{{trans('product.deco12-detail120')}}</h3>
                            <h3>{{trans('product.deco12-detail21')}}</h3>
                             <h3>{{trans('product.deco12-detail22')}}</h3>
                        <br>
                        <h2>{{trans('product.deco12-detail23')}}</h2>
                         <h3>{{trans('product.deco12-detail24')}}</h3>
                         <br>
                          <h3>{{trans('product.deco12-detail25')}}</h3>
                           <br>
                           <h3>{{trans('product.deco12-detail26')}}</h3>
                            <h3>{{trans('product.deco12-detail27')}}</h3>
                             <h3>{{trans('product.deco12-detail28')}}</h3>
                    </div>
                </div>
            </div>
    </div>
</body>

  @include('pages.product.menu')
  </section> {{-- <section id="about" class="access"> --}}
@endsection