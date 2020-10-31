function init(){

	if($('.itemList').length){

			var w = $('.itemList').width();
			if($(window).width() > 767){
				/*$('.itemList').children('li').width(w/3);*/
				$('.itemList').children('li').children('a').height($('.itemList').children('li').children('a').width());
			}else {
				$('.itemList').children('li').width(w/2);
				$('.itemList').children('li').matchHeight();
			}

		$('.itemList .txt').matchHeight();
		if($(window).width() > 767){
			$('.itemList a').hover(function(){
				$(this).find('.more').stop().toggleClass('on');
			});
		}
	}

	if($('table a').length){
		if($(window).width() > 767){
			$('table a').hover(function(){
				$(this).stop().toggleClass('on');
			});
		}
	}

	if($('#about.access .wrap .link .more').length){
		if($(window).width() > 767){
			$('#about.access .wrap .link .more').hover(function(){
				$(this).stop().toggleClass('on');
			});
		}
	}

	$('blockquote a,table a').hover(function() {
	$(this).addClass('on')
	},function(){
	$(this).removeClass('on')
	})

	$('a[href*=#]:not([href=#]):not(.fancybox-close,.fancybox,.closeBtn > a)').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                var targetOffset = $target.offset().top - 20
                $('html,body').animate({scrollTop: targetOffset}, 1000);
                return false;
            }
        }
    });




	if($('.comLinkList').length){

			var w = $('.comLinkList').width();
			if($(window).width() > 767){
				/*$('.comLinkList').children('li').width(w/3);*/
			}else {
				$('.comLinkList').children('li').width(w/3);
				$('.comLinkList').children('li').matchHeight();
			}

		$('.comLinkList .txt').matchHeight();
	}


	if($('.infoUl').length){
		$('.infoUl .inner').matchHeight();
	}

	if($('#about.leader .photoList').length){
		$('#about.leader .photoList li').matchHeight();
	}

	if($('#about.message').length){
		$('.comLinkList li:nth-child(1)').addClass("on");
	}else if($('#about.outline').length){
		$('.comLinkList li:nth-child(2)').addClass("on");
	}else if($('#about.philosophy').length){
		$('.comLinkList li:nth-child(3)').addClass("on");
	}else if($('#about.iot').length){
		$('.comLinkList li:nth-child(4)').addClass("on");
	}else if($('#about.leader').length){
		$('.comLinkList li:nth-child(5)').addClass("on");
	}else if($('#about.access').length){
		$('.comLinkList li:nth-child(6)').addClass("on");
	}



	if($('.fancybox').length){
		$(".fancybox").fancybox({
			margin: [30,10,30,10],
			padding: [0,0],
			scrolling: 'visible',
			helpers:  {
				overlay: {
							locked: false
						}
				},

		});
	}
}

$(function(){
/*//////////////////////////////////////////////////////CLASS*/
$.fn.queueAddClass = function(className) {
this.queue('fx', function(next) {
		$(this).addClass(className);
		next();
	});
	return this;
};
$.fn.queueRemoveClass = function(className) {
this.queue('fx', function(next) {
		$(this).removeClass(className);
		next();
	});
	return this;
};

	$(window).load(function() {

		if(winW>767){
			$("#cover").fadeOut(600);
		}else {
			$("#cover").fadeOut(0);
		}
		resize()



	});
})

$(function(){
	if(navigator.userAgent.match(/Trident\/7\./)||(navigator.userAgent.match(/Edge/i))) { // if IE
		$('body').addClass('ie');
	}
	init();

	/*//////////////////////////////////////////////////////遷移時animation*/
	$('#about.access .wrap .link .more').click(function(){
		var nextUrl = $(this).attr('href');
		window.open(nextUrl);
		return false;
	});


	$('#about.iot .h3Ttl01').click(function(){
		if($(window).width() > 767){
		}else {
			$(this).toggleClass('on').next('.jsBox').stop().slideToggle(300);
			return false;
		}
	});


$(window).load(function(){
	if($('#about.access .wrap .map').length){
		initialize('map01', 35.663745, 139.744042);
		initialize('map02', 34.693419, 135.495412);
		initialize('map03', 33.6711698, 135.3486452);
		initialize('map04', 35.6647748, 139.7432243);
	}
});

function initialize(id,n,m) {
	var latlng = new google.maps.LatLng(n,m);
	var myOptions = {
		zoom: 17,
		center: latlng,
		scrollwheel: false,
		mapTypeControl: false,
		panControl: false,
		streetViewControl: false,
		zoomControl: true,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById(id), myOptions);

	//アイコン設定
	if($(window).width() > 767){
		var icon = {
			url : "/img/about/map_icon_pc.png"
		}
	} else {
		var icon = {
			url : '/img/about/map_icon_sp.png',
			scaledSize : new google.maps.Size(30, 35)
		}
	}
	var markerOptions = {
		position: latlng,
		map: map,
		icon: icon
	};
	var marker = new google.maps.Marker(markerOptions);

	google.maps.event.addDomListener(window, "resize",
            function() {
                map.setCenter(latlng)
            })

	var styleOptions = [
	  {
		"stylers": [
		  { "saturation": -100 }
		]
	  }
	];

	var lopanType = new google.maps.StyledMapType(styleOptions);
	map.mapTypes.set('maptype', lopanType);
	map.setMapTypeId('maptype');
}

$(window).load(function() {



		$("img.lazy").lazyload({
			threshold : 1,
			effect : 'fadeIn',
			effect_speed: 500,
			failure_limit: 1
		});

});
$(window).scroll(function(){

	if($('.pageTitle .pho').length){

		setTimeout(function(){
		$('.pageTitle .pho').addClass('on');
		},500);
	}
	if($('#about .comTtl .pho').length){
		setTimeout(function(){
		$('#about .comTtl .pho').addClass('on');
		},500);
	}
	var windowHeight = $(window).height(),
	topWindow = $(window).scrollTop();
	$('.oneShow').each(function(){
		var targetPosition = $(this).offset().top;
		if(topWindow > targetPosition - windowHeight + 100){
			th=$(this)
			setTimeout(function(){
				th.children("li").each(function(i){
					$(this).delay(150*i).queueAddClass('on');

				});
			},300);
		}
	});

	$('.fadeInUp').each(function(){
		var targetPosition = $(this).offset().top;
		if(topWindow > targetPosition - windowHeight + 100){
			$(this).addClass('on');
		}
	});


}).trigger("scroll");
$("body").addClass('header_white')

bgc()
$(window).scroll(function(event) {
bgc()

});

});

function bgc(){
  $("section>div,#gfooter,.comContact,.pho").each(function(index, el) {

    if($(this).offset().top<$(window).scrollTop()+80&&$(this).offset().top+$(this).height()>$(window).scrollTop()+80){
        if ($(this).css("background-color")=="rgb(255, 255, 255)"||$(this).css("background-color")=="rgb(243, 243, 243)") {

            $(".menu_btn,.pclang").removeClass('background--l')
            $(".menu_btn,.pclang").addClass('background--l')
         console.log("???")

        }else{
          $(".menu_btn,.pclang").removeClass('background--l')

        }
    }
  });


}
$(window).resize(function (event) {
	init();
});
