<?php /* Template Name: Blog */ get_header();?>

<section class="container">
  <div class="row">
    <?php
      $args = array(
        'category_name' => 'noticiasBlog',
        'orderby'     => 'date'
      );

      $custom_query = new WP_Query( $args );

      if (have_posts()):
        while ($custom_query->have_posts()): $custom_query->the_post();
    ?>

    <div class="col-xs-12">

        <h3 class="text-center"> <?php the_title(); ?> </h3>

        <span>
        <?php the_excerpt();?>
      </span>
    </div>
    <a href="<?php echo get_post_permalink(the_post()->ID)?>">Leia mais +</a>

    <?php endwhile; endif ?>
  </div>

</section>

<?php get_footer(); ?>
