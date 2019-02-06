/*Função do menu*/
function myFunction(x) {
  x.classList.toggle("change");

  if($('.hamburguer').hasClass('change')){
    $('.menuDown').css("display", "block");
  }else{
    $('.menuDown').css("display", "none");
  }
}

$(document).ready(function () {
  $('#menu').css("display", "none");
  $('.menuDown').css("display", "none");

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
         $('#menu').css("display", "block");
       } else {
         $('#menu').css("display", "none");

       }
    });
});
