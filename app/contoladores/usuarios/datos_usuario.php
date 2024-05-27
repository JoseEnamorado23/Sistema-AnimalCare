<?php

$sql = "SELECT * FROM `tb_usuarios` WHERE `id_Usuario` = $id_usuario ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($usuarios as $usuario){
    $nombre_Completo = $usuario['nombre_Completo'];
    $correo = $usuario['email'];
    $cargo = $usuario['cargo'];
    $fechaegistro = $usuario['fyh_Creation'];
    $fecha_actualizacion = $usuario['fyh_Actualizacion'];

}
?>

