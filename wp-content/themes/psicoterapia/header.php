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
		<nav class="container-fluid navbar" id="menu">
			<div class="row menuFixo">
				<div class="col-xs-2 text-center">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" alt="logo psicoterapia" width="50"/>
				</div>
				<div class="col-xs-8 text-center tituloMenu navbar-brand">
					Psicoterapia para Todos
				</div>
				<div class="col-xs-2 hamburguer" onclick="myFunction(this)">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</div>
			</div>
		</nav>
		<div class="menuDown">
			<div class="col-md-\3">
				<ul>
					<li><a>Blog</a></li>
					<li><a>Encontre seu Psicólogo</a></li>
					<li><a>Sobre</a></li>
					<li><a>Sobre nos</a></li>

				</ul>
			</div>
		</div>

    <header>
	    <div class="container">
				<div class="row">
					<div class="col-xs-1 col-xs-offset-11 hamburguer" onclick="myFunction(this)">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</div>
				</div>

        <div class="row cabecalho">

          <div class="text-center col-md-3 col-md-offset-2 col-sm-4 col-xs-12 logo">
            <img class="text-center"
            src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png"
            width="220px" alt="Logo do Psicoterapia"/>
          </div>

          <div class="col-md-5 col-sm-8 col-xs-11 text-xs-center text-sm-center titulo">
            <h1>Psicoterapia para Todos</h1>
            <h2>Uma equipe de psicólogos que acredita que a psicoterapia deve ser para todos</h2>
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
