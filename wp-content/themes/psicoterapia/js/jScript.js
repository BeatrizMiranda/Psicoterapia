/*Função do menu*/
function menuFunction(x) {
  x.classList.toggle("change");
  if($('.hamburguer').hasClass('change')){
    $('.menuDown').css("display", "block");

  }else{
    $('.menuDown').css("display", "none");
  }
}

function instFunction(y) {
  y.classList.toggle("changeIns");
  if($('#institucional').hasClass('changeIns')){
    $('#menuInstitucional').slideDown();
    $('#seta').removeClass("glyphicon-menu-down");
    $('#seta').addClass("glyphicon-menu-up");
  }else{
    $('#menuInstitucional').slideUp();
    $('#seta').removeClass("glyphicon-menu-up");
    $('#seta').addClass("glyphicon-menu-down");
  }
}

$(document).ready(function () {
  $('#formulario').submit(function(){
    $('#submitModal').modal('show');
  });

  $('.tituloMenu span, .logoMenu, .menuDown, #menuInstitucional').css("display", "none");

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

/**************** Menu fixo apartir da imagem *********************/
    $(window).scroll(function() {
       var scroll = $(window).scrollTop();

       if (scroll > 300) {
         $('#menu').css("position", "fixed");
         $('.tituloMenu span, .logoMenu').css("display", "block");

       } else {
         $('#menu').css("position", "static");
         $('.tituloMenu span, .logoMenu').css("display", "none");

       }
    });
    /************ link interno no menu, scroll leve **************/

    $('.menuDown a[href^="#"], .botao-cabecalho a[href^="#"], #comoInscrevo a[href^="#"]').on('click', function(e) {
      // prevenir que o link funcione da forma padrão que no caso seria "pulando" para o elemento com o id
      e.preventDefault();
      //variável id com o valor refentente ao link clicado
      var id = $(this).attr('href'), targetOffset = $(id).offset().top;
      $('html, body').animate({
          scrollTop: targetOffset - 110
      }, 500);
    });

});
