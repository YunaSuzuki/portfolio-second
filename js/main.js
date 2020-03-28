/* global $ */
$('.question-icon').on('click', function(){
  $('.question-box').slideToggle();
});

$('.alert').on('click', function(){
  alert('準備中です。');
});

$('.works__block__image').on({
  
  'mouseenter' : function(){
    console.log('mouseover');
    $(this).siblings().children().first().addClass('underline');
  },
  
  'mouseleave': function(){
    console.log('mouseleave');
    $(this).siblings().children().first().removeClass('underline');
  }

});

$('.iconbox li').on('mouseenter', function(){
  $(this).css({transform: 'rotate(360deg)'}, 2000);
})