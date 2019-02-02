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
    /**************************************************/
    /*link interno no menu, scroll leve
    $('.primeira a[href^="#"], #bannerInicial a[href^="#"]').on('click', function(e) {
        // prevenir que o link funcione da forma padrão que no caso seria "pulando" para o elemento com o id
        e.preventDefault();
        //variável id com o valor refentente ao link clicado
        var id = $(this).attr('href'), targetOffset = $(id).offset().top;
        $('html, body').animate({
            scrollTop: targetOffset - 200
        }, 500);
      });
*/
});
