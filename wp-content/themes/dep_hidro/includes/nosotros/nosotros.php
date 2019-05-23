<?php
//
/*

  banner_principal

*/
$banner_principal = get_field('banner_principal');
$texto_nosotros = get_field('texto_nosotros');
$imagen_nosotros = get_field('imagen_nosotros');

?>
<section id="banner-principal">
  <div class="banner">
    <img src="<?php echo $banner_principal; ?>" alt="" width="100%" height="auto">
  </div>
  <div class="banner-domicilio">
    <div class="texto">
      <?php echo $texto_nosotros; ?>
    </div>
    <div class="infografia">
      <img src="<?php echo $imagen_nosotros; ?>" alt="" width="100%" height="auto">
    </div>
  </div>
</section>
