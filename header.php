<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php bloginfo( 'name' ); ?>
    </title>
  </head>
  <?php wp_head(); ?>
  <body>
    <div class="container">
      <header class="row">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="http://placekitten.com/g/20/20" alt="" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <?php wp_nav_menu( array(
                'menu' => 'header',
                'theme_location' => 'header-menu',
                'menu_class' => 'nav navbar-nav',
                'walker' => new wp_bootstrap_navwalker())  ); ?>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Buscar">
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
              </form>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
