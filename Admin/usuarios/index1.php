<?php
include ('../../app/config.php');
include ('../../Admin/layout/parte1.php');
include('../../app/contoladores/usuarios/listado_de_usuarios.php');
?>


<div class="container">
    <br>
    <h2 class="display-4">Listado de usuarios</h2>


    <div class="row">
    <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Usuarios registrados</h3>
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
                    <th>email</th>
                    <th>cargo</th>
                    <th>Fecha de registro</th>
                    <th>Acciones</th>
                    
                </tr>

            </thead>
            <tbody>
                <?php 
                $contador=0;  
                foreach ($usuarios as $usuario) { 
                $contador=$contador+1;
                $id_usuario = $usuario['id_Usuario'];?>
                
                
                <tr>
                    <td><?php echo $contador; ?></td>
                    <td><?php echo $usuario[('nombre_Completo')]; ?></td>
                    <td><?php echo $usuario[('email')]; ?></td>
                    <td><?php echo $usuario[('cargo')]; ?></td>
                    <td><?php echo $usuario[('fyh_Creation')]; ?></td>


                     <td style="align-items: center;"> 
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="ver.php?id_usuario=<?php echo $id_usuario;?>" class="btn btn-info"><i class="bi bi-eye"></i></a>
                    <a href="editar.php?id_usuario=<?php echo $id_usuario;?>" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                    <a href="delete.php?id_usuario=<?php echo $id_usuario;?>" type="button" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                    </div>
                    </td>
                    
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
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
            "infoEmpty": "Mostrando 0 de 0 Usuarios",
            "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
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