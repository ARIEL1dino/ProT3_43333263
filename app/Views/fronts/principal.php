
    
   <!-- Cuerpo principal de la páagina -->
    <section id="principal" class="container my-5">
      <h1 class="text-center mb-4">Bienvenido a Nuestro Sitio de Mascotas</h1>
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url('assets/img/carosul_1.jpeg')?>" class="d-block w-100" alt="Imagen 1"> <!-- Link de referencia -->
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('assets/img/carosul_2.JPEG')?>" class="d-block w-100" alt="Imagen 2"> <!-- Link de referencia -->
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('assets/img/carosul_3.jpeg')?>" class="d-block w-100" alt="Imagen 3"> <!-- Link de referencia -->
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
<!-- Cuerpo secundario de la páagina -->
      <div class="container mt-4">
      <h1 class="text-center fw-bold">TU MASCOTA</h1>
      <hr>

      <!-- Categorías -->
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card category-card bg-success">
            <img src="<?php echo base_url('assets/img/perro_cuerposecundario.jpg')?>" class="card-img-top" alt="Perros">
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="card category-card bg-primary">
            <img src="<?php echo base_url('assets/img/gato.jpg')?>" class="card-img-top" alt="Gatos">
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="card category-card bg-danger">
            <img src="<?php echo base_url('assets/img/mascotas_tradicionales.jpg')?>" class="card-img-top" alt="Mascotas no tradicionales">
            
          </div>
        </div>
      </div>

      <!-- Sabías qué -->
      <div class="sabias-que mt-5">
        <div class="sabias-que-header">
          ¿SABÍAS QUÉ...?
        </div>
        <div class="d-flex align-items-center">
          <img src="<?php echo base_url('assets/img/perro_sabias_q.jpg')?>" alt="Perro">
          <div>
            <p class="mb-0 text-muted"><small>20/05/2025</small></p>
            <p class="fw-bold mb-1">Botiquín de primeros auxilios para un perro</p>
            <p class="mb-0">Que cuando sales de paseo con tu perro, es buena idea llevar un botiquín de primeros auxilios, aquí te decimos qué debe contener:</p>
            <ul>
              <li>Collar.</li>
              <li>Correa.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </section>