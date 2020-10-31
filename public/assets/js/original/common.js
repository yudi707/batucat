/*//////////////////////////////////////////////////////UAでインライン再生可能か判別*/

var _ua = (function(u){
	return {
		Tablet:(u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1)
		|| u.indexOf("ipad") != -1
		|| (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
		|| (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
		|| u.indexOf("kindle") != -1
		|| u.indexOf("silk") != -1
		|| u.indexOf("playbook") != -1,
		Mobile:(u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
		|| u.indexOf("iphone") != -1
		|| u.indexOf("ipod") != -1
		|| (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
		|| (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
		|| u.indexOf("blackberry") != -1
	}
})(window.navigator.userAgent.toLowerCase());
var userAgent = navigator.userAgent.toLowerCase();
var isIpad = userAgent.indexOf('ipad') > -1;
var sp_ua = false;
var ua = navigator.userAgent;
var moive_auto = false;
if (ua.indexOf('iPad') > 0 || ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0) {
	if (iOSversion() < 10) {

	} else {
		moive_auto = true;　
	}
	sp_ua = true;
} else if ((ua.indexOf('Android') > 0) && (ua.indexOf('Mobile') > 0) || ua.indexOf('Windows Phone') > 0) {
sp_ua = true;
} else {

}

function iOSversion() {
	if (/iP(hone|od|ad)/.test(navigator.platform)) {
		var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
		return [parseInt(v[1], 10)];
	}
}

function AndroidSversion() {
	if (ua.indexOf("Android") > 0) {
		var androidversion = parseFloat(ua.slice(ua.indexOf("Android") + 8));
		return androidversion;
	}
}

/*//////////////////////////////////////////////////////デバイス調整*/
function cookie_lang(){
var url = location.href


	if(url.indexOf("/en/") !=-1 ){
		$("body").attr("id","en")
	}


}

/*//////////////////////////////////////////////////////初期化*/
$(function () {

	if(_ua.Mobile){
		$("meta[name='viewport']").attr('width=device-width, initial-scale=1.0');
	}else{
		$("meta[name='viewport']").attr('content', 'width=1100');
	}

	/*//////////////////////////////////////////////////////初期化*/

	cookie_lang()
	location_ani()
	resize()


$(window).on('scroll resize',function(){
    var stp = $(window).scrollTop()

    if(stp>180){
   	$("body").addClass('sc')
   	if(sc_tru){
   		TweenLite.to($("body #gheader"), 0, {y:-90});
   		sc_tru = false
   	}
   	TweenLite.to($("body #gheader"), 0.3, {y:0});
   }else{
   	sc_tru = true
   $("body").removeClass('sc')
   }
})



	$(window).resize(function(event) {
		resize()
	});
	$(window).load(function() {
		$("#cover").fadeOut(1200);
		resize()
	});
	header()
	btn_anime()
})

/*//////////////////////////////////////////////////////遷移時animation*/
function location_ani() {
	$('a:not([target="_blank"]):not([href^="#"]):not(.fancybox-close,.fancybox,.closeBtn > a)').each(function(){
			var target = $(this).attr('target');
			if(target == '_blank'){

			}else{
				$(this).on('tap', function(){

					var nextUrl = $(this).attr('href');
					$('#cover').fadeIn('600', function(){
						location.href = nextUrl;
						$('#cover').delay(1000).fadeOut(1);
					});
					return false;

				});
			}
		});
}

/*//////////////////////////////////////////////////////リサイズ*/
var winW, winH

function resize() {
	winW = $(window).width()
	winH = $(window).height()
}

/*//////////////////////////////////////////////////////Header*/
var h_animef = true;

function header() {

	var $header = $("#gheader")
	var $menu_btn = $(".menu_btn")
	var $h_nav_box = $(".h_nav_box")

	if(!_ua.Mobile){
		$menu_btn.on('mouseover', function() {
			if(h_animef){

				if(!$("#gheader").hasClass('on')){
					$header.addClass('on')
					header_anime()
				}
			}

		})
		$h_nav_box.on('mouseleave', function() {
		if(h_animef){
			if($("#gheader").hasClass('on')){
				$header.removeClass('on')
				header_anime_out()
			}
		}
		})
	}

	$(".menu_btn").tap(function() {
		h_animef = false;
		setTimeout(function(){
			h_animef = true
		},1000)
		if($("#gheader").hasClass('on')){
			$header.removeClass('on')
			header_anime_out()

		}else{
			$header.addClass('on')
			header_anime()

		}
	})

	$(".col_btn").on('mouseover touchstart', function() {
		$(this).addClass('on')
	})
	$(".col_btn").on('tap', function() {
		$(this).removeClass('on')
	})
	$(".col_btn").on('mouseleave touchend', function() {
		$(this).removeClass('on')
	})

}

function header_anime() {

	clearTimeout(h_tout)
	if(winW<768){
		$('#gheader nav li,#gheader nav p').each(function(index, el) {
			TweenLite.to($(this) ,0, {opacity:0,y:10});
		})
		$("#gheader nav").css("display","block")

		$('#gheader nav li,#gheader nav p').each(function(index, el) {
			TweenLite.to($(this) ,0.3, {delay:(($(this).offset().top-$('#gheader nav').offset().top)*0.0013),opacity:1});
		});
	}
}

var h_tout

function header_anime_out() {

	h_tout = setTimeout(function(){
		if(winW<768){
			$("#gheader nav").css("display","none")
			$("#gheader nav").css("opacity","0")
			TweenLite.killTweensOf($('#gheader nav li,#gheader nav p'))
			$('#gheader nav li,#gheader nav p').each(function(index, el) {
				TweenLite.to($(this) ,0, {opacity:0});
			})
		}
	},600)
}

function btn_anime() {
setTimeout(function(){
	$('.lazyloaded').each(function(index, el) {
	if($(this).attr('data-bg')){
		$(this).css("background-color","#FFF")
	}
});
},500)


$('.tag_box a').hover(function() {
TweenLite.to($(this), 0.3, {backgroundColor:"#AAA"});

},function(){
TweenLite.to($(this), 0.3, {backgroundColor:"#e5e5e5"});
})



$('.more').each(function(index, el) {
	if($(this).attr("href")){
		var url = $(this).attr("href")

		$(this).parent().tap(function(){
			$('#cover').fadeIn('600', function(){
						location.href= url
						$('#cover').delay(1000).fadeOut(1);
					});

		})
	};
});

if(!sp_ua){
	$('.text_box_in_fl').on('mouseover touchstart', function() {
		$(this).find('.case_sum_img').addClass('on')
	})
	$('.text_box_in_fl').on('tap', function() {
		$(this).find('.more').removeClass('on')
	})
	$('.text_box_in_fl').on('mouseleave touchend', function() {
		$(this).find('.more').removeClass('on')
	})
}





$('.pageList a').hover(function() {
TweenLite.to($(this), 0.3, {opacity:0.5});
},function(){
TweenLite.to($(this), 0.3, {opacity:1});
})


$('.live_item').hover(function() {
$(this).addClass('on')
$(this).find('.more').addClass('on')
TweenLite.to($(this).find('.art_sum'), 0.3, {backgroundColor:"#F3F3F3"});
TweenLite.to($(this).find('h2'), 0.3, {backgroundColor:"#F3F3F3"});
TweenLite.to($(this).find('.entry_title'), 0.3, {borderColor:"rgba(255,255,255,1)"})
},function(){
	$(this).removeClass('on')
$(this).find('.more').removeClass('on')
TweenLite.to($(this).find('.entry_title'), 0.3, {borderColor:"rgba(255,255,255,0.5)"});
TweenLite.to($(this).find('.art_sum'), 0.3, {backgroundColor:"#FFF"});
TweenLite.to($(this).find('h2'), 0.3, {backgroundColor:"#FFF"});
})
$('.entry_body p a').hover(function() {
$(this).addClass('on')
},function(){
$(this).removeClass('on')
})

$('blockquote a,table a').hover(function() {
$(this).addClass('on')
},function(){
$(this).removeClass('on')
})


setElm = $('article,.entry .entry_body p,.entry h1,.entry h2,.entry h3,.entry blockquote,.entry table')
  scTs();


  if($("b").find("img")){
  	resize_size_sp()
  	$(window).resize(function(event) {
  		resize_size_sp()
  	});

    }
}
function resize_size_sp(){

		$("b").each(function(index, el) {
		  $(this).find('img').eq(0).addClass("pc")
		  $(this).find('img').eq(1).addClass("sp")
		 });

 }

//ウィンドウサイズ関数////////////////////////////////////////

var minW = 980
var minH = 640


var winW_b = 0
var winH_b = 0

var tx = 0
var ty = 0
var tpt
var my_hituji = {}
var tpc= 0
var br_name = '';


var setElm



function resize_size(){

     if ( window.innerWidth ) {
      winW = window.innerWidth;
      winH = window.innerHeight;
       }
      else if ( document.documentElement && document.documentElement.clientWidth != 0 ) {
          winW = document.documentElement.clientWidth
          winH = document.documentElement.clientHeight
          }
      else if ( document.body ) {
          winW = document.body.clientWidth;
          winH = document.body.clientHeight;
      }else{
        winW = $(window).width()
        winH = $(window).height()
    }


    winW_b = (minW>winW)?minW:winW
    winH_b = (minH>winH)?minH:winH



}

var delayHeight = 80;
var sc_tru = true
function scTs(){

    setElm.each(function(i){
            var setThis = $(this),
            elmTop = setThis.offset().top,
            elmHeight = setThis.height(),
            scrTop = $(window).scrollTop(),
            winHeight = $(window).height();
            if (scrTop > elmTop - winHeight + 0 && scrTop < elmTop + elmHeight){
               TweenMax.to(setThis, 0, {delay:0,opacity:1})
            } else if (scrTop < elmTop - winHeight + 0 && scrTop < elmTop +0){
              TweenMax.to(setThis, 0.5, {opacity:0})


    }
    return false;
});

$(window).on('scroll resize',function(){


        setElm.each(function(){
            var setThis = $(this),
            elmTop = setThis.offset().top,
            elmHeight = setThis.height(),
            scrTop = $(window).scrollTop(),
            winHeight = $(window).height();
            if (scrTop > elmTop - winHeight + delayHeight && scrTop < elmTop + elmHeight){
                TweenMax.to(setThis, 1.2, {delay:0.2,opacity:1,y:0})
            } else if (scrTop < elmTop - winHeight + delayHeight && scrTop < elmTop + delayHeight){
                TweenMax.to(setThis, 0.5, {opacity:0})

            }
        });
        return false;
    });
}
