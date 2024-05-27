<?php
include ('../app/config.php');
include ('../Admin/layout/parte1.php');
include ('../app/contoladores/usuarios/listado_de_usuarios.php');
include ('../app/contoladores/productos/listado_de_productos.php');
include ('../app/contoladores/reservas/listado_reservas.php');

?>
<br>

<div class="content">
    <h3>Bienvenido al sistema</h3>
    <br>
    <div class="container" style="display: flex; flex-wrap: wrap;">
        <div class="col-lg-3 col-6" style="margin-right: 15px;">
            <div class="small-box bg-info">
                <div class="inner">
                    <?php 
                    $contador_usuarios = 0;
                    foreach ($usuarios as $usuario) {
                        $contador_usuarios = $contador_usuarios + 1;
                    }
                    ?>
                    <h3><?=$contador_usuarios;?></h3>
                    <p>Usuarios Registrados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="<?php echo $url;?>/Admin/usuarios/index1.php" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6" style="margin-right: 15px;">
            <div class="small-box bg-success">
                <div class="inner">
                    <?php 
                    $contador_productos = 0;
                    foreach ($productos as $producto) {
                        $contador_productos = $contador_productos + 1;
                    }
                    ?>
                    <h3><?=$contador_productos;?></h3>
                    <p>Productos Registrados</p>
                </div>
                <div class="icon">
                <i class="bi bi-bag-plus"></i>
                </div>
                <a href="<?php echo $url;?>/Admin/productos" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6" style="margin-right: 15px;">
            <div class="small-box bg-warning">
                <div class="inner">
                    <?php 
                    $contador_reservas = 0;
                    foreach ($reservas as $reserva) {
                        $contador_reservas = $contador_reservas + 1;
                    }
                    ?>
                    <h3><?=$contador_reservas;?></h3>
                    <p>Reservas Registradas</p>
                </div>
                <div class="icon">
                <i class="bi bi-calendar-week"></i>
                </div>
                <a href="<?php echo $url;?>/Admin/reservas/reservas.php" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>



    
   
        
        
        



<?php include('../Admin/layout/parte2.php'); ?>

