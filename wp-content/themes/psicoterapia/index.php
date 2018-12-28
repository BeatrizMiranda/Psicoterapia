<?php get_header(); ?>
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
