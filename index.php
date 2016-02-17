<?php get_header(); ?>
<?php if ( is_home() ) : ?>
      <section class="row">
        <div class="jumbotron">
          <h1><?php bloginfo( 'name' ); ?></h1>
          <p>
            <?php bloginfo( 'description' ); ?>
          </p>
          <a href="#" class="btn btn-primary btn-lg">Saber más</a>
        </div>
      </section>
      <section class="row">
        <?php
          if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
            <article class="articulo col-md-3 col-sm-6">
              <picture class="thumbnail">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail( array( 242, 200 ) );
                } else {
                  ?><img src="http://placekitten.com/g/242/200" alt="" /><?php
                }
                ?>
                <div class="caption">
                    <a href="<?php the_permalink(); ?>"><h3 class="text-center"><?php the_title(); ?></h3></a>
                    <p class="text-justify">
                      <?php substr(the_excerpt(), 0 , 200 ) ?>
                    </p>
                </div>
              </picture>
            </article>
            <?php
          endwhile;
          else :
            __( 'Lo sentimos, no hay entradas que coincidan con su búsqueda.', 'openwebinars' );
          endif;
         ?>
      </section>
<?php elseif ( is_single() || is_page() ) :
  if ( have_posts() ) : while ( have_posts() ) : the_post();
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
<?php endif; ?>

<?php get_footer(); ?>
