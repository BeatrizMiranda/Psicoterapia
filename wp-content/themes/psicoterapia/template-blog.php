<?php /* Template Name: Blog */ get_header();?>

<section id="intuitoBlog">
  <div class="container">
    <h1 class="tituloSessoes text-center"> Blog Psicoterapia para Todos </h1>
    <span>
      <p>
        Esse espaço é para falar um pouco sobre o intuito de blog, porque ele foi construido
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
      </p>
    </span>
  </div>
</section>

<section id="noticiaPrincipal" class="container">
  <div class="row">
    <?php
      $args = array(
        'category_name' => 'noticiasBlog',
        'orderby'     => 'date',
        'posts_per_page' => 1,

      );

      $custom_query = new WP_Query( $args );

      if (have_posts()):
        while ($custom_query->have_posts()): $custom_query->the_post();
    ?>

    <div class="col-xs-12 noticia">
      <div class="conteudo">
        <h3 class="text-center"> <?php the_title(); ?> </h3>

        <span>
        <?php the_excerpt();?>
        </span>
      </div>
        <a href="<?php echo get_post_permalink(get_the_ID())?>">
          <div class="col contLendo text-center">
            Continuar lendo
          </div>
        </a>
    </div>

    <?php endwhile; endif ?>
  </div>

</section>

<section id="outrasNoticia" class="container">
  <div class="row">
    <?php
      $arg = array(
        'category_name' => 'noticiasBlog',
        'orderby'     => 'date',
        'posts_per_page' => 4,
        'offset' =>1,

      );

      $the_query = new WP_Query( $arg);

      if ($the_query->have_posts()):
        while ($the_query->have_posts()): $the_query->the_post();
    ?>

    <div class="col-md-6 col-xs-12 caixaNoticia">
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
</section>

<section id="demaisNoticias">
  <div class="container">
    <h1 class="tituloSessoes text-center"> Artigos que talvez te interesse: </h1>
    <div class="row">
      <?php
        $argum = array(
          'category_name' => 'noticiasBlog',
          'orderby'     => 'date',
          'posts_per_page' => 3,
          'offset' => 5,

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

<?php get_footer(); ?>
