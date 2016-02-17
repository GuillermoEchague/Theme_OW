<?php get_header(); ?>

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
                    <h3 class="text-center"><?php the_title(); ?></h3>
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

<?php get_footer(); ?>
