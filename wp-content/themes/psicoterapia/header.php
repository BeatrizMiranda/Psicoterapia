<!DOCTYPE html>
<html>
	<head>
	  <title>Psicoterapia</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap-->
    <link href="<?php echo get_stylesheet_directory_uri();?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo get_stylesheet_directory_uri();?>/bootstrap/js/bootstrap.min.js"></script>

    <!--Css-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css" type="text/css" />

  </head>
  
  <body>
    <header>
      <div class="row menu-fixo">
        <div class="col-md-2 col-xs-2">
          <img class="logo-menu" src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" alt="Logo do Psicoterapia"/>
        </div>
        
        <div>
          <span class=" col-md-8 col-xs-8 titulo-menu">
            Psicoterapia para Todos
          </span>
        </div>
        
        <input id="menu-hamburguer" type="checkbox"/>
        <label for="menu-hamburguer">
          <div class="col-md-2 col-xs-1 menu">
            <span class="hamburguer"></span> 
          </div>
        </label>        
      
      </div>
      <div class="container">
        <div class="row cabecalho">
          
          <div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-2 logo">
            <img class="col-xs-12" 
            src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" 
            width="220px" alt="Logo do Psicoterapia"/>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12 text-xs-center titulo">
            <h1>Psicoterapia para Todos</h1>
            <h2>Uma equipe de psicólogos que acredita que a psicoterapia deve ser para todos</h2>
          </div>

        </div>
      </div>
    </header>
    
    <div class="row sobre-nos">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center botao-cabecalho">
            <a class="vem-conhecer" href="#sobre-nos-titulo">Vem conhecer!</a>
          </div>
          
          <div class="col-xs-12 text-center">
            <h3 class="titulo" id="sobre-nos-titulo">Sobre nós</h3>
          </div>

          <div class="col-md-5 col-sm-6 col-md-offset-1 col-xs-12">
            <h4 class="como-surgiu-tit">  Como surgiu? </h4>

            <span class="como-surgiu-texto text-left">
              O projeto surgiu a partir da iniciativa de um grupo de profissionais que constataram que apesar da grande procura pela psicoterapia, muitos clientes não aderiram por limitações financeiras. 

            <br>

            Como enfrentamento dessa problemática, pretendemos estruturar uma rede de profissionais engajados na cauda da saúde mental e que compreendam a realidade de nossa população.
          </span>
          </div>

          <div class="col-md-5 col-sm-6 col-xs-11 text-left container-dados-oms">
            <span class="texto-dados-oms">
              Temos uma demanda social bastante urgente, conforme apontam os dados fornecidos pela OMS no Brasil.

              A depressão atinge 11,5 milhões de pessoas (5.8% da população), enquanto distúrbios relacionados a ansiedade afetam mais de 18.6 milhões de Brasilleiros (9.3% da população).
            </span>
            
          </div>

        </div>
      </div>
    </div>