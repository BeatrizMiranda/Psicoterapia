$(document).ready(function () {
  $('.telefone').mask('(00) 00000-0000');

  /***********Aumentar e diminuir letra**************/
  $('body').css({fontSize: 20});
  var fonte = 20;
    $(".ba").click(function () {
        if (fonte < 25) {
            fonte = fonte + 1;
            $('body').css({fontSize: fonte + 'px'});
        }
    });

    $(".bd").click(function () {
        if (fonte > 14) {
            fonte = fonte - 1;
            $('body').css({fontSize: fonte + 'px'});
        }
    });

/*    *************************************************/
    /*Menu fixo apartir da imagem
    if( $('section.homepage').length ){
      $(function(){
          var nav = $('#menu');
          $(window).scroll(function () {
              if ($(window).width() < 1024) {
                  if ($(this).scrollTop() > 81) {
                      nav.addClass("menuFixo");
                  } else {
                      nav.removeClass("menuFixo");
                  }
              }else{
                  if ($(this).scrollTop() > 475) {
                      nav.addClass("menuFixo");
                  } else {
                      nav.removeClass("menuFixo");
                  }
              }
          });
      });
    }
*/


});
