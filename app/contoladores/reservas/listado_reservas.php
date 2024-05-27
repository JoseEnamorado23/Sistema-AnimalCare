<?php


$sql = "SELECT *, usu.nombre_Completo as nombre_Completo, usu.email as email FROM tb_rreservas as res INNER JOIN tb_usuarios as usu ON usu.id_Usuario = res.id_Usuario ";
$query = $pdo->prepare($sql);
$query->execute();
$reservas = $query->fetchAll(PDO::FETCH_ASSOC);

?>