<link rel="stylesheet" href="{{ url('/assets/css/colorPick/colorPick.css') }}">
<!-- The following line applies the dark theme -->
<link rel="stylesheet" href="{{ url('/assets/css/colorPick/colorPick.dark.theme.css') }}">
<style>
    .picker {
        border-radius: 5px;
        width: 36px;
        height: 36px;
        cursor: pointer;
        -webkit-transition: all linear .2s;
        -moz-transition: all linear .2s;
        -ms-transition: all linear .2s;
        -o-transition: all linear .2s;
        transition: all linear .2s;
        border: thin solid #eee;
    }
    .picker:hover {
        transform: scale(1.1);
    }

</style>

<script src="{{ url('/assets/js/original/jscolor.js') }}"></script>

@extends('layouts.about')

@section('about')
    <section id="about" class="outline">
        <div id="cover"></div> {{-- <div id="cover"> --}}
        @section('field', trans('paint.paint-ext'))
        @include('pages.paint.exterior.breadcrumb')
        <div class="comTtl">
            <div class="pho"></div>
        </div>
        <div class="whiteBox">
            <div class="wrap comBox">
                <h3 id="title">{{trans('paint.paint-ext')}}</h3>
                <div class="preview-one">
                    <div class="row">
                        <img id="basic" src="{{ url('assets/img/feature/basic-home.png')}}">
                        <img id="part_b" class="jscolor" src="{{ url('assets/img/feature/base-b-white.png') }}">
                        <img id="part_a" class="jscolor" src="{{ url('assets/img/feature/base-a-white.png') }}">
                    </div>
                    <div class="text-area">
                        <h3 id="title">{{trans('Garage:')}}</h3>
                        <h3 id="title2">{{trans('Wall:')}}</h3>
                        <div class="row">
                            <div class="picker tombol1 tombol-color1" id="picker1"></div>
                            <div class="picker tombol2 tombol-color2" id="picker2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="{{ url('/assets/js/original/colorPick.js') }}"></script>
        <script>
            $("#picker1").colorPick({
                'initialColor' : '#ffffff',
                'palette': [
                    "#ffffff", "#cacaca", "#7b7b7b", "#484848", "#000000",
                    "#d2eaef", "#9ed3df", "#7eb7d6", "#557fa3", "#68bbcf",
                    "#b3cde5", "#b4abc7", "#d3c5df", "#7079a4", "#735681",
                    "#eee6c5", "#f4e3ca", "#fbe4ac", "#f6e2ce", "#cdab63",
                    "#d6c9ae", "#bead97", "#c5ad7d", "#7a5c36", "#745b5a",
                    "#f5e6a9", "#f0e8a8", "#e8c77c", "#ceae0f", "#ffde34",
                    "#dbebcb", "#ceedda", "#aed5a8", "#a0d6b9", "#738151",
                    "#daa671", "#e9c49f", "#e3a35b", "#f39d1c", "#ff9148",
                    "#f7e1d7", "#ecc0bf", "#da9fb3", "#e37564", "#d34d51"],
                'onColorSelected': function() {
                    if (this.color == '#FFFFFF') {
                        $('#part_a').attr('src', "{{ url('assets/img/feature/base-a-white.png') }}")
                    } else {
                        $('#part_a').attr('src', "{{ url('assets/img/feature/base-a.png') }}")
                    }
                    this.element.css({'backgroundColor': this.color, 'color': '#000000'});
                    let img = document.getElementById('part_a');
                    img.style.color = this.color;
                    img.setAttribute('style',
                        '-webkit-filter: opacity(.5) drop-shadow(0 0 0 '+ this.color +')');
                    img.setAttribute('style',
                        'filter: opacity(.5) drop-shadow(0 0 0 '+ this.color +')');
                }
            });
            $("#picker2").colorPick({
                'initialColor' : '#ffffff',
                'palette': [
                    "#ffffff", "#cacaca", "#7b7b7b", "#484848", "#000000",
                    "#d2eaef", "#9ed3df", "#7eb7d6", "#557fa3", "#68bbcf",
                    "#b3cde5", "#b4abc7", "#d3c5df", "#7079a4", "#735681",
                    "#eee6c5", "#f4e3ca", "#fbe4ac", "#f6e2ce", "#cdab63",
                    "#d6c9ae", "#bead97", "#c5ad7d", "#7a5c36", "#745b5a",
                    "#f5e6a9", "#f0e8a8", "#e8c77c", "#ceae0f", "#ffde34",
                    "#dbebcb", "#ceedda", "#aed5a8", "#a0d6b9", "#738151",
                    "#daa671", "#e9c49f", "#e3a35b", "#f39d1c", "#ff9148",
                    "#f7e1d7", "#ecc0bf", "#da9fb3", "#e37564", "#d34d51"],
                'onColorSelected': function() {
                    if (this.color == '#FFFFFF') {
                        $('#part_b').attr('src', "{{ url('assets/img/feature/base-b-white.png') }}")
                    } else {
                        $('#part_b').attr('src', "{{ url('assets/img/feature/base-b.png') }}")
                    }
                    this.element.css({'backgroundColor': this.color, 'color': '#000000'});
                    let img = document.getElementById('part_b');
                    img.style.color = this.color;
                    img.setAttribute('style',
                        '-webkit-filter: opacity(.5) drop-shadow(0 0 0 '+ this.color +')');
                    img.setAttribute('style',
                        'filter: opacity(.5) drop-shadow(0 0 0 '+ this.color +')');
                }
            });
        </script>
    </section> {{-- <section id="about" class="outline"> --}}
@endsection
