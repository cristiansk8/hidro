<?php
//
/*
item_limpieza (field_repeater)

*/
$item_limpieza = get_field('item_limpieza');
?>
<section id="limpieza">
  <div class="limpieza">
    <?php
  if($item_limpieza ):
    while(have_rows('item_limpieza ')): the_row();
    $fondo = get_sub_field('fondo');
    $titulo = get_sub_field('titulo');
    $boton = get_sub_field('boton');
    $url_destino = get_sub_field('url_destino');
    ?>
    <div class="limpieza-item" style="background-image:url(<?php echo $fondo; ?>)">
      <?php echo $titulo; ?>
      <a href="<?php echo "$url_destino"; ?>"><?php $boton ?></a>
    </div>
    <?php
  endwhile;
endif;
?>
  </div>

</section>
