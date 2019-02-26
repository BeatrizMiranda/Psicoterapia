<!DOCTYPE html>
<html lang="pt-br">
	<head>
	  <title>Psicoterapia</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content ="Encontre um psicólogo perto de você e pague uma taxa simbólica pelo atendimento! O Psicoterapia para Todos é um projeto que acredita que o acesso a terapia deve ser para todos. Contamos com uma rede de profissionais engajados com a democratização da saúde mental!ê">
		<meta name="keywords" content="Psicoterapia, terapia, psicólogo, consulta, sessão, clínica, atendimento, saúde mental, ong, preço acessível, grátis, limitação financeira, baixa renda, psicopedagogia, casal, família, avaliação neuropsicológica">


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
		<nav class="container-fluid navbar" id="menuNotAberta">
			<div class="row menuFixo">
				<div class="col-xs-2 text-center img-logo-menu-fixo">
					<a href="<?php echo get_site_url();?>">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" alt="logo psicoterapia" width="50" class="logoMenuNotAberta"/>
					</a>
				</div>
				<div class="col-xs-8 text-center tituloMenuNotAberta navbar-brand">
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

		<div class="container">
			<div class="row setaVoltar">
				<a href="<?php echo get_site_url(); ?>/blog">
					<span class="glyphicon glyphicon-menu-left"></span>
					<span class="voltar">Voltar</span>
				</a>
			</div>
		</div>

		<section class="container">
		  <div class="row">
		    <?php

		      if (have_posts()):
		        while (have_posts()): the_post();
		    ?>
				
	        <h3 class="text-center"> <?php the_title(); ?> </h3>

	        <span>
	        	<?php the_content();?>
	        </span>

		    <?php endwhile; endif ?>
		  </div>
		</section>
<?php get_footer();?>
