<?php get_header(); ?>
<section>
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
  </div>
</section>

<section class="container comoComeco">
  <center><h1>Como começo?</h1></center>
  <div class="row caixaComoComeco">
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div>
        <h1>Quem pode participar?</h1>
        <br>
        <p>
        Qualquer cidadão brasileiro de baixa renda (Classe B1 - C2). De todas as faixas etárias.
        <br>
        É necessário comprovar sua renda por meio de um questionário socioeconômico e apresentar a documentação exigida ao lado.
        </p>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div>
        <h1>Quais são os documentos obrigatórios?</h1>
        <br/>
        <p>
        <ul>
          <li>- Xerox do RG e do CPF,</li>
          <li>- Comprovante de endereço,</li>
          <li>- Xerox carteira de trabalho ou recibos salariais.</li>
        </ul>
        </p>
      </div>
    </div>
  </div>
</section>

<section id="comoInscrevo" class="azulClarinho">

  <center><h1> Como me inscrevo? </h1> </center>

  <p>
    Basta deixar um meio de contato (celular, telefone ou e-mail) e o mais breve possível
    um de nossos profissionais entrará em contato para agendar a triagem.
    <a>Clique aqui</a> para ir ao formulário.
  </p>
  <p>
    A triagem é gratuita, para que você possa conhecer o profissional, apresentar a
    documentação, tirar dúvidas e juntos planejarem o processo terapêutico.
  </p>

</section>

<section id="consultas">
  <center><h1> Consultas </h1> </center>
  <div class="container-fluid">
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

          <center><h1> <?php the_title(); ?> </h1></center>

          <?php the_excerpt();?>

        </div>
      </div>

      <?php endwhile; endif ?>
    </div>
  </div>
</section>
<section id="cadastre" class="corpo-cadastre">
  <center><h1>Cadastre-se</h1></center>
  <div class="caixaCadastro">
    <div class="alinharCaixa insc-caixa">
      <form action="/action_page.php">
          <fieldset class="fieldset">
            <legend>Inscrição</legend>
            <div class="campos">
              <p>
              Faça o seu cadastro que entraremos em contato
              </p>
              <ul>
                <li><label>Nome:</label><input type="text" name="nome"><br></li>
                <li><label>Telefone:</label><input type="text" name="telefone" id="tel"><br></li>
                <li><label>E-mail:</label><input type="email" name="email"><br></li>
              </ul>
              <div id="caixa-botao">
                <input id="botao" type="submit" value="Enviar">
              </div>
            </div>
          </fieldset>
      </form>
    </div>
    <div class="alinharCaixa">
      <fieldset class="duvida-caixa">
          <legend>Alguma dúvida?</legend>
          <div class="icones">
            <img class="loguinho" src="<?php echo get_stylesheet_directory_uri();?>/img/logo_telefone.png"><br>
            <img class="loguinho" src="<?php echo get_stylesheet_directory_uri();?>/img/email.svg"><br>
            <img class="loguinho" src="<?php echo get_stylesheet_directory_uri();?>/img/facebook.svg"><br>
          </div>
        <div>
          <p>
          Ligue ou mande uma mensagem:<br>

          (11) 95030-2017 - Vivo<br><br>
          Ou mande um e-mail:<br>

          exemplo@psicoterapiaparatodos.com.br
          <br><br>
          Acesse nossa página no Facebook:<br>

          facebook.com/projetopsicoterapiaparatodos
          </p>
        </div>
      </fieldset>
    </div>
  </div>
</section>
<section id="valores">
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

<?php get_footer(); ?>
