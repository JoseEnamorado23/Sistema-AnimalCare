<?php
  include ("../veterinaria/layout/parte1.php");
  
?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
    var email_sesion= '<?php echo ($email_sesion); ?>';
    
   </script>
    <script>
      var a;
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale:'es',
          events: 'app/contoladores/reservas/cargar_reservas.php',
          editable: true,
          selectable: true,
          allDaySlot: false,
          
          
          dateClick: function(info) {
             a= info.dateStr;
            const fechacomocadena = a;
            var numeroDia= new Date(fechacomocadena).getDay();

            if (email_sesion=="") {
              $('#modalsesion').modal("show");
            }else{
              if (numeroDia != 6) {
             var ano= new Date().getFullYear();
             var mes= new Date().getMonth()+1;
             var dia= new Date().getDate();
             var hoy= (ano+"-0"+mes+"-"+dia);

             
              
              if (hoy <= a) {
                $('#modalreservar').modal("show");
              }else{
                Swal.fire({
                icon: "error",
                title: "Error...",
                text: "Por favor escoja un dia valido!",
                });
              }
             
           
              
            } else  {
              Swal.fire({
                icon: "error",
                title: "Error...",
                text: "No ahy atencion este dia!",
                });
            }
            }

            var fecha=info.dateStr;
            var res= "";
            var url1="app/contoladores/reservas/verificar_horario.php";
            $.get(url1,{fecha:fecha}, function (datos){
              res=datos;
              $('#respuesta_horario').html(res);
            }
          );
        
          },
        });
        calendar.render();
      });
      
    </script>
    <section class="home" id="home">
        <style>
            .home {
              min-height: 100vh;
              align-items: center;
              display: flex;
              justify-content: flex-end;
              background: url(imagenes/puppy-1047521_1280.jpg) no-repeat;
              background-position: center;
              background-size: cover;
              position: relative;
            }
        </style>
      <div class="content">
        <h3><span>Hola, </span> Reserva tu cita</h3>
      </div>

      <div class="wave" style="height: 150px; overflow: hidden;" >
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg>
      </div>">

    </section>

    <section class="services" id="servece" ">

      <h1 class="heading">Reserva tu cita</h1>
      
      <div id='calendar'></div>
     
    </section>

    

    <section class="services" id="servece">

      <h1 class="heading">Servicios</h1>

      <div class="box-container">

        <div class="box">
          <i class="fas fa-dog"></i>
          <h3>Consultas médicas</h3>
          <a href="#" class="btn" >leer mas</a>
        </div>

        <div class="box">
          <i class="fas fa-cat"></i>
          <h3>Consultas médicas</h3>
          <a href="#" class="btn" >leer mas</a>
        </div>

        <div class="box">
          <i class="fas fa-bath"></i>
          <h3>Consultas médicas</h3>
          <a href="#" class="btn" >leer mas</a>
        </div>

        <div class="box">
          <i class="fas fa-drumstick-bite"></i>
          <h3>Consultas médicas</h3>
          <a href="#" class="btn" >leer mas</a>
        </div>

        <div class="box">
          <i class="fas fa-baseball-ball"></i>
          <h3>Consultas médicas</h3>
          <a href="#" class="btn" >leer mas</a>
        </div>

        <div class="box">
          <i class="fas fa-heartbeat"></i>
          <h3>Consultas médicas</h3>
          <a href="#" class="btn" >leer mas</a>
        </div>

      </div>
    </section>

    <section class="contact" id="contact">
      <div class="image">
        <img src="imagenes/hero_image_16-1024x819.png" alt="">
        <?php echo $email_sesion ?>

      </div>
      <form action="">
        <h3>Contactanos</h3>
        <input type="text" placeholder="Ingrese su nombre" class="box">
        <input type="number" placeholder="Ingrese su numero" class="box">
        <input type="email" placeholder="Ingrese su email" class="box">
        <textarea name="" placeholder="mensaje" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="enviar mensaje" class="btn">
      </form>
    </section>
    <script src="script/script.js"></script>

     
    <?php
  include ("../veterinaria/layout/parte2.php");
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<div class="modal fade" id="modalsesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> <center><b>Reserva tu cita</b></center> </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>Debes iniciar sesion o registrarte para reservar una cita</h2>
        <div class="d-grid gap-2">
          <a href="<?php echo $url;?>/Ingresar/iniciarsesion.php" class="btn btn-primary" type="button">Iniciar sesion</a>
          <a href="<?php echo $url;?>/Ingresar/resgitro.php" class="btn btn-primary" type="button">Registrate</a>
