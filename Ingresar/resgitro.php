<?php 
include('../app/config.php');
$url = "http://localhost/veterinaria";
include('../Admin/layout/mensaje.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../scss/stylef.css">
  <link rel="icon" href="<?php echo $url;?>/imagenes/cuidado-de-mascotas.png">
  <title>Formulario de Registro</title>
</head>
<body>
  <section class="form-register">
  <center>
    <h4>Formulario de registro</h4>
    </center>
    <form action="../app/contoladores/login/controller_registro.php" method="post">
    <input class="controls" type="text" name="nombre_Completo" placeholder="Ingrese su nombre y apellido">
    <input class="controls" type="email" name="email"  placeholder="Ingrese su Correo">
    <input class="controls" type="password" name="password"  placeholder="Ingrese su Contraseña">
    <input class="controls" type="password" name="password_repetido"" placeholder="Verifique su Contraseña">
    
    <div class="button-container">
        <button class="register-button" type="submit" value="registrar usuario">Registrar</button>
    </div>
    <p><a href="">¿Ya tengo Cuenta?</a></p>
    </form>

  </section>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
</body>
</html>