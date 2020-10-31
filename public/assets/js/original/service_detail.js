window.lazySizesConfig = {
    lazyClass: 'case_sum_img', // lazyloadの対象とするクラスの指定。
};
document.addEventListener('lazybeforeunveil', function(e){
      var bg = e.target.getAttribute('data-bg');
      if(bg){
          e.target.style.backgroundImage = 'url(' + bg + ')';
      }
  });

$(function() {
if(winW<768){
  footer_silde()
}


});



var footer_sl_num = 0;
var footer_sl_len = 0;

function footer_silde(){
  footer_sl_len=2
  var $c1 = $(".live_item").eq(0).clone().addClass('sp')
  var $c2 = $(".live_item").eq(footer_sl_len-1).clone().css({
    "position":"absolute",
    left:-winW
  }).addClass('sp')
  



  $(".slider").swiperight(function(){
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
  $(".slider .img_right").tap(function(){
  if(footer_sl_num<footer_sl_len-1){
      footer_sl_num++
    }else{
      footer_sl_num = 0
    }
    live_silde_ani()
  })
  $("..slider img_left").tap(function(){
     if(footer_sl_num>0){
      footer_sl_num--
    }else{
      footer_sl_num = footer_sl_len-1
    }

    live_silde_ani()
  })
}

function live_silde_ani(){
  TweenLite.to($('.case_main'), 0.8, {x:-(footer_sl_num*(winW/2)),onComplete:function(){
   
        
    }

  });
$(".img_point img").attr("src","/img/live/img_.png");
  $(".img_point img").eq(footer_sl_num).attr("src","/img/live/img_active.png");
}

