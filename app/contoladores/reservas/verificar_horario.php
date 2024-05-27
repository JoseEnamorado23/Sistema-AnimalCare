<?php 

include('../../config.php');

 $fecha= $_GET['fecha'];
 $hora_cita="";
 $query=$pdo->prepare("SELECT * FROM tb_rreservas where fecha_cita = '$fecha'");
 $query->execute();
 $datos = $query->fetchAll(PDO::FETCH_ASSOC);

 foreach ($datos as $dato){
    $hora_cita=$dato['hora_cita'];
    $horario = [
        '08:00 - 09:00 Am',
        '09:00 - 10:00 Am',
        '10:00 - 11:00 Am',
        '11:00 - 12:00 Am', 
        '02:00 - 03:00 Pm',
        '03:00 - 04:00 Pm',
        '04:00 - 05:00 Pm',
        '05:00 - 06:00 Pm'
      ];

      for ($i=0; $i < 8; $i++) { 

        if ($horario[$i]==$hora_cita) {
            $num= $i + 1 ;
            $hora_res="#btn_h".$num;
            echo "<script> $('$hora_res').attr('disabled', true);$('$hora_res').css('background-color','red') </script>";
        }
      }
 }

?>