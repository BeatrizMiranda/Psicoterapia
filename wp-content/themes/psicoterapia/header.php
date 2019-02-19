<!DOCTYPE html>
<html>
	<head>
	  <title>Psicoterapia</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon na aba do navegador -->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri();?>/img/logo.png">
    <!--[if IE]><link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/img/logo.png"><![endif]-->
    

    <!-- para deixar a aba no  mobile colorida -->
	<meta name="theme-color" content="#7ca7db">
	<meta name="apple-mobile-web-app-status-bar-style" content="#7ca7db">
	<meta name="msapplication-navbutton-color" content="#7ca7db">

    <!--Bootstrap-->
    <link href="<?php echo get_stylesheet_directory_uri();?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--Css-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css" type="text/css" />

  </head>

  <body>
		<nav class="container-fluid navbar" id="menu">
			<div class="row menuFixo">
				<div class="col-xs-2 text-center img-logo-menu-fixo">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" alt="logo psicoterapia" width="50" class="logoMenu"/>
				</div>
				<div class="col-xs-8 text-center tituloMenu navbar-brand">
					<span>Psicoterapia para Todos</span>
				</div>
				<div class="col-xs-2 hamburguer" onclick="menuFunction(this)">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</div>
			</div>
		</nav>

	 <nav class="menuDown">
			<div class="col-md-3 col-md-offset-9 col-xs-12 divMenu">

				<div class="row" id="institucional" onclick="instFunction(this)">
					<p class="col-xs-10">
						Institucional
					</p>
					<span id="seta" class="glyphicon glyphicon-menu-down col-xs-2"></span>
				</div>
				<ul id="menuInstitucional">
					<a href="<?php echo is_home() ?  "#sobre_nos" :  get_home_url()."#sobre_nos";?>"><li>Sobre nós</li></a>
					<a href="<?php echo is_home() ?  "#comoComeco" :  get_home_url()."#comoComeco";?>"><li>Como começo?</li></a>
					<a href="<?php echo is_home() ?  "#comoInscrevo" :  get_home_url()."#comoInscrevo";?>"><li>Como me inscrevo?</li></a>
					<a href="<?php echo is_home() ?  "#consultas" :  get_home_url()."#consultas";?>"><li>Consultas</li></a>
					<a href="<?php echo is_home() ?  "#cadastre" :  get_home_url()."#cadastre";?>"><li>Cadastre-se</li></a>
					<a href="<?php echo is_home() ?  "#valores" :  get_home_url()."#valores";?>"><li>O que guia o projeto?</li></a>
				</ul>
				<div class="row" id="blog">
					<a href="<?php echo get_site_url(); ?>/blog">
						<p class="col-xs-10">
							Blog
						</p>
					</a>
				</div>

			</div>
		</nav>

    <header>
	    <div class="container">
        <div class="row cabecalho">

          <div class="col-md-3 col-md-offset-2 col-sm-4 col-xs-12 text-xs-center logo">
            <img class="text-xs-center img-fluid"
		         src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png"
		         width="220px" alt="Logo do Psicoterapia"/>
          </div>

          <div class="col-md-5 col-sm-8 col-xs-12 text-xs-center text-sm-center titulo">
            <h1 class="text-center" >Psicoterapia para Todos</h1>
            <h2 class="text-center" >Uma equipe de psicólogos que acredita que a psicoterapia deve ser para todos</h2>
					</div>

        </div>
				<div class="row">
					<div class="col-md-1 col-md-offset-11 col-xs-5 col-xs-offset-7 row">
						<div class="ba col-xs-5 selecao">
							<p>A+</p>
						</div>
						<div class="bd col-xs-offset-1 col-xs-5 selecao">
							<p>A-</p>
						</div>
					</div>
				</div>
      </div>
    </header>
