function resetPos() {
  $('.slider ul li').removeClass('transition');
  $('.slider ul li').removeClass('left right');
}

//clicks
$('.prev').on('click', function(){
  $('.slider ul li').addClass('transition right');
  
  setTimeout(function(){
    prev();
    resetPos();
  }, 500);
});

$('.next').on('click', function(){
  $('.slider ul li').addClass('transition left');
  
  setTimeout(function(){
    next();
    resetPos();
  }, 500);
});



///////////////////////////////////////////////////////////////
function init() {
  $('.slider ul li').each(function(){
    var curPos = $(this).index();
    $(this).css('order', curPos+1);
  });
}

function prev() {
  var slider = $('.slider');
  var sliderLength = slider.find('ul li').length;
  $('.slider ul li').each(function(){
    var curPos = parseInt($(this).css('order'));
    var sliderLength = slider.find('ul li').length;
    if (curPos < sliderLength) {
      $(this).css('order', curPos+1);  
    }
    else {
      curPos = 1;
      $(this).css('order', curPos);  
    }
  });
}

function next() {
  var slider = $('.slider');
  var sliderLength = slider.find('ul li').length;
  $('.slider ul li').each(function(){
    var curPos = parseInt($(this).css('order'));
    var sliderLength = slider.find('ul li').length;
    if (curPos > 0) {
      $(this).css('order', curPos-1);  
    }
    else {
      curPos = sliderLength-1;
      $(this).css('order', curPos);  
    }
  });
}

$(document).ready(function(){
  init();
});