<?php
include ('../../app/config.php');
include ('../../Admin/layout/parte1.php');
include('../../app/contoladores/reservas/listado_reservas.php');
?>


<div class="container">
    <br>
    <h2 class="display-4">Listado de reservas</h2>


    <div class="row">
    <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Reservas registradas</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                <i class="fas fa-expand"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <div class="card-body ">
        <table id="example1" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Num</th>
                    <th>Nombre completo</th>
                    <th>Email</th>
                    <th>Nombre  de la mascota</th>
                    <th>Tipo de servicio</th>
                    <th>Fecha cita</th>
                    <th>Hora cita</th>
                    
                </tr>

            </thead>
            <tbody>
                <?php 
                $contador=0;  
                foreach ($reservas as $reserva) { 
                $contador=$contador+1;
                $id_reserva = $reserva['id_reserva'];?>
                
                
                <tr>
                    <td><?php echo $contador; ?></td>
                    <td><?php echo $reserva[('nombre_Completo')]; ?></td>
                    <td><?php echo $reserva[('email')]; ?></td>
                    <td><?php echo $reserva[('nombre_mascota')]; ?></td>
                    <td><?php echo $reserva[('tipo_servicio')]; ?></td>
                    <td><?php echo $reserva[('fecha_cita')]; ?></td>
                    <td><?php echo $reserva[('hora_cita')]; ?></td>


                     
                    
                </tr> 
                <?php
                }?>

            </tbody>
        </table>
        <br>
        <br>
        
        
    </div>
</div>

    </div>
</div>


<?php include ('../../Admin/layout/parte2.php');
include ('../../Admin/layout/mensaje.php');
?>

<script>
    $(function() {
    $("#example1").DataTable({
        "pageLength": 5,
        "language": {
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Reservas",
            "infoEmpty": "Mostrando 0 de 0 Reservas",
            "infoFiltered": "(Filtrado de _MAX_ total Reservas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Usuarios",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscador:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        "responsive": true,"lengthChange": true,"autoWidth": false,
        buttons: [{
            extend: "collection",
            text: "Reportes",
            orientation: "landscape",
            buttons: [{
                    text: "Copiar",
                    extend: "copy",
                },
                {
                    extend: "pdf"
                },
                {
                    extend: "csv"
                },
                {
                    extend: "excel"
                },
                {
                    text: "Imprimir",
                    extend: "print",
                    collectionlayout: 'fixed three-column'
                }
            ]  
        },
        {
            extend: 'colvis',
            text: 'Visor de columnas',
        }
        ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)') ;
});

</script>