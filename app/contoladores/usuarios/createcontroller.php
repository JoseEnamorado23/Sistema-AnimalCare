<?php

include('../../config.php');

$nombre_Completo = $_POST['nombre_Completo'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_verif = $_POST['password_verif'];
$cargo = $_POST['cargo'];

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
        header('Location: ' . $url . '/Admin/usuarios/create.php');
}else{
    echo "este usuario es nuevo";
    if ($password == $password_verif){
    
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
            header('Location: ' . $url . '/Admin/usuarios/index1.php');
        } else {
            session_start();
            $_SESSION["mensaje"] = "Error, el usuario no se pudo registrar!";
            $_SESSION["icono"] = 'error';
            header('Location: ' . $url . '/Admin/usuarios/create.php');
        }
        } else {
            session_start();
            $_SESSION["mensaje"] = "Error, las contraseñas no son iguales!";
            $_SESSION["icono"] = 'error';
            header('Location: ' . $url . '/Admin/usuarios/create.php');
        }
}


    ?>