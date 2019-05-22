<?php
//
/*

  beneficios (field_repeater)

*/
$beneficios = get_field('beneficios');
?>
<section id="banner-beneficios">
  <div class="beneficios">
    <?php
  if($beneficios):
    while(have_rows('beneficios')): the_row();
      $icono = get_sub_field('icono');
      $texto = get_sub_field('texto');
    ?>
    <div class="beneficios-item">
      <img src="<?php echo $icono; ?>" alt="">
      <h3><?php echo $texto; ?></h3>
    </div>
    <?php
  endwhile;
endif;
?>
  </div>
</section>
