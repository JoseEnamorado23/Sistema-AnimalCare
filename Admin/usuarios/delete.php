<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

$id_usuario = $_GET['id_usuario'];
include ('../../app/contoladores/usuarios/datos_usuario.php');
?>


    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: red;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }
        .card-body {
            padding: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-info {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-info:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
</style>


    <br>
    <div class="container-fluid">

        <h1>Datos del usuario</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-danger">
                    <div class="card-header">

                        <h3 class="card-title"><b>¿Esta seguro de eliminar a este usuario?</b></h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre completo</label>
                                    <input type="text" value="<?php echo $nombre_Completo; ?>" name="nombre_completo" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Correo electronico</label>
                                    <input type="email" value="<?php echo $correo; ?>" name="email" class="form-control" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cargo</label>
                                    <input type="text" class="form-control" value="<?php echo $cargo; ?>" disabled>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <form action="<?php echo $url;?>/app/contoladores/usuarios/eliminar.php" method="post">
                                        <input type="text" value="<?php echo $id_usuario;?>" name="id_usuario" hidden>
                                        <a href="../usuarios/index1.php" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Borrar</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include ('../../admin/layout/parte2.php');
include ('../../admin/layout/mensaje.php');
?>