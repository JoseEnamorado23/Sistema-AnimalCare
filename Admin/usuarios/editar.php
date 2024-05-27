<?php
include('../../app/config.php');
include('../../Admin/layout/parte1.php');

$id_usuario = $_GET['id_usuario'];
include('../../app/contoladores/usuarios/datos_usuario.php');

?>

<title>Actualización del usuario<?php echo $nombre_Completo?></title>
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
            background-color: green;
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
            <form action="../../app/contoladores/usuarios/editar1.php" method="post">
                <div class="card">
                <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
                    <div class="card-header">
                        <h3 class="card-title">Actualización del usuario <?php echo $nombre_Completo?></h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nombre_Completo">Nombre completo:</label>
                            <input type="text" id="nombre_Completo" name="nombre_Completo" class="form-control" value="<?php echo $nombre_Completo; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico:</label>
                            <input type="email" id="email"  name="email" class="form-control" value="<?php echo $correo; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="">contraseña:</label>
                            <input type="password" class="form-control" name="password" >
                        </div>
                        <div class="form-group">
                            <label for="">verificar contraseña:</label>
                            <input type="password" class="form-control" name="password_verif" >
                        </div>
                     <div class="form-group">
                        <label for="">cargo:</label>
                        <select name="cargo" id="" class="form-control" required >
                        <?php
                    if ($cargo == "ADMINISTRADOR") { ?>
                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                    <option value="USUARIO">USUARIO</option>
                    <?php
                    }else{?>                      
                        <option value="USUARIO">USUARIO</option>   
                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                        <?php
                    }
                    ?> 
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                <a href="../usuarios/index1.php" class="btn btn-secondary">Cancelar</a>
                    <input type="submit" class="btn btn-success" value="Actualizar usuario" r >
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>

    <?php include('../../Admin/layout/parte2.php'); ?>
    <?php include('../../Admin/layout/mensaje.php'); ?>