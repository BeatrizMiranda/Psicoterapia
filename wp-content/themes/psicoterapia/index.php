<?php get_header(); ?>
<section id="comoInscrevo">

  <center><h1> Como me inscrevo? </h1> </center>

  <p class="recuo">
    Basta deixar um meio de contato (celular, telefone ou e-mail) e o mais breve possível
    um de nossos profissionais entrará em contato para agendar a triagem.
    <a>Clique aqui</a> para ir ao formulário.
  </p>
  <p class="recuo">
    A triagem é gratuita, para que você possa conhecer o profissional, apresentar a
    documentação, tirar dúvidas e juntos planejarem o processo terapêutico.
  </p>

</section>

<section id="consultas">
  <center><h1> Consultas </h1> </center>
  <div class="container">
    <div class="row">
      <?php
        $args = array(
          'orderby'        => 'most_recent'
        );

        $custom_query = new WP_Query( $args );

        if (have_posts()):
          while ($custom_query->have_posts()): $custom_query->the_post();
      ?>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="caixaConsulta">

          <center><h1> <?php the_title(); ?> </h1></center>
          <p class="recuo"><?php the_excerpt();?></p>

        </div>
      </div>

      <?php endwhile; endif ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
