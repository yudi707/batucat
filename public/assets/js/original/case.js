

$(function() {
 $('.slider').slick({dots: true});
 $('.slider').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $(".slide_num").html("0"+i)
    });
$(".slider").hover(function(){
  TweenLite.to($(".slick-arrow"), 0.3, {opacity:0.6});
},function(){
  TweenLite.to($(".slick-arrow"), 0.3, {opacity:0});
})


$(".slider .img_box").tap(function(event) {
  var urll = $(this).parent().find('a.more').attr("href")
  location.href = urll
});
 resize_height()
$(window).resize(function(event) {
  resize_height()
});
});

function resize_height(){
  var   hlng = 0; 
  var   hlng2 = 0; 
  $(".case_main .case_item").each(function(index, el) {

  if(index<3){
    
     if($(this).find('.tag_box a').length<4){
      
      hlng++
     }
     if(hlng ==3){
      $("#case .case_main .case_item .tag_box").eq(0).addClass('h25')
      $("#case .case_main .case_item .tag_box").eq(1).addClass('h25')
      $("#case .case_main .case_item .tag_box").eq(2).addClass('h25')
     }
  }else{
    
     if($(this).find('.tag_box a').length<4){
      hlng2++

     }
     if(hlng2 ==3){
      $("#case .case_main .case_item .tag_box").eq(3).addClass('h25')
      $("#case .case_main .case_item .tag_box").eq(4).addClass('h25')
      $("#case .case_main .case_item .tag_box").eq(5).addClass('h25')
     }
  }
  });
}

window.lazySizesConfig = {
    lazyClass: 'case_sum_img', // lazyloadの対象とするクラスの指定。
};
document.addEventListener('lazybeforeunveil', function(e){
      var bg = e.target.getAttribute('data-bg');
      if(bg){
          e.target.style.backgroundImage = 'url(' + bg + ')';
      }
  });


