window.lazySizesConfig = {
    lazyClass: 'live_sum_img', // lazyloadの対象とするクラスの指定。
};
document.addEventListener('lazybeforeunveil', function(e){
      var bg = e.target.getAttribute('data-bg');
      if(bg){
          e.target.style.backgroundImage = 'url(' + bg + ')';
      }
  });
function init(){

custom_selectbox('.live_category_sp', '.label');
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
  
  live_btn_set()
  resize_size()
  $('.live_item h2').each(function(index, el) {
    var text = $(this).html() 
     $(this).html('<span>'+text+'</span>')
  });

if(location.href.indexOf("/en")!=-1){
  $(".live_item h2").css("text-align","inherit")
}



if(winW>768){
        $('.live_item h2 span').each(function(index, el) {
          if( $(this).height()>70){
            $(this).addClass('over')
          }else{
            $(this).removeClass('over')
          }
      });
      }


  $(window).resize(function(){
      resize_size()
      if(winW>768){
        $('.live_item h2 span').each(function(index, el) {
          if( $(this).height()>70){
            $(this).addClass('over')
          }else{
            $(this).removeClass('over')
          }
      });
      }
      
  })
live_silde()

});

function live_btn_set(){
	$(".live_category a:not('.active')").hover(function() {
		TweenLite.to($(this), 0.3, {opacity:0.5});
	}, function() {
		TweenLite.to($(this), 0.3, {opacity:1});
	});

	$(".live_item a").hover(function() {
 //  $(this).find('.live_sum_img .live_img').css("transform","translate3d(0px, 0px, 0px)")
//		TweenLite.to($(this).find('.live_sum_img .live_img'), 0.3, {scale:1.05});
	}, function() {
//   $(this).find('.live_sum_img .live_img').css("transform","translate3d(0px, 0px, 100px)")
 //   $(this).find('.live_sum_img .live_img').css("z-index","100")
		//TweenLite.to($(this).find('.live_sum_img .live_img'), 0.3, {scale:1});
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

   $('.live_share').each(function(index, el) {
     $(this).find('a').eq(0).attr('href',"http://twitter.com/share?url="+thisurl+"&text="+twt+"&hashtags="+"Uhuru,ウフル"+keywords);
     $(this).find('a').eq(1).attr('href',"http://www.facebook.com/share.php?u="+thisurl);
   });  
}

var footer_sl_num = 0;
var footer_sl_len = 0;

function live_silde(){


 if($(".live_item").length==1){
$(".img_point").eq(0).remove()
$(".img_point").eq(1).remove()
$(".live_controller").remove()

}else if($(".live_item").length==2){
$(".img_point").eq(1).remove()
}
  footer_sl_len =$(".img_point").length
  


  var $c1 = $(".entry_footer_live .live_item").eq(0).clone().addClass('sp')
  var $c2 = $(".entry_footer_live .live_item").eq(footer_sl_len-1).clone().css({
    "position":"absolute",
    left:-winW
  }).addClass('sp')
  

  $(".entry_footer_live_in").append($c1)
  $(".entry_footer_live_in").prepend($c2)





  $(".entry_footer_live").swiperight(function(){
    if(footer_sl_num>0){
      footer_sl_num--
    }else{
      footer_sl_num = footer_sl_len-1
    }
    live_silde_ani()
  }).swipeleft(function(){
      if(footer_sl_num<footer_sl_len-1){
      footer_sl_num++
    }else{
      footer_sl_num = 0
    }
    live_silde_ani()
  })
  $(".img_right").tap(function(){
  if(footer_sl_num<footer_sl_len){
      footer_sl_num++
    }
    live_silde_ani()
  })
  $(".img_left").tap(function(){
     if(footer_sl_num>=0){
      footer_sl_num--
    }

    live_silde_ani()
  })

}

function live_silde_ani(){
  TweenLite.to($('.entry_footer_live_in'), 0.8, {x:-(footer_sl_num*winW),onComplete:function(){
    if(footer_sl_num==footer_sl_len){
      TweenLite.to($('.entry_footer_live_in'), 0, {x:0})

      footer_sl_num = 0
        
    }

     if(footer_sl_num==-1){
      TweenLite.to($('.entry_footer_live_in'), 0, {x:-((footer_sl_len-1)*winW)})

      footer_sl_num =footer_sl_len-1
        
    }
  }});
  
  $(".img_point img").attr("src","/img/live/img_.png");
  $(".img_point img").eq(footer_sl_num).attr("src","/img/live/img_active.png");
  if(footer_sl_num==footer_sl_len){
    $(".img_point img").attr("src","/img/live/img_.png");
    $(".img_point img").eq(0).attr("src","/img/live/img_active.png");
   }
   if(footer_sl_num==-1){
    $(".img_point img").attr("src","/img/live/img_.png");
    $(".img_point img").eq(footer_sl_len-1).attr("src","/img/live/img_active.png");
   }


/*
 $('.live_item h2').textOverflowEllipsis({
    resize: true, // ウィンドウリサイズ時に追従するか
    numOfCharactersToReduce : 1, // 高さ計算するときに削る文字数
    suffix: '...' // 省略記号
  });

*/

}





