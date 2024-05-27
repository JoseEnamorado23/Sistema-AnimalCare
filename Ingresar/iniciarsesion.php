<?php
 include ("../app/config.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="imagenes/cuidado-de-mascotas.png"> 
  <title><?php echo $APPNAME; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="  https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">

  <div class="login-logo">
    <a href="../public/templates/AdminLTE-3.2.0/index2.html"><b>Ingreso</b> AnimalCare</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
  <img src="<?php echo $url; ?>/imagenes/cute-3273789_1280.jpg" alt="">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresa tus datos</p>

      <form action="<?php echo $url; ?>/app/contoladores/login/controller_login.php " method="post">
        <label for="">Correo Electronico</label>
      <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <label for="">Contraseña</label>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          </div>
          <!-- /.col -->
          <center>
          <div class="col-4" >
            <button type="submit" class="btn btn-primary btn-block" style="width: 100%;" >Ingresar</button>
          </div>
          <div class="col-4">
            <br>
            <button type="submit" class="btn btn-secondary btn-block" style="width: 100% " >Cancelar</button>
          </div>
          <br>

          </center>
          <!-- /.col -->
        
      </form>
   
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $url; ?>/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $url; ?>/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $url; ?>/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
