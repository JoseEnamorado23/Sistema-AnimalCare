<?php
        if((isset($_SESSION["mensaje"]) && isset($_SESSION["icono"]))) {
        $respuesta= $_SESSION["mensaje"];
        $icono= $_SESSION["icono"];
        ?>
        <script>
            Swal.fire({
            icon: "<?php echo $icono ?>",
            text:"<?php echo $respuesta ?>", 
            showConfirmButton: false,
            timer: 2500
        });

        </script>
        <?php
        unset($_SESSION["mensaje"]);
            }
        ?>