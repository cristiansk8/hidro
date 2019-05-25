<?php
//
/*

  servicio (field_repeater)

*/
$servicio= get_field('servicio');
?>
<section class="main">

  <div class="contenedor">
    <?php
  if($servicio):
    while(have_rows('servicio')): the_row();
      $fondo = get_sub_field('fondo');
      $titulo = get_sub_field('titulo');
      $descripcion = get_sub_field('descripcion');
      $duracion = get_sub_field('duracion');
      $tarifa_automibil = get_sub_field('tarifa_automibil');
      $tarifa_camioneta = get_sub_field('tarifa_camioneta');

    ?>
    <div class="seccion-uno" style="background-image:url(<?php echo $fondo; ?>)">
            <div class="seccion-interna-uno">
                <div class="contenedor-titulo titulo-seccion">
                    <h2 class="titulo no-sesgo"><?php echo $titulo; ?></h2>
                </div>
            </div>
            <div class="seccion-interna-dos">
                <div class="boton-izq">
                        <div class="color-arriba"></div>
                        <div class="color-centro"></div>
                        <div class="color-abajo"></div>
                </div>
                <div class="reserva-aqui">
                    <a href="#">RESERVA AQUI</a>
                </div>
                <div class="boton-der">
                    <div class="color-arriba"></div>
                    <div class="color-centro"></div>
                    <div class="color-abajo"></div>
                </div>
            </div>
            <div class="seccion-interna-tres">
                <div class="reserva-izquierda">
    <?php echo $descripcion; ?>
                </div>
                <div class="reserva-derecha">
                    <div class="reserva-derecha-izq">
                        <div class="reserva-derecha-arriba">
                            <div class="duracion-servicio">
                                <p class="titulo-dos">DURACION SERVICIO</p>
                            </div>
                        </div>
                        <div class="reserva-derecha-abajo">
                            <div class="icono-reloj">
                                <img src="img/SERVICIOS/BURBUJA3.png" alt="">
                            </div>
                            <div class="hora">
                                <p class="informacion"><?php echo $duracion; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="reserva-derecha-der">
                        <div class="reserva-derecha-arriba">
                            <p class="titulo-dos">Tarifa</p>
                        </div>
                        <div class="reserva-derecha-abajo-der">
                            <p class="informacion"><?php echo $tarifa_automibil; ?></p>

                            <p class="informacion"><?php echo $tarifa_camioneta; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seccion-interna-cuatro">
                <!--
                <img class="brillo" src="./img/SERVICIOS/BURBUJA3.png" alt="">
                -->
            </div>
        </div>
        <?php
      endwhile;
    endif;
         ?>
  </div>
</section>
