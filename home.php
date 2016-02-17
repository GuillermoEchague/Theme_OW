<?php
/**
* Plantilla para mostrar el feed de entradas cuando una página estática
* está seleccionada en Ajustes->Lectura
*/

 get_header(); ?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
 ?>
 <section class="row">
   <div class="col-md-8">
     <article class="col-md-12">
       <h2><?php the_title(); ?></h2>
       <?php the_content(); ?>
     </article>
    </div>
    <?php get_sidebar(); ?>
 </section>
 <?php endwhile; ?>
 <?php else: ?>
   <?php _e('Lo sentimos, no hemos encontrado el contenido que buscaba.'); ?>
 <?php endif; ?>

<?php get_footer(); ?>
