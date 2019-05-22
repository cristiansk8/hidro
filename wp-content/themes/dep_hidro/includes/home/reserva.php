<?php
//
/*

  banner_reserva (field_repeater)

*/
$banner_reserva = get_field('banner_reserva');
?>
<section id="block-reserva">
  <div class="banner">
    <?php
  if($banner_reserva):
    while(have_rows('banner_reserva')): the_row();
      $fondo = get_sub_field('fondo');
      $texto = get_sub_field('texto');
      $boton = get_sub_field('boton');
      $url_destino = get_sub_field('url_destino');

    ?>
    <div class="banner-reserva" style="background-image:url(<?php echo $fondo; ?>);">
      <?php echo $texto ?>
      <a href=" <?php echo $url_destino; ?> "><?php echo $texto; ?></a>
    </div>
    <?php
  endwhile;
endif;
?>
  </div>
</section>
