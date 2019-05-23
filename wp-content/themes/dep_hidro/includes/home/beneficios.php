<?php
//
/*

  beneficios (field_repeater)

*/
$beneficios = get_field('beneficios');
?>
<section id="banner-beneficios"  style="background-image:url(http://h1dro.com.co/wp-content/uploads/2019/05/IMG-6_opt.jpg" >
  <div class="beneficios">
    <?php
  if($beneficios):
    while(have_rows('beneficios')): the_row();
      $icono = get_sub_field('icono');
      $texto = get_sub_field('texto');
    ?>
    <div class="beneficios-item">
      <img src="<?php echo $icono; ?>" alt="" width="100%" height="auto">
      <h3><?php echo $texto; ?></h3>
    </div>
    <?php
  endwhile;
endif;
?>
  </div>
</section>
