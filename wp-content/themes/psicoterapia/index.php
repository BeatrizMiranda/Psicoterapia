<?php get_header(); ?>

<section id="sobre_nos">
  <div class="row sobre-nos">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center botao-cabecalho">
          <a class="vem-conhecer" href="#sobre-nos-titulo">Vem conhecer!</a>
        </div>

        <div class="col-xs-12 text-center">
          <h1 class="titulo tituloSessoes" id="sobre-nos-titulo">Sobre nós</h1>
        </div>

        <div class="col-md-5 col-sm-6 col-md-offset-1 col-xs-12">
          <h2 class="como-surgiu-tit">  Como surgiu? </h2>

          <span class="como-surgiu-texto text-left">
            O projeto surgiu a partir da iniciativa de um grupo de profissionais que constataram que apesar da grande procura
            pela psicoterapia, muitos clientes não aderiram por limitações financeiras.
          <br>
            Como enfrentamento dessa problemática, pretendemos estruturar uma rede de profissionais engajados na cauda da saúde
            mental e que compreendam a realidade de nossa população.
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
    <br/>
  </div>
</section>

<section class="comoComeco">
  <div class="container">
    <center><h1 class="tituloSessoes">Como começo?</h1></center>
    <div class="row caixaComoComeco">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div>
          <h2>Quem pode participar?</h2>
          <br>
          <span>
          Qualquer cidadão brasileiro de baixa renda (Classe B1 - C2). De todas as faixas etárias.
          <br>
          É necessário comprovar sua renda por meio de um questionário socioeconômico e apresentar a documentação exigida ao lado.
          </span>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div>
          <h2>Quais são os documentos obrigatórios?</h2>
          <br/><br/>
          <span>
          <ul>
            <li>- Xerox do RG e do CPF,</li>
            <li>- Comprovante de endereço,</li>
            <li>- Xerox carteira de trabalho ou recibos salariais.</li>
          </ul>
        </span>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="comoInscrevo" class="azulClarinho">
  <div class="container">

  <center><h1 class="tituloSessoes"> Como me inscrevo? </h1> </center>

  <p>
    Basta deixar um meio de contato (celular, telefone ou e-mail) e o mais breve possível
    um de nossos profissionais entrará em contato para agendar a triagem.
    <a href="#cadastre">Clique aqui</a> para ir ao formulário.
  </p>
  <p>
    A triagem é gratuita, para que você possa conhecer o profissional, apresentar a
    documentação, tirar dúvidas e juntos planejarem o processo terapêutico.
  </p>

  </div>
</section>

<section id="consultas">
  <center><h1 class="tituloSessoes"> Consultas </h1> </center>
  <div class="container">
    <div class="row">
      <?php
        $args = array(
          'orderby'     => 'date'
        );

        $custom_query = new WP_Query( $args );

        if (have_posts()):
          while ($custom_query->have_posts()): $custom_query->the_post();
      ?>

      <div class="col-md-4 col-sm-6 col-xs-12 caixaConsulta">
        <div>

          <center><h3> <?php the_title(); ?> </h3></center>

          <span>
          <?php the_excerpt();?>
        </span>
        </div>
      </div>

      <?php endwhile; endif ?>
    </div>
  </div>
</section>

<section id="cadastre" class="corpo-cadastre">
  <center><h1 >Cadastre-se</h1></center>
  <div class="container">
    <div class="row caixaCadastre">

          <form class="col-md-6 col-sm-6 col-xs-12">
            <fieldset class="scheduler-border">
              <legend class="scheduler-border">Inscrição</legend>
              <p>
                <center>Faça o seu cadastro que entraremos em contato!</center>
              </p>

              <div class="row">
                <form id="formulario"  action="" method="get">

                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome" required="required">
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label for="telefone">Telefone: </label>
                    <input type="text" class="form-control telefone" id="telefone" placeholder="Telefone" required="required">
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label for="email">E-mail: </label>
                    <input type="text" class="form-control" id="email" placeholder="Email" required="required">
                  </div>
                  <button type="submit" class="btn btn-primary botao col-md-offset-10 col-xs-offset-9">Enviar</button>

                </form>
              </div>
            </fieldset>
          </form>


          <form class="col-md-6 col-sm-6 col-xs-12">
            <fieldset class="scheduler-border">
              <legend class="scheduler-border">Alguma Dúvida?</legend>
              <div class="row contato">

                <img class=" col-md-2 col-sm-2 col-xs-2" src="<?php echo get_stylesheet_directory_uri();?>/img/whatsapp.svg" alt="ícone de telefone">
                <p class="col-md-10 col-sm-10 col-xs-10"><center>Ligue ou mande uma mensagem: <br/> <a href="tel:11950302017">(11) 95030-2017 </a>- Vivo</center></p>

                <img class=" col-md-2 col-sm-2 col-xs-2" src="<?php echo get_stylesheet_directory_uri();?>/img/email.svg" alt="ícone de email">
                <p class="col-md-10 col-sm-10 col-xs-10"><center>Ou um email: <br/> <a href="mailto:psicoterapia.todos@outlook.com">psicoterapia.todos@outlook.com</a></center></p>

                <img class=" col-md-2 col-sm-2 col-xs-2" src="<?php echo get_stylesheet_directory_uri();?>/img/facebook.svg" alt="ícone do facebook">
                <p class="col-md-10 col-sm-10 col-xs-10"><center>Acesse nossa página no facebook: <br/> <a target="_blank" href="https://www.facebook.com/projetopsicoterapiaparatodos/?ref=br_rs">Projeto Psicoterapia para Todos</a></center></p>

              </div>
            </fieldset>
          </form>

    </div>
  </div>
</section>

<div id="valores">
  <section class="container">

    <h1><center> O que guia o projeto? </center></h1>

    <div class="row">

      <div class="col-md-4 col-xs-12">
        <center><h1>Missão</h1></center>
        Tornar a psicoterapia acessível para maior faixa da poplação, levando conscientização sobre a importância dos cuidados com a saúde mental.
      </div>

      <div class="col-md-4 col-xs-12">
        <br/>
        <img src="<?php echo get_stylesheet_directory_uri();?>/img/pessoas.png" width="200" alt="Imagem ilustativa de pessoas"/>
      </div>

      <div class="col-md-4 col-xs-12">
        <center><h1>Visão</h1></center>
        Ser reconhecido pela excelência de serviço, conduta ética e comprometimento com a causa da saúde mental.
      </div>

    </div>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 col-xs-12">
        <center><h1>Valores</h1></center>
        - Compreensão do ser humano como ser biopsicossocial.<br/>
        - Comprometimento com as causas sociais.<br/>
        - Respeito às subjetividades.<br/>
      </div>
      <div class="col-md-3"></div>

    </div>

  </section>
</div>

<?php get_footer(); ?>
