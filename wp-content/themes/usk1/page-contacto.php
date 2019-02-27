
<?php get_header(); ?>

<!--COMIENZO DE PARTICULAS-->
<div id="particles">
  <div id="intro">
        <div class="row blogtitulo__size">
          <div class="col-md-12">
            <img src="<?php echo get_template_directory_uri();?>/Assets/img/ojo2.png" alt="" class="center-block animated fadeInLeft">
            <h1>CONTACTO</h1>
            <h3>"¿Tienes un proyecto interesante en que pueda ayudar?"</h3>

          </div>
        </div>

   </div> <!--cierre intro-->
</div><!--cierre div particulas-->

<!--COMIENZO DE LA API MAPA Y CLIMA -->
<div class="container-fluid color__2">

<div class="container">

      <div class="col-lg-12 col-md-12 col-sm-12">

    <div class="row">
      <div class="col-md-4 col-sm-8 form1 margin__bottom animated fadeInUpBig">
        <h3>Envíame un mensaje</h3>
        <p>Contestaré lo antes posible</p>
        <hr>
        <form>
      <div class="form-group2">
        <label for="exampleFormControlInput1">Nombre</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="¿Con quien tengo el gusto?">
      </div>
      <div class="form-group2">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="¿Donde puedo responderte?">
      </div>

      <div class="form-group2">
        <label for="exampleFormControlTextarea1">Mensaje</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Cuéntame que necesitas"></textarea>
      </div>
    </form>

     <button type="button" class="btn btn-default btn-md margin__left"> Enviar</button>
      </div>

      <div class="col-md-5 col-sm-6  animated fadeInDownBig mapaq margin__bottom">
        <div id="map" class="radius-5px"></div>
      </div>

      <div class="col-md-3 col-sm-5 animated fadeInUpBig margin__bottom">
        <div class="row">
          <div class="col-md-12 radius-5px">
            <div class="form-group2">
              <h4><i class="glyphicon glyphicon-map-marker"></i> Encuéntrame en:</h4>
              <select name="select" id="select" class="form-control">
                <option value="re" selected>Reñaca</option>
                <option value="vlp">Valparaíso</option>
                <option value="sa">San Antonio</option>

              </select>
            </div>
          </div>
        </div>

        <div id="resumen_container">
          <div class="row">
            <div class="col-md-12">
              <h2 id="resumen"></h2>
              <br>
              <img id="image" alt="weather-icon" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div><!--cierre del md6-->




    <!--<div class="col-md-6">
      <h3 class="">Sígueme:</h3>
        <article>
          <a href="http://www.linkedin.com/in/denisselarav"><i class="fab fa-4x fa-instagram fa-linkedin"></i></a>
          <a href="https://twitter.com/HysLara"><i class="fab fa-4x fa-twitter-square icon__footer"></i></a>
        </article>
    </div>-->

</div><!--cierre del row principal-->

<!--MENSAJE 0.3 -->
<section class="container-fluid padding__cero" id="msj3">



  <?php
              $arg = array(
                'category_name' => 'MENSAJE-CONTACTO',
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
