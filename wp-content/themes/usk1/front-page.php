
<?php get_header(); ?>
  <!--favicon-->
  <!--<link rel="icon" type="image/png" href="Assets/img/logo.png" />-->

    <!--COMIENZO DEL CARROUSEL-->
    <div id="particles">
      <div id="intro">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="<?php echo get_template_directory_uri();?>/Assets/img/selva.png" alt="composición de animales en la selva" class="img-responsive">
          </div>
          <div class="item">
            <img src="<?php echo get_template_directory_uri();?>/Assets/img/gato-espacio.png" alt="Gato espacial" class="img-responsive">
          </div>
          <div class="item">
            <img src="<?php echo get_template_directory_uri();?>/Assets/img/mujer.png" alt="Gato espacial" class="img-responsive">
          </div>
        </div><!--cierre carousel-inner-->

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
       </div> <!--cierre intro-->
    </div><!--cierre div particulas-->
    <!--FIN DEL CARROUSEL-->



  <!--SERVICIOS -->

  <div class="container-fluid color__1">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <article class="servicios__home center-block">
        <img src="<?php echo get_template_directory_uri();?>/Assets/img/ojo-01.png" class="img-responsive">
        <h3>DISEÑO</h3>
        <p>Branding <br>
          Imagen corporativa <br>
          Editorial
        </p>
      </article>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <article class="servicios__home center-block">
        <img src="<?php echo get_template_directory_uri();?>/Assets/img/brain-02.png" class="img-responsive">
        <h3>FRONT-END</h3>
        <p>Html5 y Css3 <br>
          Bootstrap y Jquery <br>
          Wordpress
        </p>
      </article>
    </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <article class="servicios__home center-block">
          <img src="<?php echo get_template_directory_uri();?>/Assets/img/ojo-03.png" class="img-responsive">
          <h3>PUBLICIDAD</h3>
          <p> Merchandising <br>
            BTL - POP <br>
            Endomarketing
          </p>
        </article>
      </div>
    </div><!--cierre row-->
  </div><!--cierre container-->

  <!--PROYECTOS -->
  <section>
    <div class="container-fluid">
      <h3 class="titulos"> CONOCE MIS PROYECTOS </h3>
      <div class="row">
        <div class="col-md-3 padding__cero container">
          <a href="/~fev1hlara/proyectos">
            <img src="<?php echo get_template_directory_uri();?>/Assets/img/5.png" alt="image" class="img-responsive">
            <div class="overlay"></div>
          </a>
        </div>
        <div class="col-md-3 padding__cero container">
          <a href="/~fev1hlara/proyectos">
            <img src="<?php echo get_template_directory_uri();?>/Assets/img/6.png" alt="image" class="img-responsive">
            <div class="overlay"></div>
          </a>
        </div>
        <div class="col-md-3 padding__cero container">
          <a href="/~fev1hlara/proyectos">
            <img src="<?php echo get_template_directory_uri();?>/Assets/img/4.png" alt="image" class="img-responsive">
            <div class="overlay"></div>
          </a>
        </div>
        <div class="col-md-3 padding__cero container">
          <a href="/~fev1hlara/proyectos">
            <img src="<?php echo get_template_directory_uri();?>/Assets/img/8.png" alt="image" class="img-responsive">
            <div class="overlay"></div>
          </a>
        </div>
      </div>
    </div>

</section>


<!--MENSAJE 0.3 -->
<section class="container-fluid padding__cero" id="msj3">



  <?php
              $arg = array(
                'category_name' => 'MENSAJE-HOME',
                'post_type'		 => 'frase',
                'posts_per_page' => 1
              );
              $get_arg = new WP_Query( $arg );
              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>

  <h4 class="mensaje"> <?php the_field( 'frase' ); ?></h4>

</section>

 <?php } wp_reset_postdata(); ?>

<?php get_footer(); ?>
