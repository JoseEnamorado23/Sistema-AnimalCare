<?php
include ('../../app/config.php');
include ('../../Admin/layout/parte1.php');
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-6">
        <div class="card  card-primary">
            <div class="card-header">
                <h3 class="card-title">Datos del usuario</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="../../app/contoladores/usuarios/createcontroller.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nombre_completo">Nombre completo:</label>
                                <input type="text" class="form-control" id="nombre_completo" name="nombre_Completo" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Correo electrónico:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password_verif">Verificar contraseña:</label>
                                <input type="password" class="form-control" id="password_verif" name="password_verif" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cargo">Cargo:</label>
                                <select name="cargo" id="cargo" class="form-control">
                                    <option value="Administrador">Administrador</option>
                                    <option value="Usuario">Usuario</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="" class="btn btn-secondary">Cancelar</a>
                            <input type="submit" class="btn btn-primary" value="Registrar usuario">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include ('../../Admin/layout/mensaje.php');
include ('../../Admin/layout/parte2.php');

?>
