<?php
//
/*
  fondo
  titulo
  boton
  url_destino

*/
$fondo = get_field('fondo');
$titulo = get_field('titulo');
$boton = get_field('boton');
$url_destino = get_field('url_destino');
?>
<section id="limpieza-completa" style="background-image:url(<?php echo $fondo;) ?>">
  <div class="">
    <?php echo $titulo; ?>
    <a href="<?php echo $url_destino; ?>"><?php echo $boton; ?></a>
  </div>
</section>
