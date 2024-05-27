<?php
include('../../app/config.php');
include('../../Admin/layout/parte1.php');

$id_usuario = $_GET['id_usuario'];
include('../../app/contoladores/usuarios/datos_usuario.php');
?>

<title>Datos de usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            background-color: blue;
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
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Datos registrados</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nombre_Completo">Nombre completo:</label>
                            <input type="text" id="nombre_Completo" name="nombre_Completo" class="form-control" value="<?php echo $nombre_Completo; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico:</label>
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo $correo; ?>">
                        </div>
                        <div class="form-group">
                            <label for="fecharegistro">Fecha de registro:</label>
                            <input type="text" id="fecharegistro" name="fecharegistro" class="form-control" value="<?php echo $fechaegistro; ?>">
                        </div>
                        <div class="form-group">
                            <label for="fecha_actualizacion">Fecha de actualizacion:</label>
                            <input type="text" id="fecha_actualizacion" name="fecha_actualizacion" class="form-control" value="<?php echo $fecha_actualizacion; ?>">
                        </div>
                        <div class="form-group">
                            <label for="cargo">Cargo:</label>
                            <input type="text" id="cargo" name="cargo" class="form-control" value="<?php echo $cargo; ?>">
                        </div>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <a href="../../Admin/usuarios/index1.php" class="btn btn-info">Aceptar</a>
                </div>
            </div>
        </div>
    </div>

    <?php include('../../Admin/layout/parte2.php'); ?>
    <?php include('../../Admin/layout/mensaje.php'); ?>