</div>
        </div>
      </div>
      
    </div>
  </div>
</div>


<div class="modal fade" id="modalreservar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
      <center><h5 class="modal-title fs-5" id="exampleModalLabel"> Reserva tu cita</b> </h5>
</center>
<hr>
        <div class="row">
          <div id="respuesta_horario"></div>
          <div class="col-md-6">
            <center><b>Turno Mañana</b></center>
            <br>
          <div class="d-grid gap-2">
            <button class="btn btn-primary" id="btn_h1" data-bs-dismiss="modal" type="button">08:00 - 09:00 Am</button>
            <button class="btn btn-primary" id="btn_h2" data-bs-dismiss="modal" type="button">09:00 - 10:00 Am</button>
            <button class="btn btn-primary" id="btn_h3" data-bs-dismiss="modal" type="button">10:00 - 11:00 Am</button>
            <button class="btn btn-primary" id="btn_h4" data-bs-dismiss="modal" type="button">11:00 - 12:00 Am</button>
          </div>
          </div>
          <div class="col-md-6">
          <center><b>Turno Tarde</b></center>
            <br>
          <div class="d-grid gap-2">
            <button class="btn btn-primary" id="btn_h5" data-bs-dismiss="modal" type="button">02:00 - 03:00 Pm</button>
            <button class="btn btn-primary" id="btn_h6" data-bs-dismiss="modal" type="button">03:00 - 04:00 Pm</button>
            <button class="btn btn-primary" id="btn_h7" data-bs-dismiss="modal" type="button">04:00 - 05:00 Pm</button>
            <button class="btn btn-primary" id="btn_h8" data-bs-dismiss="modal" type="button">05:00 - 06:00 Pm</button>
            <br>
          </div>
          <div class="modal-footer">
            <center>
            <a href="" class="btn btn-secondary">
        Cancelar
       </a>
            </center>
       
        
      </div>
          </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>


<div class="modal fade" id="modalformulario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> <center><b>Reserva tu cita</b></center> </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <form action="<?php echo $url;?>/app/contoladores/reservas/controller_reservas.php" method="post">
            <div class="row">
            <div class="col-md-6">
                <label for="">Nombre del usuario</label>
                <input type="text" class="form-control" value="<?php echo $nombre_usuario_sesion; ?>" disabled>
                <input name="id_usuario" type="text" class="form-control" value="<?php echo $id_usuario_sesion; ?>" hidden>
              </div>
              <div class="col-md-6">
                <label for="">Correo electronico</label>
                <input type="email" class="form-control" value="<?php echo $email_sesion; ?>" disabled>
              </div>

              <div class="col-md-6">
                <label for="">Nombre de la mascota</label>
                <input type="text" name="nombre_mascota" class="form-control">
              </div>

              <div class="col-md-6">
                <label for="">Tipo de servicio</label>
                <select name="tipo_servicio" id="" class="form-control">
                  <option value="Consulta medica">Consulta medica</option>
                  <option value="Vacunacion ">Vacunacion</option>
                  <option value="Odontologia veterinaria">Odontologia veterinaria</option>
                  <option value="Cuidados esteticos">Cuidados esteticos</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="">Fecha de reserva</label>
                <input type="text" class="form-control" id="fecha_reserva" disabled>
                <input type="text" name="fecha_cita" class="form-control" id="fecha_reserva2" hidden >
              </div>

              <div class="col-md-6">
                <label for="">Hora de reserva</label>
                <input type="text" class="form-control" id="hora_reserva" disabled>
                <input type="text" name="hora_cita" class="form-control" id="hora_reserva2" hidden >
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Registrar reserva</button>
                
              </div>

            </div>
         
        </div>
        </div>
      </div>
      
    </div>
  </div>
  </form>
</div>

<script>
  $(document).ready(function() {
    var horarios = [
      '08:00 - 09:00 Am',
      '09:00 - 10:00 Am',
      '10:00 - 11:00 Am',
      '11:00 - 12:00 Am',
      '02:00 - 03:00 Pm',
      '03:00 - 04:00 Pm',
      '04:00 - 05:00 Pm',
      '05:00 - 06:00 Pm'
    ];

    horarios.forEach(function(hora, index) {
      $('#btn_h' + (index + 1)).click(function() {
        $('#modalformulario').modal("show");
        $('#fecha_reserva').val(a);
        $('#hora_reserva').val(hora);
        $('#fecha_reserva2').val(a);
        $('#hora_reserva2').val(hora);
      });
    });
  });
</script>