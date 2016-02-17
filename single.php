<?php
/**
* Plantilla para mostrar las entradas únicas
*/

 get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<section class="row">
  <article class="col-md-12">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </article>
</section>
<?php endwhile; ?>
<?php else: ?>
  <?php _e('Lo sentimos, no hemos encontrado el contenido que buscaba.'); ?>
<?php endif; ?>

<?php get_footer(); ?>
