/* global $ */
$('.question-icon').on('click', function(){
  $('.question-box').slideToggle();
});

$('.alert').on('click', function(){
  alert('準備中です。');
});

$('.works__block__image').on({
  
  'mouseenter' : function(){
    $(this).siblings().children().first().addClass('underline');
  },
  
  'mouseleave': function(){
    $(this).siblings().children().first().removeClass('underline');
  }

});

$(window).scroll(function (){
  $('.fadein').each(function(){
      var elemPos = $(this).offset().top,
          scroll = $(window).scrollTop(),
          windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 200){
        $(this).addClass('scrollin');
      }
  });
});
