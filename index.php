<?php
include_once "header.php";
?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
      aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
      aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/puente.jpeg" class="img-fluid d-block mx-auto" width="1000" height="500" alt="Puente viejo">
    </div>
    <div class="carousel-item">
      <img src="img/plaza.jpeg" class="img-fluid d-block mx-auto" width="1000" height="500" alt="Plaza principal">
    </div>
    <div class="carousel-item">
      <img src="img/museo.jpeg" class="img-fluid d-block mx-auto" width="1000" height="500 " alt="Museo">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
  integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="img/excur.jpeg" class="card-img-top" alt="Montar a caballo">
      <div class="card-body">
        <h5 class="card-title">Montar a caballo en San Antonio de Areco</h5>
        <p class="card-text">Descubre la verdadera pasión gaucha mientras cabalgas en medio de los campos verdes,
          rodeado de la belleza natural y la autenticidad de San Antonio de Areco. Deja que el ritmo de los cascos de
          los caballos te transporte a otra época y sumérgete en la historia y tradición del gaucho argentino.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/puerta.jpeg" class="card-img-top" alt="Puerta de San Antonio">
      <div class="card-body">
        <h5 class="card-title">Historia y antiguedades</h5>
        <p class="card-text">Te invitamos a sumergirte en un viaje en el tiempo y explorar la arquitectura histórica de
          San Antonio de Areco. Nuestro encantador pueblo se enorgullece de preservar casas antiguas que cuentan
          historias de épocas pasadas y reflejan la riqueza cultural de nuestra región.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/sada.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">La comida no falta</h5>
        <p class="card-text">Pero el asado no es solo comida, es una experiencia social y compartida. En San Antonio de
          Areco, nos encanta reunirnos alrededor del fuego, disfrutar de una buena conversación y compartir risas con
          amigos y familiares mientras degustamos esta deliciosa especialidad. Nuestros restaurantes y parrillas te
          brindarán un ambiente acogedor y tradicional para que vivas esta experiencia al máximo.</p>
      </div>
    </div>
  </div>
</div>
<div class="text-end">
  <div class="rectangular-caja">
    <a href="login/index.php" class="inicio">Administrador</a>
  </div>
<?php
include_once "footer.php";
?>