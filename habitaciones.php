<?php
include_once "header.php";
?>
<div class="container mt-5">
    <section class="filtro-lugar text-center">
        <form class="p-3 rounded" style="background-color: #f8f9fa; max-width: 800px; margin-left: auto; margin-right: 0;">
            <h2 class="mb-3">Encuentra tu lugar perfecto</h2>

            <div class="mb-3">
                <label for="lugar" class="sr-only">Lugar:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Buscar por lugar">
                </div>
            </div>

            <div class="mb-3">
                <label for="fecha-desde" class="sr-only">Desde:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" id="fecha-desde" name="fecha-desde">
                </div>
            </div>

            <div class="mb-3">
                <label for="fecha-hasta" class="sr-only">Hasta:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" id="fecha-hasta" name="fecha-hasta">
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-buscar"><i class="fas fa-search"></i> Buscar</button>
        </form>
    </section>
</div>




<div class="container g-0">
  <div class="column-1 ">
    <div class="filtro-tipos tit ">

      <h3>Tipo de Propiedad:</h3>
      <div>
        <label>
          <input type="checkbox" name="tipo-propiedad" value="habitacion">
          Habitación
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="tipo-propiedad" value="casa">
          Casa
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="tipo-propiedad" value="departamento">
          Departamento
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="tipo-propiedad" value="hotel">
          Hotel
        </label>
      </div>
      <div>
        <h3>Precios:</h3>
        <label>
          <input type="checkbox" name="precio" value="menor-30000">
          Menor a $30,000
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="precio" value="10000-30000">
          $10,000 - $30,000
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="precio" value="30000-50000">
          $30,000 - $50,000
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="precio" value="mayor-50000">
          Mayor a $50,000
        </label>
      </div>
      <div>
        <h3>Opiniones:</h3>
        <select name="opiniones">
          <option value="">Todas las opiniones</option>
          <option value="excelente">Excelente</option>
          <option value="bueno">Bueno</option>
          <option value="regular">Regular</option>
          <option value="malo">Malo</option>
        </select>
      </div>
      <div>
        <h3>Amenities:</h3>
        <label>
          <input type="checkbox" name="amenities" value="wifi">
          Wifi
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="amenities" value="piscina">
          Piscina
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="amenities" value="estacionamiento">
          Estacionamiento
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="amenities" value="gimnasio">
          Gimnasio
        </label>
      </div>
      <div>
        <h3>Habitaciones y Camas:</h3>
        <label>
          <input type="checkbox" name="habitaciones" value="1-habitacion">
          1 Habitación
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="habitaciones" value="2-habitaciones">
          2 Habitaciones
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="camas" value="1-cama">
          1 Cama
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="camas" value="2-camas">
          2 Camas
        </label>
      </div>
      <div>
        <h3>Accesibilidades:</h3>
        <label>
          <input type="checkbox" name="accesibilidades" value="ascensor">
          Ascensor
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="accesibilidades" value="rampa">
          Rampa
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="accesibilidades" value="baño-adaptado">
          Baño Adaptado
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="accesibilidades" value="estacionamiento-adaptado">
          Estacionamiento Adaptado
        </label>
      </div>
    </div>
  </div>

  <div class="col filtro-imagenes">
    <div class="filtro-imagen">
      <img src="img/famsup.png" alt="HABITACION FAMILIAR SUPERIOR">
      <p>HABITACION FAMILIAR SUPERIOR</p>
    </div>
    <div class="filtro-imagen">
      <img src="img/mono.png" alt="MONOAMBIENTE">
      <p>MONOAMBIENTE</p>
    </div>
    <div class="filtro-imagen">
      <img src="img/premium.png" alt="HABITACION PREMIUM">
      <p>HABITACION PREMIUM</p>
    </div>
    <div class="filtro-imagen">
      <img src="img/suite.png" alt="SUITE">
      <p>SUITE</p>
    </div>
    <div class="filtro-imagen">
      <img src="img/superior.png" alt="HABITACION SUPERIOR">
      <p>HABITACION SUPERIOR</p>
    </div>
  </div>

</div>
</div>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<?php
include_once "footer.php";
?>