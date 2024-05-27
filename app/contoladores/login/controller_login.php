<?php
include("/wamp64/www/veterinaria/app/config.php");


$email = $_POST["email"];
$password = $_POST["password"];


$sql = "SELECT * FROM `tb_usuarios` WHERE `email` = '$email'";
$query = $pdo->prepare($sql);
$query->execute();

// Obtener el resultado
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

$contador = 0;

foreach ($usuarios as $usuario) {
   echo $contador = $contador+1;
   $password_tabla = $usuario['password'];
   $cargo_tabla = $usuario['cargo'];
    
}

$hash = $password_tabla;

if (($contador>0)&&(password_verify($password, $hash))) {
    echo "Usuario autenticado correctamente, Bienvenido";
    session_start();
    $_SESSION['sesion_email'] =$email ;

    if ($cargo_tabla == "ADMINISTRADOR") {
        header('location: ' . $url . '/admin');
    }else{
        header('location: ' . $url . '/veterianaria.php');
    }

   


} else { 
    echo "Credenciales incorrectas";
    header('location: ' . $url . '/veterianaria.php');
}

$hash = '$2y$10$tNIHNZa3VhThRYQouaIaUuqtLnDRArh6X71D8qooUbFb.asFGvh1W';





