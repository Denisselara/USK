<?php
    $header_redes_sociales = get_field('header_redes_sociales', 'options');
    if (header_redes_sociales){
?>
    <?php $flex = get_query_var('flex'); ?>
    <ul class="list-none <?php echo $flex; ?>">
      <li>
        <a class="decoration-none" href="<?php echo $header_redes_sociales['twitter_url'];
            ?>" title="Twitter <?php bloginfo('name'); ?>" target="_blank">
              <i class="aprendiendo-twitter"></i>
        </a>
      </li>
      <li>
        <a class="decoration-none" href="<?php echo $header_redes_sociales['twitter_url'];
            ?>" title="Twitter <?php bloginfo('name'); ?>" target="_blank">
              <i class="aprendiendo-twitter"></i>
        </a>
      </li>
      <li>
        <a class="decoration-none" href="<?php echo $header_redes_sociales['twitter_url'];
            ?>" title="Twitter <?php bloginfo('name'); ?>" target="_blank">
              <i class="aprendiendo-twitter"></i>
        </a>
      </li>
    </ul>


  } ;
