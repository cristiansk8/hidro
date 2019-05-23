<?php
//
/*
  titulo
  boton
  url_destino

*/
$titulo = get_field('titulo');
$boton = get_field('boton');
$url_destino = get_field('url_destino');
?>
<section>
  <div class="banner-reserva">
    <?php echo $titulo; ?>
    <a href="<?php echo $url_destino; ?>"><?php echo $boton; ?></a>
  </div>
</section>
