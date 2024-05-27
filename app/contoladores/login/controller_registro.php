<?php

include('../../config.php');



$nombre_Completo = $_POST['nombre_Completo'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repetido = $_POST['password_repetido'];
$cargo = 'USUARIO';

$sql = "SELECT * FROM tb_usuarios WHERE email='$email'  ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
$contador=0;

foreach($usuarios as $usuario){
    $contador = $contador+1;

}

if($contador>0){
        session_start();
        $_SESSION["mensaje"] = "Este correo ya se encuentra Registrado!";
        $_SESSION["icono"] = 'error';
        header('Location: ' . $url . '/ingresar/resgitro.php');
}else{
    echo "este usuario es nuevo";
    if ($password == $password_repetido){
    
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $sentencia = $pdo->prepare("INSERT INTO tb_usuarios (nombre_Completo, email, password, cargo, fyh_Creation) VALUES (:nombre_Completo, :email, :password, :cargo, :fyh_creation)");
        $sentencia->bindParam(':nombre_Completo', $nombre_Completo);
        $sentencia->bindParam(':email', $email);
        $sentencia->bindParam(':password', $hashed_password); 
        $sentencia->bindParam(':cargo', $cargo);
        $sentencia->bindParam(':fyh_creation', $fechaHora);
        
        if ($sentencia->execute()) {
            session_start();
            $_SESSION["mensaje"] = "Usuario registrado!";
            $_SESSION["icono"] = 'success';
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
    
}

$hash = $password_tabla;

if (($contador>0)&&(password_verify($password, $hash))) {
    echo "Usuario autenticado correctamente, Bienvenido";
    session_start();
    $_SESSION['sesion_email'] =$email ;
    header('location: ' . $url . '/veterianaria.php');


} else { 
    echo "Credenciales incorrectas";
    header('location: ' . $url . '/veterianaria.php');
}
            
        } else {
            session_start();
            $_SESSION["mensaje"] = "Error, el usuario no se pudo registrar!";
            $_SESSION["icono"] = 'error';
            header('Location: ' . $url . '/ingresar/resgitro.php');
        }
        } else {
            session_start();
            echo "las contraseñas no son iguales";
            header('Location: ' . $url . '/ingresar/resgitro.php');
        }
}

include('../../../Admin/layout/mensaje.php');
    ?>