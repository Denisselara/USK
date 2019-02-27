<?php get_header(); ?>

<!--COMIENZO DE PARTICULAS-->
<div id="particles">
  <div id="intro">
        <div class="row blogtitulo__size">
          <div class="col-md-12">
            <img src="<?php echo get_template_directory_uri();?>/Assets/img/cat-icon.png" alt="" class="center-block animated fadeInLeft">
            <h1>BLOG</h1>
            <h3>"Para compartir experiencias <br>
               y procesos de trabajos"</h3>

          </div>
        </div>

   </div> <!--cierre intro-->
</div><!--cierre div particulas-->




<div class="container ">
  <div class="col-md-12 padding__top">



  <?php $query = new WP_Query( '6' ); ?>
   <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

   <div class="container text__alingleft ">
       <div class="row">

          <div class="col-md-12 blog__container form1">
              <h3> <?php the_title(); ?> </h3>
              <div class="" ><?php the_content(); ?></div>
              <!--<a class="btn btn-primary" href="<?php// echo get_permalink() ?>">Léeme completo</a>-->
          </div> <!-- cierre col md 12 -->
      </div>
   </div>

          <?php endwhile;
          wp_reset_postdata();
          else : ?>
          <p> <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?> </p>
          <?php endif; ?>

        </div>
    </div>


</div>

<!--MENSAJE 0.3 -->
<section class="container-fluid padding__cero" id="msj3">



  <?php
              $arg = array(
                'category_name' => 'MENSAJE-BLOG',
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
