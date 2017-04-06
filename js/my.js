$(document).ready(function() {

  $(window).scroll(function() {  // Высота проявления кнопки
    if ($(this).scrollTop() > 100) {
      $('#go-to-top').fadeIn();
    } else {
      $('#go-to-top').fadeOut();
    }
  });

  $('#go-to-top').click(function() {
    $('body,html').animate({
      scrollTop: 0  // Скорость подъема
    }, 2000);
    return false;
  });

  $('.button-show').click(function() {
    $('.col-xs-3').css('left', '0').css('position','relative');
    $('.col-xs-3').toggle( "slow" );
  });

});

