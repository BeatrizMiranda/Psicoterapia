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
				<a class="col-xs-4" href="<?php echo get_site_url(); ?>/blog">
					<span class="glyphicon glyphicon-menu-left"></span>
					<span class="voltar">Voltar</span>
				</a>
			</div>
		</div>
		<div class="divPosts">

		<section class="container-fluid notAberta">
			<div class="row">
				<div class="col-md-3 col-xs-12 imgPost text-center">
					<img src="<?php echo get_the_post_thumbnail_url() ?>"
					alt="<?php echo get_the_post_thumbnail_caption()?>"/>
				</div>

				<div class="col-md-9 col-xs-12">
				 <div class="row caixaPost">
					 <div class="col-md-11 col-sx-11">
						 <div class="row">
							 <div class="col-xs-12 tituloPost text-left">
								 <?php

									 if (have_posts()):
										 while (have_posts()): the_post();
								 ?>

									 <h1> <?php the_title(); ?> </h1>
							 </div>
							 <div class="col-sx-11 col-md-11">
								 <span>
									 <?php the_content();?>
								 </span>

								 <?php endwhile; endif ?>
							 </div>
						 </div>

					 </div>
					 <div class="col-md-1 col-xs-1 telaGrande">
						 <div class="compartilhar">
							 <img title="Compartilhe no WhatsApp" src="<?php echo get_stylesheet_directory_uri();?>/img/whatsapp.svg" width="40" alt="ícone de telefone">
  						 <img title="Compartilhe no Facebook" src="<?php echo get_stylesheet_directory_uri();?>/img/facebook.svg" width="40" alt="ícone do facebook"/>
							 <img title="Compartilhe por E-mail" src="<?php echo get_stylesheet_directory_uri();?>/img/email.svg" width="40" alt="ícone de email"/>
							 <img title="Compartilhe no Twitter" src="<?php echo get_stylesheet_directory_uri();?>/img/twitter.svg" width="40" alt="ícone do Twitter"/>
						 </div>
					 </div>
				 </div>
			 </div>
			</div>
		</section>
	<div class="container mobileSocial">
		<h3>Compartilhe:</h3>
		<div class="row">
			<img class="col-xs-3" title="Compartilhe no WhatsApp" src="<?php echo get_stylesheet_directory_uri();?>/img/whatsapp.svg" width="40" alt="ícone de telefone">
			<img class="col-xs-3" title="Compartilhe no Facebook" src="<?php echo get_stylesheet_directory_uri();?>/img/facebook.svg" width="40" alt="ícone do facebook"/>
			<img class="col-xs-3" title="Compartilhe por E-mail" src="<?php echo get_stylesheet_directory_uri();?>/img/email.svg" width="40" alt="ícone de email"/>
			<img class="col-xs-3" title="Compartilhe no Twitter" src="<?php echo get_stylesheet_directory_uri();?>/img/twitter.svg" width="40" alt="ícone do Twitter"/>
		</div>
	</div>
</div>
<section class="demaisNoticias">
  <div class="container">
    <h1 class="tituloSessoes text-center"> Artigos que talvez te interesse: </h1>
    <div class="row">
      <?php
        $argum = array(
          'category_name' => 'noticiasBlog',
          'orderby'     => 'date',
          'posts_per_page' => 3,
        
        );

        $the_last_query = new WP_Query($argum);

        if ($the_last_query->have_posts()):
          while ($the_last_query->have_posts()): $the_last_query->the_post();
      ?>

      <div class="col-md-4 col-xs-12 caixaNoticia">
        <div class="noticia">
          <div class="conteudo">
            <h3 class="text-center"><?php the_title(); ?></h3>
            <span>
              <?php the_excerpt(__('(more…)')); ?>
            </span>
          </div>
          <a href="<?php echo get_post_permalink(get_the_ID())?>">
            <div class="col contLendo text-center">
              Continuar lendo
            </div>
          </a>
        </div>
      </div>

      <?php
        endwhile; endif
      ?>
    </div>

  </div>
</section>
<?php get_footer();?>
