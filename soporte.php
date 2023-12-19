<?php
include_once "header.php";
?>
<title>INMUEBLES RIPA</title>

<section>

    <body>
        <img src="img/soporte.png" class="" alt="...">
     
  <div class="row justify-content-center">
    <div class="col-sm-12">
        <div class="row">
          <div class="col-2 mb-4 text-center">
            <img src="img/engranaje.png" class="icon" height="50" width="50" alt="Configuraciones">
            <h5>Configuracion</h5>
          </div>
          <div class="col-2 mb-4 text-center">
            <img src="img/usuario.png" class="icon" height="50" width="50" alt="Usuario">
            <h5>Usuario</h5>
          </div>

          <div class="col-2 mb-4 text-center">
            <img src="img/preguntasfrecuentes.png" class="icon" height="50" width="50" alt="Preguntas Frecuentes">
            <h5>Preguntas frecuentes</h5>
          </div>

          <div class="col-2 mb-4 text-center">
            <img src="img/seguridad.png" class="icon" height="50" width="50" alt="Seguridad">
            <h5>Seguridad</h5>
          </div>

          <div class="col-2 mb-4 text-center">
            <img src="img/pagos.png" class="icon" height="50" width="50" alt="Pagos">
            <h5>Pagos</h5>
          </div>

          <div class="col-2 mb-4 text-center">
            <img src="img/otros.png" class="icon" height="50" width="50" alt="Otros">
            <h5>Otros</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="central">
  <div class="row justify-content-center">
    <div class="col-sm-12 medio">
      <div class="card p-4 cuestionario">
        <h5 class="card-title">DEJA TUS DATOS Y NOS COMUNICAMOS CON VOS</h5>
        
        <form>
          <div class="mb-3">
            <label for="nombre" class="form-label">Tu nombre completo</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre completo">
          </div>
          
          <div class="mb-3">
            <label for="email" class="form-label">Tu email</label>
            <input type="email" class="form-control" id="email" placeholder="correo@ejemplo.com">
          </div>
          
          <div class="mb-3">
            <label for="asunto" class="form-label">¿Con qué te podemos ayudar?</label>
            <input type="text" class="form-control" id="asunto" placeholder="Asunto del mensaje">
          </div>
          
          <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" rows="5" placeholder="Escribe aquí tu mensaje"></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary">Enviar mensaje</button>
        </form>
      </div>
    </div>
  </div>
</div>

        
</section>
</body>
<?php
include_once "footer.php";
?>