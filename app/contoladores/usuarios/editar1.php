<?php
include ('../../config.php');

$id_usuario = $_POST['id_usuario'];
$nombre_completo = $_POST['nombre_Completo'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_verify = $_POST['password_verif'];
$cargo = $_POST['cargo'];
$fechaHora = date('Y-m-d H:i:s'); // Asigna la fecha y hora actual

if($password == ""){
    $sentencia = $pdo->prepare("UPDATE tb_usuarios 
SET nombre_Completo=:nombre_completo,
    cargo=:cargo,
    fyh_Actualizacion=:fyh_Actualizacion
    WHERE id_Usuario = :id_usuario  ");
    $sentencia->bindParam(':nombre_completo',$nombre_completo);
    $sentencia->bindParam(':cargo',$cargo);
    $sentencia->bindParam(':fyh_Actualizacion',$fechaHora);
    $sentencia->bindParam(':id_usuario',$id_usuario);

    if($sentencia->execute()){
        echo "se actualizó de la manera correcta";
        session_start();
        $_SESSION['mensaje'] = "Se actualizó de la manera correcta";
        $_SESSION['icono'] = 'success';
        header('Location: '.$url.'/admin/usuarios/index1.php');
    }else{
        session_start();
        $_SESSION['mensaje'] = "No se pudo actualizar al usuario";
        $_SESSION['icono'] = 'error';
        header('Location: '.$url.'/admin/usuarios/update.php?id_usuario='.$id_usuario);
    }
} else {
    if($password == $password_verify){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sentencia = $pdo->prepare("UPDATE tb_usuarios 
SET nombre_Completo=:nombre_completo,
    email=:email,
    password=:password,
    cargo=:cargo,
    fyh_Actualizacion=:fyh_Actualizacion
    WHERE id_Usuario = :id_usuario  ");
        $sentencia->bindParam(':nombre_completo',$nombre_completo);
        $sentencia->bindParam(':email',$email);
        $sentencia->bindParam(':password',$password);
        $sentencia->bindParam(':cargo',$cargo);
        $sentencia->bindParam(':fyh_Actualizacion',$fechaHora);
        $sentencia->bindParam(':id_usuario',$id_usuario);

        if($sentencia->execute()){
            echo "se actualizó de la manera correcta";
            session_start();
            $_SESSION['mensaje'] = "Se actualizó de la manera correcta";
            $_SESSION['icono'] = 'success';
            header('Location: '.$url.'/admin/usuarios/index1.php');
        }else{
            session_start();
            $_SESSION['mensaje'] = "No se pudo actualizar al usuario";
            $_SESSION['icono'] = 'error';
            header('Location: '.$url.'/admin/usuarios/editar.php?id_usuario='.$id_usuario);
        }

    } else {
        session_start();
        $_SESSION['mensaje'] = "Las contraseñas no son iguales";
        $_SESSION['icono'] = 'error';
        header('Location: '.$url.'/admin/usuarios/editar.php?id_usuario='.$id_usuario);
    }
}
?>
