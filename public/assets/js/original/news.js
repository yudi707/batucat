window.lazySizesConfig = {
    lazyClass: 'news_sum_img', // lazyloadの対象とするクラスの指定。
};
document.addEventListener('lazybeforeunveil', function(e){
      var bg = e.target.getAttribute('data-bg');
      if(bg){
          e.target.style.backgroundImage = 'url(' + bg + ')';
           e.target.style.backgroundColor = '#FFF';
      }
  });
function init(){

custom_selectbox('.news_category_sp', '.label');
  var $setElm = $('#pagePath li:last-child');
    var cutFigure = '25';
    var afterTxt = ' …';
 
    $setElm.each(function(){
        var textLength = $(this).text().length;
        var textTrim = $(this).text().substr(0,(cutFigure))
 
        if(cutFigure < textLength) {
            $(this).html(textTrim + afterTxt).css({visibility:'visible'});
        } else if(cutFigure >= textLength) {
            $(this).css({visibility:'visible'});
        }
    });



}
custom_selectbox = function(select, obj){
    var set_selectbox = function(){
        var value = $(this).find('option:selected').html();
        $(select).find(obj).find("span").html(value);
    }
    $(select).find('select').each(set_selectbox).on('change', set_selectbox);
}

$(function() {
  init();
  setElm = $('.news_item')
  scTs();

if(location.href.indexOf("/en")!=-1){
  $("#news .news_main .news_item h2").css("text-align","inherit")
}


 
  news_btn_set()
  resize_size()
  
  $(window).resize(function(){
      resize_size()
  })


});

function news_btn_set(){
	$(".news_category a:not('.active')").hover(function() {
		TweenLite.to($(this), 0.3, {opacity:0.5});
	}, function() {
		TweenLite.to($(this), 0.3, {opacity:1});
	});
	$(".news_item a").hover(function() {
		TweenLite.to($(this).find('.news_sum_img p'), 0.3, {scale:1.05});
	}, function() {
		TweenLite.to($(this).find('.news_sum_img p'), 0.3, {scale:1});
	});
var keywords =""
var thisurl = location.href
if($("meta[name='keywords']").attr("content")){
  keywords =","+$("meta[name='keywords']").attr("content")
}


 var $setElm2 = $('title');
    var cutFigure2 = '120';
    var afterTxt = ' …';
 
        var textLength = $setElm2.text().length;
        var textTrim = $setElm2.text().substr(0,(cutFigure2))
        var twt2 ="IoT with U - IoTを、世界のすみずみまで。"
        if(cutFigure2 < textLength) {
            twt2 =  textTrim + afterTxt
        } else if(cutFigure2 >= textLength) {
             twt2 =$setElm2.text()
        }
    var twt=twt2.replace( "|" , "｜" ) ;

   $('.news_share').each(function(index, el) {
     $(this).find('a').eq(0).attr('href',"http://twitter.com/share?url="+thisurl+"&text="+twt+"&hashtags="+"Uhuru,ウフル"+keywords);
     $(this).find('a').eq(1).attr('href',"http://www.facebook.com/share.php?u="+thisurl);
   });  
  
}



//リサイズ　イベント////////////////////////////////////////////////////////////
//ウィンドウサイズ関数////////////////////////////////////////

var minW = 980
var minH = 640

var winW = 0
var winH = 0

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


function scTs(){
    delayHeight = 80;
    setElm.each(function(i){
            var setThis = $(this),
            elmTop = setThis.offset().top,
            elmHeight = setThis.height(),
            scrTop = $(window).scrollTop(),
            winHeight = $(window).height();
            if (scrTop > elmTop - winHeight + 0 && scrTop < elmTop + elmHeight){
               TweenMax.to(setThis, 1.2, {opacity:1})
            } else if (scrTop < elmTop - winHeight + 0 && scrTop < elmTop +0){
              TweenMax.to(setThis, 0.8, {opacity:0})
              
              
    }
    return false;
});

$(window).on('scroll resize',function(){
    var stp = $(window).scrollTop()
        setElm.each(function(){
            var setThis = $(this),
            elmTop = setThis.offset().top,
            elmHeight = setThis.height(),
            scrTop = $(window).scrollTop(),
            winHeight = $(window).height();
            if (scrTop > elmTop - winHeight + delayHeight && scrTop < elmTop + elmHeight){
                TweenMax.to(setThis, 1.2, {opacity:1})
            } else if (scrTop < elmTop - winHeight + delayHeight && scrTop < elmTop + delayHeight){
                TweenMax.to(setThis, 1, {opacity:0})
              
            }
        });
        return false;
    });
}