
<?php get_header(); ?>

<!--COMIENZO DE PARTICULAS-->
<div id="particles">
  <div id="intro">
        <div class="row blogtitulo__size">
          <div class="col-md-12 ">
            <img src="<?php echo get_template_directory_uri();?>/Assets/img/3icon.png" alt="" class="center-block animated fadeInLeft img-responsive">
            <h1>PROYECTOS</h1>
            <h3>"Work Work Work Work"</h3>

          </div>
        </div>

   </div> <!--cierre intro-->
</div><!--cierre div particulas-->

<!--PROYECTOS -->
    <section>



        <?php
          $arg = array(
            'category_name' => 'PROYECTOS',
            'post_type'		 => 'proyecto',
            'posts_per_page' => -1,
            'post_id' => null,
          );
          $get_arg = new WP_Query( $arg );
          while ( $get_arg->have_posts() ) {
            $get_arg->the_post();
          ?>

        <ul class="gridder">
          <!-- You can load specify which content is loaded by specifying the #ID of the div where the content is  -->
          <li class="gridder-list" data-griddercontent="#<?php echo get_the_id(); ?>">
            <?php $imagen1 = get_field( 'imagen1' ); ?>
            <?php if ( $imagen1 ) { ?>
            	<img src="<?php echo $imagen1['url']; ?>" alt="<?php echo $imagen1['alt']; ?>" class="img-responsive"/>
            <?php } ?>

          </li>
        </ul>

          <!-- Gridder content -->
          <div id="<?php echo get_the_id(); ?>" class="gridder-content">
            <div class="row">
              <div class="col-md-12">

                <div class="row">
                <div class="col-md-3"></div>
                  <div class="col-md-6 margin__bottom">
                      <?php $imagen2 = get_field( 'imagen2' ); ?>
                        <?php if ( $imagen2 ) { ?>
                	           <img class="img-responsive" src="<?php echo $imagen2['url']; ?>" alt="<?php echo $imagen2['alt']; ?>" class="img-responsive"/>
                        <?php } ?>
                      </div>
                    <div class="col-md-3"></div>
                  </div>

                <div class="row text__alingleft">
                  <div class="col-md-3"></div>
                  <div class="col-md-3">
                    <h1 class="margin__cero"><?php the_field( 'titulo' ); ?></h1>
                      <p><?php the_field( 'descripcion' ); ?></p>
                  </div>
                    <div class="col-md-3">
                      <ul >
                        <li class="display__inline">
                          <?php $herramientas_img = get_field( 'herramientas-img' ); ?>
                            <?php if ( $herramientas_img ) { ?>
                  	          <img class="min__img" src="<?php echo $herramientas_img['url']; ?>" alt="<?php echo $herramientas_img['alt']; ?>"/>
                          <?php } ?>
                        </li>
                        <li class="display__inline">
                          <?php $herramientas_img2 = get_field( 'herramientas-img2' ); ?>
                            <?php if ( $herramientas_img2 ) { ?>
                            	<img class="min__img" src="<?php echo $herramientas_img2['url']; ?>" alt="<?php echo $herramientas_img2['alt']; ?>" />
                          <?php } ?>
                        </li>

                        <li class="display__inline">
                          <?php $herramientas_img3 = get_field( 'herramientas-img3' ); ?>
                            <?php if ( $herramientas_img3 ) { ?>
                            <img class="min__img" src="<?php echo $herramientas_img3['url']; ?>" alt="<?php echo $herramientas_img3['alt']; ?>" />
                            <?php } ?>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3"></div>
                  </div>


              </div>
            </div>
          </div>

  <?php } wp_reset_postdata(); ?>


    </section>



<!--CLIENTES -->
<div class="container-fluid clientes__white">
  <section class="clientes__inner">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 toolbar">

        <ul>
          <li class="clientes"> <img src="<?php echo get_template_directory_uri();?>/Assets/img/diversidad.png" alt="" class="img-responsive" id="diversidad"></li>
          <li class="clientes"> <img src="<?php echo get_template_directory_uri();?>/Assets/img/chilquinta.png" alt="" class="img-responsive"></li>
          <li class="clientes"> <img src="<?php echo get_template_directory_uri();?>/Assets/img/guallarauco.png" alt="" class="img-responsive"></li>
          <li class="clientes"> <img src="<?php echo get_template_directory_uri();?>/Assets/img/lagos-dis.png" alt="" class="img-responsive"></li>
          <li class="clientes"> <img src="<?php echo get_template_directory_uri();?>/Assets/img/liquimax.png" alt="" class="img-responsive"></li>
          <li class="clientes"> <img src="<?php echo get_template_directory_uri();?>/Assets/img/enel.jpg" alt="" class="img-responsive"></li>
          <li class="clientes"> <img src="<?php echo get_template_directory_uri();?>/Assets/img/abastible.jpg" alt="" class="img-responsive"></li>
        </ul>
      </div>
    </div>
  </section>
</div>



<!--MENSAJE 0.3 -->
<section class="container-fluid" id="msj2">


</section>


<?php get_footer(); ?>
