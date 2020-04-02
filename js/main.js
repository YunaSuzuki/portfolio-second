/* global $ */

//skill-section ?mark-clicked
$('.question-icon').on('click', function(){
  $('.question-box').slideToggle();
});


//準備中アラート
$('.alert').on('click', function(){
  alert('準備中です。');
});


//works-section hover時にunderline
$('.works__block__image').on({
  'mouseenter' : function(){
    $(this).siblings().children('.works__block__textbox__upper').addClass('underline');
  },
  
  'mouseleave': function(){
    $(this).siblings().children('.works__block__textbox__upper').removeClass('underline');
  }

});

$('.works__block__textbox__upper').on({
  'mouseenter' : function(){
    $(this).addClass('underline');
  },
  
  'mouseleave': function(){
    $(this).removeClass('underline');
  }

});




//sp-view skill fadein
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
