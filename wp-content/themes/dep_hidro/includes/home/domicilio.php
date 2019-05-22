<?php
//
/*
  fondo_domiciolio
  texto_domiciolio
  imagen_domicilio

*/
$fondo_domiciolio = get_field('fondo_domiciolio');
$texto_domiciolio = get_field('texto_domiciolio');
$imagen_domicilio = get_field('imagen_domicilio');

?>
<section id="banner-domicilio">
  <div class="banner-domicilio" style="background-image:url(<?php echo $fondo_domicilio; ?>)">
    <div class="texto">
      <?php echo $texto_domiciolio; ?>
    </div>
    <div class="imagen">
      <img src="<?php echo $imagen_domicilio; ?>" alt="">
    </div>
  </div>
</section>
