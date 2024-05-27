<?php 
include ('../../config.php');

$sql = 'SELECT title, start, end, color FROM tb_rreservas';
$query = $pdo->prepare($sql);
$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($resultado);
?>