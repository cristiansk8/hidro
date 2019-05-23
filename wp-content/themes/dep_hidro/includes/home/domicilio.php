<?php
//
/*
  fondo_domiciolio
  texto_domiciolio
  imagen_domicilio

*/
$fondo_domicilio = get_field('fondo_domicilio');
$texto_domicilio = get_field('texto_domicilio');
$imagen_domicilio = get_field('imagen_domicilio');

?>
<section id="banner-domicilio">
  <div class="banner-domicilio" style="background-image:url(<?php echo $fondo_domicilio; ?>)">
    <div class="texto">
      <?php echo $texto_domicilio; ?>
    </div>
    <div class="imagen">
      <img src="<?php echo $imagen_domicilio; ?>" alt="" width="100%" height="auto">
    </div>
  </div>
</section>
