<?php
//
/*

  slider (field_repeater)

*/
$slider_home = get_field('slider_home');
?>
<section id="slider-home">
  <div class="block-slider">
    <?php
  if($slider_home):
    while(have_rows('slider_home')): the_row();
      $imagen = get_sub_field('imagen');
    ?>
    <div class="block-slider-item">
      <img src="<?php echo $slider_home; ?>" alt="">
    </div>
    <?php
  endwhile;
endif;
?>
  </div>
</section>
