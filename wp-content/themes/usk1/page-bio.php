
    <?php get_header(); ?>
      <!--favicon-->
      <!--<link rel="icon" type="image/png" href="Assets/img/logo.png" />-->
      <!--bio -->

      <!--COMIENZO DE PARTICULAS-->
      <div id="particles">
        <div id="intro">
              <div class="row blogtitulo__size">
                <div class="col-md-12">
                  <img src="<?php echo get_template_directory_uri();?>/Assets/img/diamante-icon.png" alt="" class="center-block animated bounceInDown">
                  <h1>BIO</h1>
                  <h3>"Un poco de mi <br>
                     y algunas habilidades"</h3>

                </div>
              </div>

         </div> <!--cierre intro-->
      </div><!--cierre div particulas-->

      <section class="container-fluid">
      <div class="row color__2">
      <div class="col-md-5 col-sm-5 perfil__bio animated fadeInLeft">
        <img src="<?php echo get_template_directory_uri();?>/Assets/img/perfil.png" alt="" class="img-responsive perfil__img">
      </div>

      <div class="col-md-6 col-sm-6 container__bio ">
        <div id="border__bio"></div>
          <h3 class="nombre__bio"> <strong>¡HOLA! </strong></h3>
            <p> Soy Denisse, en la actualidad cuento con 5 años de experiencia en el rubro de Diseño gráfico, me he desempeñado en el área de publicidad e imprenta,
                apoyo en campañas comunicacionales, desarrollo de multiples piezas gráficas en, editorial, marketing, merchandign, illustración, gigantografías, entre otros. </p>
            <p> Actualmente pertenezco al equipo de CERTA PUBLICIDAD. en Reñaca Norte. </p>
            <p> Me motiva marcar la diferencia, soy partidaria de que todos podemos brillar con luz propia y hacer valer nuestro potencial,
            cuando nos rodeamos de las personas correctas esto no es complicado, formar parte de un buen equipo de trabajo es primordial para
            obtener proyectos novedosos y de éxito. </p>
            <p>Soy loca por los gatos, viajar, pasear en bicicleta y disfrutar de los atardeceres, también compartir con los amigos
              e ir de fiesta de vez en cuando, Amo la naturaleza hacer trekking, acampar y sacar fotografías.</p>

            <div id="border__bio"></div>

        <section class="float__right">

        <h3 class="nombre__bio"> <strong> HABILIDADES DE TRABAJO </strong></h3>

        <article>
          <h4>Para Diseño gráfico, Illustrator, Photoshop e Indesign.</h4>
        <ul>
          <li class="list__icon clientes"><img src="<?php echo get_template_directory_uri();?>/Assets/img/ai.png" class="img-responsive"></li>
          <li class="list__icon clientes"><img src="<?php echo get_template_directory_uri();?>/Assets/img/psd.png" class="img-responsive"></li>
          <li class="list__icon clientes"><img src="<?php echo get_template_directory_uri();?>/Assets/img/id.png" class="img-responsive"></li>

        </ul class="float__right">
        </article>

        <article>
          <h4> Para Front-End, Html5, Css3, Bootstrap, Github, Wordpress. </h4>
          <p> *Aprendiendo Jquery, Js y Php </p>
        <ul class="display__inline">
          <li class="list__icon clientes"><img src="<?php echo get_template_directory_uri();?>/Assets/img/html5.png" class="img-responsive"></li>
          <li class="list__icon clientes"><img src="<?php echo get_template_directory_uri();?>/Assets/img/CSS3.png" class="img-responsive"></li>
          <li class="list__icon clientes"><img src="<?php echo get_template_directory_uri();?>/Assets/img/bootstrap.png" class="img-responsive"></li>
          <li class="list__icon clientes"><img src="<?php echo get_template_directory_uri();?>/Assets/img/github2.png" class="img-responsive"></li>
          <li class="list__icon clientes"><img src="<?php echo get_template_directory_uri();?>/Assets/img/WordPress.png" class="img-responsive"></li>
        </ul>
        </article>
        <div id="border__bio"></div>
        </section>

      </div>


      <div class="col-md-1"></div>
      </div>

      <!--MENSAJE 0.3 -->
      <section class="container-fluid padding__cero" id="msj3">



        <?php
                    $arg = array(
                      'category_name' => 'MENSAJE-BIO',
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
