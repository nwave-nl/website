$(window).on('scroll', function () {
  if($(window).scrollTop()) {
    $('.nav').addClass('bg');
  }
  else {
    $('.nav').removeClass('bg');
  }
});
