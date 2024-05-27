
<?php
const BASE_URL = "http://localhost/veterinaria/tienda/";
define("APP_NAME", "AnimalCare");

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('DB', 'sistemaanimalcare');

$servidor = "mysql:dbname=" . DB . ";host=" . SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    /*echo "conexion exitosa";*/
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

$APPNAME = "AnimalCare";
$url = "http://localhost/veterinaria";




date_default_timezone_set('America/Bogota');
$fechaHora = date('Y-m-d H:i:s');
session_start();
$email_sesion = "";
if(isset($_SESSION['sesion_email'])){
//echo "ha pasado por el login";
    $email_sesion = $_SESSION['sesion_email'];
    $sql = "SELECT * FROM tb_usuarios WHERE email = '$email_sesion' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario) {
        $id_usuario_sesion = $usuario['id_Usuario'];
        $nombre_usuario_sesion = $usuario['nombre_Completo'];
    }
}else{
//echo "no ha pasado por el login";
//header('Location: '.$url.'/login');
}

  
  $url = "http://localhost/veterinaria";
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AnimalCare</title>
    <link rel="stylesheet" href="<?php echo $url;?>/scss/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="<?php echo $url;?>/imagenes/cuidado-de-mascotas.png">
  </head>
  <body>
    <header class="header">
      <a href="<?php echo $url;?>/veterianaria.php" class="logo"><i class="fas fa-paw">AnimalCare</i></a>
      <nav class="navbar">
        <a href="#home">Inicio</a>
        <a href="<?php echo BASE_URL;?>">Productos</a>
        <a href="#servece">Servicios</a>
        <a href="#about">Quienes somos</a>
        <a href="#contact">Contactos</a>
      </nav>
      
    <?php
    if ($email_sesion == "") {
      //echo "Complete el login" ;
      ?>
      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="#" class="fas fa-shopping-cart">
        </a>
        <div class="fas fa-user" id="login-btn"><h1>Ingresar</h1></div>
    </div>
       <form action="" class="login-form">
      <h3>Bienvenido</h3>
      
      <a href="<?php echo $url;?>/Ingresar/iniciarsesion.php" class="btn" >Iniciar sesión</a>
     
      <a href="<?php echo $url;?>/Ingresar/resgitro.php" class="btn">Registrarse</a>
      
    </form>
      <?php
    }else{
     ?>
     <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="#" class="fas fa-shopping-cart">
        </a>
        <div class="fas fa-user" id="login-btn"><h1 style="font-size: 1.5rem;"><?php echo $email_sesion ?></h1></div>
    </div>
     <form action="" class="login-form">
      <h3>Bienvenido</h3>
      
      <a href="<?php echo $url;?>/app/contoladores/login/cerrar_sesion.php" class="btn" >cerrar sesión</a>
     
      
    </form>
     <?php 
      
    }
    ?>
    
    </header>
